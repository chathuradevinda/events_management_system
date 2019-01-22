<?php
var_dump("submit");
if(isset($_POST["submit"])){
  $con = mysqli_connect("localhost","root","","exam");

  if($con->connect_error){
    die("Database connection failed: ".$con->connect_error);
  }else {
    echo "Hello";
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;
    $sql = "INSERT INTO user (username,password) VALUES ('".$username."','".$password."')";
    if(mysqli_query($con,$sql)){
      echo "Data inserted successfully.";
    }else{
      echo "Data not inserted.";
    }
  }
  mysqli_close($con);
}else{
  echo "Not Submitted";
}
?>
