@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
          <tr class="table-dark">
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Code</th>
            <th scope="col">Departure Date</th>
            <th scope="col">On Time</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($trains as $train)
          <tr>
            <td>{{$train -> departure_station}}</td>
            <td>{{$train -> arrival_station}}</td>
            <td>{{$train -> code}}</td>
            <td>{{$train -> departure_date}}</td>
            <td>{{$train -> on_time}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection