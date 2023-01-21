<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{$data['email']}}</title>
</head>
<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="/dataemail/update" method="post">
    @csrf
    <label for="email">email</label><br>
    @error('email')
        {{ $message }}
    @enderror
    <input type="hidden" name="id" value="{{$data['id']}}"> 
    <input type="text" name="email" value="{{$data['email']}} required"><br>
    <label for="password">password</label><br>
    @error('password')
        {{ $message }}
    @enderror
    <textarea name="password" id="" cols="30" rows="10" value="{{$data['password']}}" required> {{$data['password']}} </textarea><br>
    <button>Kirim</button>
</body>
</html>