<?php
header("Location: ../loading/index.php");

include('database.php');

if(isset($_POST["submit"])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $location = $_POST['location'];

        //to prevent from mysqli injection
  $username = stripcslashes($username);
  $pass = stripcslashes($pass);
  $location = stripcslashes($location);
  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);


  $sql = "INSERT INTO sheriastreet (username, password, place) VALUES ($username , $pass, $location)";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if($count == 1){
    header('Location: ../redirect.php');
    exit();
    }else{
      echo "<h1> Login failed. Invalid username or password.</h1>";
        }
      }
exit();
?>
