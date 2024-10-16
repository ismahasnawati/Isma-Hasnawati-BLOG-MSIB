@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $category->name }}</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Description:</strong> {{ $category->description }}
            </div>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
