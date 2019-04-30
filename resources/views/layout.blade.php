<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Madison Snaric">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Princess+Sofia" rel="stylesheet">
</head>
<body>

  <nav class="navbar">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        @if (Auth::check())
          <li><a href="/flowers">Flowers</a></li>
          <li><a href="/stateflowers">State Flowers</a></li>
          <li><a href="/scents">Scents</a></li>
          <li><a href="/bloomingperiods">Blooming Periods</a></li>
          <li><a href="/profile">Profile</a></li>
          <li><a href="/logout">Logout</a></li>
        @else
          <li><a href="/flowers">Flowers</a></li>
          <li><a href="/stateflowers">State Flowers</a></li>
          <li><a href="/scents">Scents</a></li>
          <li><a href="/bloomingperiods">Blooming Periods</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/signup">Sign Up</a></li>
        @endif
      </ul>
    </div>
  </nav>

<div class="container-fluid">
    <div id="header"><img src="/images/headerimg.png" /></div>
</div>

  <div class="container-fluid">
    @yield('main')
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
