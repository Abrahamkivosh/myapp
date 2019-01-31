@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
    <ul class="list-group">
    @foreach($services as $service)
    <li class="list-group-item">{{$service}}</li>

    @endforeach

    </ul>

    @endif


    <h2 class="covered-by-medium-tests">This is page is about services we over</h2>
    <h3>We will be advancing soon</h3>
   @endsection
