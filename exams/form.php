<?php
$con = mysqli_connect("localhost","root","","exam");

if($con->connect_error){
  die("Database connection failed: ".$con->connect_error);
}else{
  $sql = "SELECT * FROM user";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result)){
    echo $row['username'];
    echo "&nbsp;";
    echo $row['password'];
    echo "</br>";
  }
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="formdata.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username">
      <label for="username">Password:</label>
      <input type="password" name="password">
      <input type="submit" name="submit">
    </form>
  </body>
</html>
