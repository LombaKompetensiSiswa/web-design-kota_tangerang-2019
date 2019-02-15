@extends('template.mainClient')

@section('title')
    Hasil Cari
@endsection

@section('content')
<div class="container mt-3" style="height:100vh">

    <h2>Routes</h2>
    <hr>

        <table class="table table-hover table-bordered">

    @php
        $a = 0;
    @endphp

            <thead class="thead thead-dark">
                <tr>
                    <th>No</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Distance</th>
                    <th>Speed</th>
                    <th>Type</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($routes as $route)
                    <tr>
                    <td>{{ ++$a }}</td>
                    <td>{{ $route->departure_time }}</td>
                    <td>{{ $route->arrival_time }}</td>
                    <td>{{ $route->distance }}</td>
                    <td>{{ $route->speed }}</td>
                    <td>{{ $route->type }}</td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection