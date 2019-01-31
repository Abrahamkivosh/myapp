
@extends('layouts.app')
@section('content')

   <br> <a href="/posts"> <button type="button" class="btn btn-primary">GO BACK</button></a><br><br>
   <br /> <div class="wrapper">
        <div class='border-dark'>
            <div class="bg bg-white">
        <h4>{{ $Post->title}}</h4><hr />
        <h4>{!! $Post->body !!}</h4>
        <small>Created on : {{ $Post->created_at}} created by admin : {{ $Post->user_id}}</small><hr />




        @if (!Auth::guest())
        @if (Auth::user()->id === $Post->user_id)


        <div class=' btn btn-info float-left'>
                <a href="/posts/{{ $Post->id }}/edit">Edit</a>
                </div>

        {!! Form::open(['action' => ['PostsController@destroy',$Post->id],'method'=>'POST','class'=> 'pull-right']) !!}

            {!! Form::hidden('_method', 'DELETE') !!}

            {!! Form::submit('Delete post', ['class'=>' btn btn-danger float-right']) !!}
        </div><br />
        </div></div>

        {!! Form::close() !!}


        @endif
        @endif







    </div>


    </div>


@endsection
