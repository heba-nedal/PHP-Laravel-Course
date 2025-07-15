@extends('master')
@section('title')
📝 Edit Task
@endsection

@section('action')
action="{{route('toDoList.editTask')}}"
@endsection

@section('button')
Edit Task
@endsection

@section('id')
<input type="hidden" name="id" id="id" value="{{$task->id}}">
@endsection

@section('value1')
value= "{{$task->task}}"
@endsection

@section('value2')
value= "{{$task->date}}"
@endsection