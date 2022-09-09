<?php
include("core/db.php");
$email = $_POST['email'];
$password = $_POST['password'];



$query="SELECT*FROM users where email = '$email' and password='$password'";
$result=mysqli_query($conn,$query);

$row=mysqli_num_rows($result);

if($row){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");
    header("location:index.php");

  ?>
  <?php
}
mysqli_free_result($result);
mysqli_close($conn);



