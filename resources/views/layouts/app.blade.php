<!DOCTYPE html>
<html>
<head>
    <title>Simple Blog Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('blogs.index') }}">Simple Blog Project</a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
