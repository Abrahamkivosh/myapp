@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                        <div class=" panel-body pull-right">

                                <a href="/posts/create" class="btn btn-primary">Create Post</a>
                            </div>
                        </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                    @endif

                    <table class="table table-striped">
                        <th>
                            Title
                        </th>
                        <th><th>
                            <th><th>
                                <th><th>
                                    @foreach ($Posts as $post )
                                    <tr>
                                    <th>{{ $post->title }}<th>
                                            <td>{{ $post->body }}<td>
                                    <th> <a href='/posts/{{ $post->id }}/edit'class='btn btn-dark'>Edit</a><th>
                                    </tr>


                                    @endforeach

                    </table>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
