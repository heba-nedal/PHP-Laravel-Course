<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>

<body>

    <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>EDIT</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>IMAGE</th>
                        <th>MSG</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact_rows as $row)
                    <tr>
                        <td><a class="btn btn-info" href="{{route('site1.edit', $row->id)}}">edit</a>
                        </td>
                        <!-- Must Be The Same As Columns Names -->
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->name}}</td>
                        <td>{{ $row->email}}</td>
                        <td>{{ $row->phone}}</td>
                        <!--    <td>{{ $row->image}}</td>   -->
                        <td><img src="{{ asset('uploads/' . $row->image) }}" style="width:70px"></td>
                        <td>{{ $row->msg}}</td>
                        <td>{{ $row->created_at}}</td>
                        <td>{{ $row->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>