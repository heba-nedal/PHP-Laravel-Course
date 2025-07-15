<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ToDoController extends Controller
{
    function home()
    {
        return view('home');
    }
    function view()
    {
        $tasks = Task::all();
        return view('viewtasks', compact('tasks'));
    }
    function add(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'task' => 'required',
            'date' => 'required',
        ]);
        Task::create([
            'task' => $request->task,
            'date' => $request->date,
            'status' => 'pending',
        ]);
        return redirect()->route('toDoList.viewTasks');
    }


    function action(Request $request)
    {
        $task = Task::query()->findOrFail($request->id);
        $action = $request->input('action');

        if ($action === 'check') {
            $task->update([
                'status' => 'done'
            ]);
        } elseif ($action === 'delete') {
            Task::destroy($task->id);
        } elseif ($action === 'edit') {
            return redirect()->route('toDoList.editPage', ['id' => $task->id]);
        }
        return redirect()->route('toDoList.viewTasks');
    }

    function editView($id)
    {
        $task = Task::query()->findOrFail($id);
        return view('edit_task', compact('task'));
    }

    function editPost(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'task' => 'required',
            'date' => 'required',
        ]);
        $task = Task::query()->findOrFail($request->id);
        $task->update([
            'task' => $request->task,
            'date' => $request->date,
            'status' => 'pending'
        ]);
        return redirect()->route('toDoList.viewTasks');
    }
}
