@extends('template.mainClient')

@section('title')

    Select Routes
    
@endsection

@section('content')
    
    <div class="container-fluid">

        <div class="row"  style="min-height:100vh">

            <div class="col-sm-4 pt-2" style="background-color: #cfcfcf">
                <h2>Routes</h2>
                <hr>

                <form action="/search" method="get">
                    <div class="form-group">
                    <label for="place1" class="label-control">Place 1:</label>
                        <select name="place_1" id="place1" class="form-control">
                            @foreach ($places as $place)

                                <option value="{{ $place->id }}">{{ $place->name }}</option>
                                
                            @endforeach
                        </select>
                        <label for="place2" class="label-control">Place 2:</label>
                        <select name="place_2" id="place2" class="form-control">
                            @foreach ($places as $place)

                                <option value="{{ $place->id }}">{{ $place->name }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-sm-8">
                <img src="{{ asset('img/jawa.png') }}" alt="" class="w-100 h-100">
            </div>

        </div>

    </div>

@endsection

