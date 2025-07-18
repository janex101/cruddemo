<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD App')</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>
    <div class="top-bar">
        <span class="menu-btn" onclick="toggleSidebar()">☰</span>
        <span class="dark-mode-toggle" onclick="toggleDarkMode()">🌙</span>
    </div>

    <div class="container">
        <nav class="sidebar" id="sidebar">
            <a href="{{ route('posts.index') }}">
                <span class="icon">📋</span>
                <span class="label">All Posts</span>
            </a>
            <a href="{{ route('posts.create') }}">
                <span class="icon">➕</span>
                <span class="label">Create Post</span>
            </a>
        </nav>

        <main class="content">
            @if(session('success'))
                <div style="color: green; font-weight: bold;">{{ session('success') }}</div>
            @endif
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
