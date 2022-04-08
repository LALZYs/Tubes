<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset ($_POST['submit'])) {
    echo "eroror";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $PhoneNumber = $_POST['Phone Number'];
 
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            header("Location: index.html");
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preload" as="style"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <title>Register Form</title>
</head>

<body>
    
   <section class="login-section">
      <div class="card-login">
          <h3>Register</h3>
         <!-- signup form -->
         <form class="form" action="./register.php" method="POST">
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
                <input type="phone" class="form-input" name="phonenumber" placeholder="Enter your phone number" id="phone">
            </div>
            <div class="form-group">
                <label for="uniquecode">Unique Code</label>
                <input type="uniquecode" class="form-input" name="uniquecode" placeholder="Enter your unique code" id="uniquecode">
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
         </form>
      </div>
      <p class="text-create-account">Back To <a href="RegisterAS.html" class="text-sign-up">Registerpage</a></p>
   </section>

</body>

</html>