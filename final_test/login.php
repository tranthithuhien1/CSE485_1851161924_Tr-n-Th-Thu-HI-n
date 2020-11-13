<?php
require_once('app/database/config.php');
$sql= "SELECT * FROM fem";
$result= mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/Login.css">
  </head>
  <body>
  
  <?php include("app/include/header.php");?>
  <?php

?>
<form action="login-submit.php"  method="POST" >
        <div class="main">
            <div class="container ">
                <div class="row ">
                    <a  href="" class="username">
                        Username:
                    </a>
                    <div class="form-group" >
                        <input type="text" id="username" name="username" class="username">
                    </div>
                </div>
                <div class="row ">
                    <a  href="" id="password" class="password" name="password" style="padding-right:5px">
                        Password:
                    </a>
                    <div class="from-group">
                        <input type="text">
                    </div>
                </div>
                <div class="row ">
                    <a href="process-login.php">
                        <button name="button" type="submit" class="bg-primary Login text-white ">Login</button>
                    </a>
                    <a href="http://fem.tlu.edu.vn/">
                        <button class="Cancel ">Cancel</button>
                    </a>
                </div>
                <div class="row">
                    <a href="" class="checkbox">
                        <input type="checkbox" >   
                    </a>
                    <a href="" style="color: black;text-decoration: none;font-weight: 600;">
                        Remember
                    </a>
                    <a href="" style="margin-left: 10px;color: black;text-decoration: none;font-weight:600;">Login</a>
                </div>
                <div class="row">
                    <a href="" class="Register">
                        <button style="padding: 4px 10px;font-weight: 600;">Register</button>
                    </a>
                    <a href="" style="margin-top: 20px;">
                        <button style="padding: 4px 10px;font-weight: 600;">Reset Password</button>
                    </a>
                </div>
            </div>
        </div>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
     <script src="assets/js/Login.js"></script>
  </body>
</html>