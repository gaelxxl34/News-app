<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial</title>
</head>
<body>
    <!-- Add this inside your welcome.blade.php file -->
@if(session('user_email'))
    <p>Welcome, {{ session('user_email') }}</p>
@else
    <p>No user logged in.</p>
@endif

<!-- @php
dd(session()->all()); // Dump all session data
@endphp -->

<!-- Logout Button -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Logout</button>
</form>
</body>
</html>