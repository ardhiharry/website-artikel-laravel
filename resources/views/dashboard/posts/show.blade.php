@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 my-3">
                <h1 class="mb-3">{{ $post->title }}</h1>
                
                <a class="btn btn-primary" href="/dashboard/posts" role="button"><span data-feather="arrow-left"></span> Back</a>
                <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit" role="button"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete the post?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
                
                <article class="my-3">
                    {!! $post->body !!}
                </article>
            
            </div>
        </div>
    </div>

@endsection