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
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h1>Welcome<br>to TripKUY</h1>
          </div>
        </div>
  </section>
</body>