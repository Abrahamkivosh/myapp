
@extends('layouts.app')
@section('content')

    <a href="/posts"> <button type="button" class="btn btn-primary">GO BACK</button></a>
   <br /> <div class="wrapper">
        <div class='border-dark'>
            <div class="bg bg-white">
        <h4>{{ $Post->title}}</h4>
        <h4>{!! $Post->body !!}</h4>
        <small>Created on : {{ $Post->created_at}}</small>
        </div>
        <div class=" form-control-lg">
        <a href="posts/edit">Edit</a>
        </div>
    </div>


    </div>


@endsection
