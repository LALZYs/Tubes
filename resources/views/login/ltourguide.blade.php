
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preload" as="style"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css\style.css">
   <title>Login As Admin</title>
</head>

<body>

   <section class="login-section">
      <div class="card-login">
        <h3>TripKUY</h3>
         <!-- login form -->
         <form class="form" action="/loggedtour" method="post">
            @csrf
            @if($message = Session::get("gagal"))
               <strong style="color:red">{{$message}} </strong>
           @endif
            <div class="form-group">
               <label for="text">Username</label>
               <input type="text" class="form-input" name="username" placeholder="Enter your username" id="text">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-input" name="password" placeholder="Enter your password" id="password">
            </div>
            <div class="form-group">
               <label for="asalkota">Asal Kota</label>
               <input type="asalkota" class="form-input" name="asalkota" placeholder="Enter your city" id="asalkota">
            </div>
            <button type="submit" name="submit" class="btn">Log in</button>
         </form>
      </div>
      <!-- Text create account -->
      <p class="text-create-account">Don't have an account? <a href="{{route('register')}}" class="text-sign-up">Register</a></p>
      <p class="text-create-account">Back To <a href="{{route('login')}}" class="text-sign-up">Login page</a></p>
   </section>
</body>
</html>
