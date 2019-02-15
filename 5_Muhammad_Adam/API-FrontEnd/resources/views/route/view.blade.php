@extends('template.main')

@section('title')
    Search Places
@endsection

@section('content')
    
    <div class="row">

        <div class="col-md-6">

        </div>

        <div class="col-md-6">
            <img src="{{ $places->image_path }}" alt="Gambar Map" class="img-fluid"/>
        </div>

    </div>

@endsection