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
          <li><a href="#">Contact</a></li>
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
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h2>What We Do</h2>
            <h1>Great<br>TripKUY</h1>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper">
            <h2>About Us</h2>
            <h4 class="left">Kami adalah perusahaan rintisan dengan misi untuk memudahkan tourist dalam mencari informasi tempat wisata beserta tour guidenya.<br>Kami juga menyediakan catering agar memudahkan tourist saat berpariwisata.</h4>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Our Contacts</h2>
            <h3>Khaliq<br>Raihan<br>Naufal<br>Bilal</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>