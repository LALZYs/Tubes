<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Register</title>
  <link rel="stylesheet" href="{{asset('css\style_loregAS.css')}}">
</head>
<body>

  
  <div class="signin-container">
    
    <div class="signin-header-wrapper">
      <h1>Register As</h1>
    </div>
    
    <div class="signin-buttons-wrapper">
      <div class="signin-breeder-wrapper">
      <a href="{{ url('radmin') }}" class="signin-btn">Admin Register</a>
      </div>
      <div class="signin-breeder-wrapper">
      <a href="rtourist" class="signin-btn">Tourist Register</a>
       </div> 
      <div class="signin-customer-wrapper">
      <a href="{{ url('rtourguide') }}" class="signin-btn">Tourguide Register</a>
      </div>
    </div>
    <p class="signin-customer-text">Back To <a href="{{route('index')}}" class="text-sign-up">Homepage</a></p>
  </div>
</body>
</html>