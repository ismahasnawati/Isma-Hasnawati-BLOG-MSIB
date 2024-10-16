@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p><strong>Category:</strong> {{ $post->category->name }}</p>
    <p>{{ $post->content }}</p>

    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
    @endif

    <p><strong>Status:</strong> {{ $post->is_published ? 'Published' : 'Draft' }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary mt-3">Back to Posts</a>
@endsection
