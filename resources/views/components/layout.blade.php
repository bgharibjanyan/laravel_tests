<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>My {{ env('APP_NAME') }} application </header>
    <div class="nav-bar">
      <a href="{{route("register")}}" class="nav-link" >Registration</a>
      <a href="{{route("login")}}" class="nav-link" >Login</a>
    </div>


    <section>
        {{ $slot }}
    </section>

</body>

</html>
