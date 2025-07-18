@extends('layout')

@section('content')
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> |
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a> |
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
