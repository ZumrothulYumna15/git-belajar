<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Email</title>
</head>
<body>
    <h1>Input Email</h1>
        @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
        @endif
    <form action="/dataemail/store" method="post">
        @csrf
        <label for="email">email</label><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="email"><br>
        <label for="password">password</label><br>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <textarea name="password" id="" cols="30" rows="10"></textarea><br>
        <button>Kirim</button>
    </form>
</body>
</html>