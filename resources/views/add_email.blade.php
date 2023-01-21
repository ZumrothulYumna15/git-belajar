<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <h1>Tambah Email</h1>

        <ul>
          @foreach($errors->all() as $msg)
          <li>{{$msg}}</li>
          @endforeach
        </ul>

        <form method="POST" action="{{url('email/add')}}">
            {{ csrf_field() }}
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" required >
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" name="password" required class="form-control" id="exampleInputPassword1">
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>