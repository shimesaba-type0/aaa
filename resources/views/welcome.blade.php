<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Auth Page</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div>
        <p>Welcome to my home.</p>
        <a href="{{ route('login') }}" class="btn btn-primary mr-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    </div>
</body>
</html>

