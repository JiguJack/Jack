


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .regbtn,
        .logbtn {
            margin: 5px 5px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <h1 class="heading">Welcome to my First <strong>Site.</strong> </h1>
        <a href="{{url('/')}}/register"><button class="btn btn-dark regbtn">Sign Up</button></a> <br>
        <a href="{{url('/')}}/login"><button class="btn btn-dark logbtn">Login</button></a>
    </div>
    <div class="container viewuser">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data => $user)
                <tr>
                    <!-- <td>{{ $user->userid }}</td> -->
                    <td>{{ $user->firstName }}</td>
                    <td>{{ $user->lastName }}</td>
                    <td><a href="{{ route('showupdate.user', $user->userid) }}"><button type="button" class="btn btn-success">Update</button></a></td>
                    <td><a href="{{ route('delete.user', $user->userid) }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>