<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Email</title>
</head>
<body>
    @foreach ($data as $item)
    <h1> {{$item['email']}} </h1>
    <p> {{$item['password']}}
        <form action="/dataemail/edit/{{ $item['id'] }}" method="post">
            <input type="hidden" name="_method" value="get">
            <button>Edit</button>
        </form>
    </p>
    @endforeach

    
</body>
</html>