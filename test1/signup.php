<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$con = mysqli_connect($servername,$username,$password,$dbname);

//if($con){
//  echo "Connection is Successful";
//}
//else{
//  echo "Connection Inturupted".mysqli_connect_error();
//}

if(isset($_POST['submit']))
{
  $First_Name = mysqli_real_escape_string($con,$_POST['fname']);
  $Last_Name = mysqli_real_escape_string($con,$_POST['lname']);
  $Email_ID = mysqli_real_escape_string($con,$_POST['email']);
  $Password = mysqli_real_escape_string($con,$_POST['password']);
}

$insert_clint = "insert into signup(First_Name, Last_Name, Email_ID, Password)
                values('$First_Name', '$Last_Name', '$Email_ID', '$Password')";

$run_customer = mysqli_query($con ,$insert_clint);

if($run_customer){
  echo "<script>alert('Signup is Successful')</script>";
  ?>
<META HTTP-EQUIV = "Refresh" CONTENT = "0; URL=http://localhost/test1/login.php">
  <?php
}
else{
  echo "<script>alert('Signup Not Successful...!!!!')</script>";
}

?>
