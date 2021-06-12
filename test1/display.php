<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Display</title>
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
        <a class="nav-link" href="index.html">Home</a>
        <a class="nav-link active" aria-current="page" href="display.php">Signup Records</a>
        <a class="nav-link" href="about.html">About</a>
        <a class="nav-link" href="signup.html">Signup</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="contact.html">Contact</a>
      </div>
    </div>
  </div>
</nav>
<h1 align="center">Displaying Signup Records</h1>

    </header>
<hr>
      <table class="table table-striped table-info">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email ID</th>
            <th>Password</th>
            <th colspan="2" align="center">Operation</th>
          </tr>
        </thead>

<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM signup";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

echo $result['slno']." ".$result['First_Name']." ".$result['Last_Name']." ".$result['Email_ID']." ".$result['Password'];

if($total != 0)
{
  while ($result = mysqli_fetch_assoc($data))
  {
    echo "
    <tr>
    <td>".$result['slno']."</td>
    <td>".$result['First_Name']."</td>
    <td>".$result['Last_Name']."</td>
    <td>".$result['Email_ID']."</td>
    <td>".$result['Password']."</td>
    <td><a href ='delete.php?Email_ID=$result[Email_ID]' onclick ='return checkdelete()'><input type='submit' value='Delete' id ='dltbtn'></td>
    <td><a href ='update.php?First_Name=$result[First_Name]&Last_Name=$result[Last_Name]&Email_ID=$result[Email_ID]&Password=$result[Password]'><input type='submit' value='Edit/Update'></td>
    </tr>
    ";

  }
}
else{
  echo " No Records Found";
}

 ?>
</table>
  <script>
    function checkdelete()
    {
      return confirm('Are you sure you want to delete this data...??')
    }
  </script>

</body>
</html>
