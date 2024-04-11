@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Post</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}" placeholder="Enter title...">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required placeholder="Enter content...">{{ old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

@endsection
