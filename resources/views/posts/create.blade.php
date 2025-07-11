@extends('layout')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Content:</label><br>
        <textarea name="content">{{ old('content') }}</textarea><br><br>

        <button type="submit">Save</button>
    </form>
@endsection
