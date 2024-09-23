<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up - Warehouse</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <!-- Navigation Bar -->
   <div class="navbar">
      <a href="#" class="logo">Warehouse</a>
      <div class="nav-links">
         <a href="/index">Home</a>
         <a href="about.html">About</a>
         <a href="services.html">Our Team</a>
      </div>
   </div>

   <!-- Sign-Up Form Wrapper -->
   <div class="wrapper">
      <form method="post" action="#">
         <h1>Sign Up</h1>
         <!-- Input for Username -->
         <div class="input-box">
            <input type="text" placeholder="Username" required>
            <i class='bx bxs-user'></i>
         </div>
         <!-- Input for Email -->
         <div class="input-box">
            <input type="email" placeholder="Email" required>
            <i class='bx bxs-envelope'></i>
         </div>
         <!-- Input for Password -->
         <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <!-- Input for Confirm Password -->
         <div class="input-box">
            <input type="password" placeholder="Confirm Password" required>
            <i class='bx bxs-lock'></i>
         </div>
         <!-- Sign-Up Button -->
         <button type="submit" class="btn">Sign Up</button>
         <!-- Link to Sign-In Page -->
         <div class="register-link">
            <center>
               <br>
            <p>Already have an account? <a href="/">Sign In</a></p>
            </center>
         </div>
      </form>
   </div>
</body>
</html>
