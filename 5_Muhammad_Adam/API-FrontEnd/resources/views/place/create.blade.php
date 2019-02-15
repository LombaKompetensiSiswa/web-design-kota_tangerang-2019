@extends('template.main')

@section('title')
    Create Place
@endsection

@section('content')
    
    <div class="container mb-4">

        <h2>Create Place</h2>
        <hr>

        <form action="/post/place" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name" class="label-control">Place Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                    <label for="latitude" class="label-control">Latitude:</label>
                    <input type="text" name="latitude" id="latitude" class="form-control">
                </div>
                <div class="form-group">
                        <label for="Longitude" class="label-control">Longitude:</label>
                        <input type="text" name="longitude" id="longitude" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="x" class="label-control">x:</label>
                            <input type="text" name="x" id="x" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="y" class="label-control">y:</label>
                                <input type="text" name="y" id="y" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="file" class="label-control">Image: </label>
                                <input type="text" name="image_path" id="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description" class="label-control">Description:</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>

        </form>

    </div>

@endsection