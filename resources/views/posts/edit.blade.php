@extends('layouts.app')
@section('content')


{!! Form::open(['action' => ['PostsController@update',$Post->id],'method'=>'POST']) !!}
<h2>POST EDIT</h2>
<div class="form-group">
    {{ form::label('title','Title') }}

    {{ Form::text('title', $Post->title, ['class' => 'form-control','placeholder' => 'Title'])}}

    {{ form::label('body','Body') }}
    {!! Form::textarea('body', $Post->body, ['id' => 'article','class' => 'form-control','placeholder' => 'body text']) !!}
    <br />

    {!! Form::hidden('_method','PUT') !!}



    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}



    </div>
{!! Form::close() !!}


@endsection
