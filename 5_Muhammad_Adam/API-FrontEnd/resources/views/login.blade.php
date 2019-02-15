@extends('template.auth')

@section('title')
    Login
@endsection

@section('content')
    
    <div class="container bg-gray p-5 mt-5">

        <h2>Login Admin</h2>
        <hr>

        <form action="/auth/loginAPI" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="username" class="label-control">
                    Username:
                </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                    <label for="password" class="label-control">
                        Password:
                    </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button class="btn btn-success">Submit</button>
        </form>

    </div>

@endsection