@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Blog Page</h1>
                <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <div class="row mb-2">
            @foreach($posts as $post)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">{{ $post->title }}</h3>
                        <div class="mb-1 text-muted">{{ $post->created_at }}</div>
                        <p class="card-text mb-auto">{!! $post->description !!}</p>
                        <a href="{{ route("posts.show", $post->id) }}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="/storage/posts/{{ $post->image }}">
                    </div>
                </div>
            </div>
            @endforeach

            {{ $posts->links() }}
        </div>

    </main>
@endsection
