
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $author->name }}</h1>
        <p><strong>Email:</strong> {{ $author->email }}</p>
        <p><strong>Phone:</strong> {{ $author->phone }}</p>
        
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to Authors</a>
        <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning">Edit Author</a>
        
        <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Author</button>
        </form>
    </div>
@endsection
