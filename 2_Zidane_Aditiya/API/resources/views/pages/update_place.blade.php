@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2>Update Place</h2>
            <form action="http://localhost:8080/update" method="POST">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
                <label for="">latitude</label>
                <input type="text" class="form-control" name="latitude">
                <label for="">longitude</label>
                <input type="text" class="form-control" name="longitude">
                <label for="">x</label>
                <input type="text" class="form-control" name="x">
                <label for="">y</label>
                <input type="text" class="form-control" name="y">
                <label for="">image_path</label>
                <input type="text" class="form-control" name="image_path">
                <label for="">description</label>
                <input type="text" class="form-control" name="description">
                <button name="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection