<!DOCTYPE html>
<head>
  
    <title>TripKUY</title>
    <link rel="stylesheet" href="{{asset('css\style_index.css')}}">
    <link rel="script" href="{{asset('js\style.js')}}">
</head>

<body>
  <header class="main-header">
    <div class="header-wrapper">
      <div class="main-logo">TripKUY</div>
      <nav>
        <ul class="main-menu">
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('register')}}">Register</a></li>
          <li><a href="{{route('login')}}"> Login</a></li>
          <li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>
          <li><a href="#"><span class="fa fa-search"></span></a></li>
        </ul>
      </nav>
    </div>
  </header>