@extends('template.main')

@section('title')
    View Places
@endsection

@section('content')
    
    <div class="container" style="min-height:80vh">

        <h2 class="float-left">Places</h2>
        <div class="float-right"><a href="/place/insert" class="btn btn-success">Insert Place</a></div>
        <div class="clear" style="clear:both"></div>
        <hr>

        <table class="table table-hover table-bordered">
            <thead class="thead thead-dark">
                <tr>
                    <th>No. </th>
                    <th>Place</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>@php
                $a = 0;
            @endphp
                
                @foreach ($places as $place)
                    <tr class="">
                        <td class=""> {{ ++$a }}</td>
                        <td class=""> {{ $place->name }}</td>
                        <td class=""><a href="/place/{{ $place->id }}" class="btn btn-primary btn-sm">Detail</a> <a href="/place/delete/{{ $place->id }}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection