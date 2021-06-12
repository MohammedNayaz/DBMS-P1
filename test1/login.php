<?php
    include("connection.php");
    error_reporting(0);
    session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

   </head>
   <body>
     <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-info">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">Tecnico</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav">
         <a class="nav-link "  href="index.html">Home</a>
         <a class="nav-link" href="features.html">Features</a>
         <a class="nav-link" href="about.html">About</a>
         <a class="nav-link " href="signup.html">Signup</a>
         <a class="nav-link active"  aria-current="page" href="login.html">Login</a>
         <a class="nav-link" href="contact.html">Contact</a>
       </div>
     </div>
   </div>
 </nav>
     </header>
     <br><br>
     <div class="container">
       <div class="row">
         <div class="col">
           <img src="https://i.pinimg.com/474x/bc/2b/3d/bc2b3d8c7b19e99ee47f0ff9bf9b7509.jpg" alt="" width="350px" height="580px">
         </div>

         <div class="col">
          <form class="row g-3" action="" method="post">
 <br><br>
   <div class="col-md-12">
     <label for="inputEmail4" class="form-label">Email</label>
     <input type="email" class="form-control" id="inputEmail4" name="Email_ID">
   </div>
   <div class="col-md-8">
     <label for="inputPassword4" class="form-label">Password</label>
     <input type="password" class="form-control" id="inputPassword4" name="Password">
   </div>

   <div class="col-12">
     <div class="form-check">
       <input class="form-check-input" type="checkbox" id="gridCheck">
       <label class="form-check-label" for="gridCheck">
         Are you sure with the details you have provided..!!
       </label>
     </div>
   </div>
   <div class="col-12">
     <button type="submit" class="btn btn-primary" name="submit">Login</button>
   </div>
 </form>
         </div>

         <div class="col">
           <img src="https://i.pinimg.com/originals/bc/51/41/bc51411c6a00ac117163d0bb4ce9c63b.jpg" alt="" width="350px" height="580px">
         </div>
       </div>
     </div>

   </body>
 </html>

<?php
if(isset($_POST['submit']))
{
  $Email_ID = $_POST['Email_ID'];
  $Password = $_POST['Password'];

  $query = "SELECT * FROM signup WHERE Email_ID = '$Email_ID' && Password = '$Password' ";
  $data = mysqli_query($con,$query);

  $total = mysqli_num_rows($data);

  if($total == 1)
  {
    //echo "Login Successful";
  header('location:indexlog.php');
  $_SESSION['Email_ID'] = $Email_ID;
  }
  else
  {
    echo "<font color = 'red'> Invalid Email_ID/Password";
  }
}
 ?>
