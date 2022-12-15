@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3">
                <h1 class="mb-3">{{ $post->title }}</h1>
            
                <p>Author: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                
                <article class="my-3">
                    {!! $post->body !!}
                </article>
            
                <a class="btn btn-primary" href="/posts" role="button">Back</a>
            </div>
        </div>
    </div>
@endsection