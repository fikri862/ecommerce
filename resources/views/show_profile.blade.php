<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach            
    @endif

    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->is_admin ? 'Admin' : 'Member' }}</p>

    <form action="{{ route('edit_profile') }}" method="post">
        @csrf
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ $user->name }}"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <label for="password_confirmation">Password Confirmation</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation"><br>
        <button type="submit">Change profile detail</button>
    </form>
</body>
</html>