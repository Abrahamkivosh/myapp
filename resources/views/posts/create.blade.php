@extends('layouts.app')
@section('content')


{!! Form::open(['action' => 'PostsController@store']) !!}
<div class="form-group">
    {{ form::label('title','Title') }}

    {{ Form::text('title', '', ['class' => 'form-control','placeholder' => 'Title'])}}

    {{ form::label('body','Body') }}
    {!! Form::textarea('body', '', ['class' => 'form-control','placeholder' => 'body text']) !!}
    <br />

    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}



    </div>
{!! Form::close() !!}


@endsection
