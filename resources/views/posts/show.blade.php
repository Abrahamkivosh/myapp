
@extends('layouts.app')
@section('content')

   <br> <a href="/posts"> <button type="button" class="btn btn-primary">GO BACK</button></a><br><br>
   <br /> <div class="wrapper">
        <div class='border-dark'>
            <div class="bg bg-white">
        <h4>{{ $Post->title}}</h4><hr />
        <h4>{!! $Post->body !!}</h4>
        <small>Created on : {{ $Post->created_at}}</small><hr />
    </div>

            <div class=' btn btn-info'>
        <a href="/posts/{{ $Post->id }}/edit">Edit</a>
        </div><br /><br>

        {!! Form::open(['action' => ['PostsController@destroy',$Post->id],'method'=>'POST','class'=> 'pull-right']) !!}

            {!! Form::hidden('_method', 'DELETE') !!}

            {!! Form::submit('Delete post', ['class'=>' btn btn-danger']) !!}

        {!! Form::close() !!}






    </div>


    </div>


@endsection
