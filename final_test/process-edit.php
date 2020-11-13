<?php
    require_once('app/database/connect.php');
    include("app/database/function.php")
    $userid= $_GET["userid"];
    $username=$_POST['username'];
    $password=$_POST['password1'];
    $displayname=$_POST['displayname'];
    $email=$_POST['email'];
   
    $sql="UPDATE fem
    SET userid='$userid',
    username = '$username', 
    password1 = '$password',
    displayname = '$displayname',
    email = '$email',
    WHERE userid=$userid";
    if (mysqli_query($dbcon, $sql)) {
        header('location: user.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
    }

?>