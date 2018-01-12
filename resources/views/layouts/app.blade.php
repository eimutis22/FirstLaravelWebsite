<!DOCTYPE html>
<html>
<head>
    <title>First Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')

    @yield('content')

    @include('inc.sidebar')
</body>
</html>

