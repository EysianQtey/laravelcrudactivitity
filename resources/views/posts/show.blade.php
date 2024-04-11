@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to all posts</a>
    </div>
@endsection
