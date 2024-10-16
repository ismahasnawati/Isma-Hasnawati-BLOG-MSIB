@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Author</h1>
        <form action="{{ route('authors.update', $author) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $author->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $author->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $author->phone }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Author</button>
        </form>
    </div>
@endsection
