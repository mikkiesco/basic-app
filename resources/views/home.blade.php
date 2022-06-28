<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic App</title>
</head>
<body>
    @if (auth()->check())
        @foreach ($users as $user)
            <div>Name: {{ $user->name }}</div>
            <div>Username: {{ $user->username }}</div>
            <div>Phone: {{ $user->phone }}</div>
            <div>Company: {{ $user->company->name }}</div>
            <hr>
        @endforeach
        <form action="/logout" method="post">
            <button type="submit">Logout</button>
        </form>
    @else
        <form action="/" method="post">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    @endif
</body>
</html>