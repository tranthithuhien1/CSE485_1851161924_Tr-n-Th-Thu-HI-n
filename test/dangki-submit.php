<?php
require_once("app/database/config.php");
if(isset($_POST['submit']) && $_POST['name'] !='' && $_POST['pass'] != '' && $_POST['repass'] != ''){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    if ($pass != $repass){
        header("location:dangki.php");
    }
    $sql="SELECT * from dangnhap where name='$name'";
    $old= mysqli_query($conn,$sql);
    $pass= md5($pass);
    if(mysqli_num_rows($old)>0){
        header("location:dangki.php");
    }
    $sql="INSERT INTO dangnhap (name, pass) value('$name','$pass')";
    mysqli_query($conn,$sql);
    echo"da dang ky thanh cong";
}
else{
    header("location:dangki.php");
}

?>
