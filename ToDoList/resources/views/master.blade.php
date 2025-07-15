<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">@yield('title')</h2>
        <form method="post" @yield('action')>
            @csrf
            <div class="row g-2 mb-4">
                @yield('id')
                <div class="col-md-6">
                    <input name="task" @yield('value1') type="text" id="taskInput" class="form-control @error('task')
                        is-invalid
                    @enderror" placeholder="Enter task">
                    @error('task')
                    <small class="invalid-feedback"> {{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
                        <input name="date" @yield('value2') type="date" id="taskDate" class="form-control @error('date')
                            is-invalid
                        @enderror">
                        @error('date')
                        <small class="invalid-feedback"> {{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" type="submit">@yield('button')</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>