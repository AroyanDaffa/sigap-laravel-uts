<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign In - Warehouse</title>
   <link rel="stylesheet" type="text/css" href="/css/style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="navbar">
      <a href="#" class="logo">Warehouse</a>
      <div class="nav-links">
         <a href="/index">Home</a>
         <a href="about.html">About</a>
         <a href="services.html">Our Team</a>
      </div>
   </div>
   <div class="wrapper">
      <form action="/index" method="get"> <!-- Tambahkan action dan method -->
         <h1>Sign In</h1>
         <div class="input-box">
            <input type="text" placeholder="Username" required>
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password</a>
         </div>
         <button type="submit" class="btn">Sign In</button> <!-- Tidak perlu diubah -->
         <div class="register-link">
            <center>
               <br>
               <p>Dont have an account? <a href="/signup">Register</a></p>
            </center>
         </div>
      </form>
   </div>
</body>
</html>
