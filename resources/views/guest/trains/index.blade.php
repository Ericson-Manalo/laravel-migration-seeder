@extends('layouts.app')


@section('title', 'Trains!')


@section('main-content')
    <h1 class="text-center">
        Trains info
    </h1>
    <div class="container">
        @foreach ($trainList as $train)
        <ul class="list-group">
            <li class="list-group-item">
                <h2>
                {{$train->agency}} 
                </h2>
                <p>
                    Departure station: <em>{{$train->departure_station}}</em>
                </p> 
                <p>
                    Arrival station: <em>{{$train->arrival_station}}</em>
                </p> 
                <p>
                    Departure time: <em>{{$train->departure_time}}</em> - Arrival time <em>{{$train->arrival_time}}</em>
                </p> 
                <p>
                    {{$train->train_code}}
                </p>
                <p>
                    Carriages number: {{$train->carriages_num}}
                </p>

               
            </li>
        </ul>
        @endforeach
    </div>
@endsection