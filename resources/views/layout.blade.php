<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo</title>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div style="color:green; font-weight:bold;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
