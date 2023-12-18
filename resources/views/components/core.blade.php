<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources\css\style.css','resources\js\main.js']);
  <title>Bootstrap demo</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('welcome')}}"><p>Home</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('personale')}}"><p>Chi siamo</p></a>
          </li>
          <li class="nav-item">
            <a href="{{route('contatta')}}" class="nav-link"><p>Contattaci</p></a>
          </li>
          <li class="nav-item">
            <a href="{{route('chiSei')}}" class="nav-link"><p>Mostraci chi sei</p></a>
          </li>
          <li>
            <a href="{{route('auth')}}" class="nav-link"><p>Effettua il login</p></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{$slot}};
</body>
</html>