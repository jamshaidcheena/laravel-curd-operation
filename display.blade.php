<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CreateUser Form</title>
</head>
<body>
<div class="container">
    <a href="{{ url('index') }}" class="btn btn-primary">Add Student</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">DateOfBirth</th>
            <th scope="col">Update</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @if($student)
            @foreach($student as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->firstName}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->emailAddress}}</td>
{{--            <td>{{$student->password}}</td>--}}
{{--            <td>{{$student->password_confirmation}}</td>--}}
{{--            <td>{{$student->description}}</td>--}}
            <td><img width="50px" height="50px" src="{{ asset('uploads/picture/' . $student->image) }}"></td>
            <td>{{$student->dateOfBirth}}</td>
            <td><a href="update/{{$student->id}}" class="btn btn-primary">Edit</a></td>
            <td><a href="delete/{{$student->id}}" class="btn btn-danger">Delete</a></td>
        </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="btn btn-danger btn-block">Data not found</td>
            </tr>
        @endif

        </tbody>
    </table>


</div>

</body>
</html>
