@php
$i = 1;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">📋 View Tasks</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th>#</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example static row -->
                    @foreach ($tasks as $task)
                    <tr>
                        <td class="text-center">{{$i++}}</td>
                        <td>{{$task->task}}</td>
                        <td class="text-center">{{$task->date}}</td>
                        <td class="text-center"><span class="badge bg-warning">{{$task->status}}</span></td>
                        <td class="text-center">
                            <form method="post" action="{{route('toDoList.action')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$task->id}}">
                                @if ($task->status == 'pending')
                                <button name="action" value="check" type="submit" class="btn btn-sm btn-success me-1"><i
                                        class="fa-solid fa-check"></i></button>
                                <button name="action" value="edit" type="submit" class="btn btn-sm btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                @endif
                                <button name="action" value="delete" type="submit" class="btn btn-sm btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Add more dynamic rows here -->
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="{{route('toDoList.home')}}" class="btn btn-secondary">
                <i class="fa-solid fa-arrow-left"></i> Add More Tasks!
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>