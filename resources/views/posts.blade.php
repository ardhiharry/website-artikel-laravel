@extends('layouts.main')

@section('container')

        <div class="row">
            <div class="col-md-7">
                <h1 class="mb-5">{{ $title }}</h1>
            </div>
            <div class="col-md-5">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search . . . " name="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    @if ($posts->count())

        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden; background-size: cover;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        Author: <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mt-3 mb-4">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, .6)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                <p>
                                    <small class="text-muted">
                                        Author: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{!! $post->excerpt !!}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <div class="d-flex justify-content-center p-4 m-5 display-4">No post found.</div>
    @endif

    <div class="d-flex justify-content-center mt-3 mb-4 p-3">
        {{ $posts->links() }}
    </div>

@endsection