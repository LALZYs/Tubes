<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Register</title>
  <link rel="stylesheet" href="{{asset('css\style_registerAS.css')}}">
</head>
<body>

  
  <div class="signin-container">
    
    <div class="signin-header-wrapper">
      <h1>Register As</h1>
    </div>
    
    <div class="signin-buttons-wrapper">
      <div class="signin-breeder-wrapper">
      <button class="signin-btn" onclick="{{ Redirect::to('radmin') }}">Admin Register</button>
      </div>
      <div class="signin-breeder-wrapper">
        <button class="signin-btn" onclick="window.location.href='registerTourist.php'">Tourist Register</button>
       </div> 
      <div class="signin-customer-wrapper">
        <button class="signin-btn" onclick="window.location.href='registerTourguide.php'">Tourguide Register</button>
      </div>
    </div>
    <p class="signin-customer-text">Back To <a href="{{route('index')}}" class="text-sign-up">Homepage</a></p>
       
  </div>
</body>
</html>