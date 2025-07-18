@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn">Create New Post</a>

    <ul class="post-list">
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}" class="post-title">{{ $post->title }}</a>
                <p>{{ Str::limit($post->content, 100) }}</p>

                <div class="actions">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn-small blue">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-small red" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
