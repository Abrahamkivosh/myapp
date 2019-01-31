@extends('layouts.app')
@section('content')
<h1>POST SENT<h1>

    @if (count($Posts) > 0)
    @foreach ($Posts as $post )
    <div class=" justify-content-center">
         <i class="fas fa-comment-edit    ">
        <h3> <a href="/posts/{{ $post->id }}"> {{ $post ->title }}<h3></a>
            <h4 class="Well">{!! $post->body !!}</h4>
             <small> CREATED ON {{ $post->created_at }} by {{  }} }}</small></i><br />
    </div>

    @endforeach

    <div class='btn btn-link'>
            {{ $Posts->links() }}
        </div>

    @else
    <h3 class="badge-danger">No Post found</h3>

    @endif


@endsection
