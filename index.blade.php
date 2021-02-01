<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css.map') }}">
    <title>CreateUser Form</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <h1 class="display-4">User Create Table</h1>
        <div class="container py-5">
            <form action="{{ url('createuser') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-4">
                        <label>FirstName</label>
                        <input type="text" name="firstName" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label>LastName</label>
                        <input type="text" name="lastName" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label>Email Address</label>
                        <input type="email" name="emailAddress" class="form-control">
                    </div>
                </div>
                <div  class="form-row">
                    <div class="form-group col-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="50" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Date-Of-Birth</label>
                    <input type="date" name="dateOfBirth" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
