<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/2style.css">
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">{{$errors->first()}}</div>
    @endif
    <div class="container-login">
        <div class="login">
            <div class="login-title">
                <h1>Login</h1>
            </div>
            <div class="login-body">
                <form action="/proseslogin" method="POST" class="login-awal">
                    @csrf
                    <label for="email">email:</label>
                    <input type="text" id="email" name="email" >
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" >
                    <br>
                   <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
