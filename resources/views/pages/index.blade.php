@extends('layouts.app')
@section('content')

    <div class="jumbotron text-center">
        <h1> <i class="fal fa-users-class    ">{{ $title }}</i></h1>
        <p class="justify-content-start">This is complex application supported in larevel</p>
        <p>
            <a class="btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn-primary btn-lg" href="/register" role="button">Register</a>
        </p>
@endsection
