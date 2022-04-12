<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Login</title>
  <link rel="stylesheet" href="{{asset('css\style_loregAS.css')}}">
</head>
<body>

  
  <div class="signin-container">
    
    <div class="signin-header-wrapper">
      <h1>Login As</h1>
    </div>
    
    <div class="signin-buttons-wrapper">
      <div class="signin-breeder-wrapper">
      <a href="{{ url('ladmin') }}" class="signin-btn">Admin</a>
      </div>
      <div class="signin-breeder-wrapper">
      <a href="ltourist" class="signin-btn">Tourist</a>
       </div> 
      <div class="signin-customer-wrapper">
      <a href="{{ url('ltourguide') }}" class="signin-btn">Tourguide</a>
      </div>
    </div>
    <p class="signin-customer-text">Back To <a href="{{route('index')}}" class="text-sign-up">Homepage</a></p>
       
  </div>
</body>
</html>