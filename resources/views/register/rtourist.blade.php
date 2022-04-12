<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preload" as="style"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css\style.css">
   <title>Register As Tourist</title>
</head>

<body>
    
   <section class="login-section">
      <div class="card-login">
          <h3>Register</h3>
         <!-- signup form -->
         <form class="form" action="/rtourist" method="POST">
            @csrf
            <div class="form-group">
               <label for="text">Username</label>
               <input type="text" class="form-input" name="username" placeholder="Enter your username" id="text">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-input" name="password" placeholder="Enter your password" id="password">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-input" name="email" placeholder="Enter your email address" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="phone" class="form-input" name="phone_number" placeholder="Enter your phone number" id="phone">
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
         </form>
      </div>
      <p class="text-create-account">Back To <a href="{{route('register')}}" class="text-sign-up">Registerpage</a></p>
   </section>

</body>

</html>