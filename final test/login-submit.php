<?php
require_once('app/database/config.php');

if (isset($_POST["button"]) && $_POST['username']!=''&& $_POST['password'] !=''){
 $name= $_POST['username'];
 $pass=$_POST['password'];
 $pass= md5($pass);
 $sql="SELECT * FROM fem where username='$name' AND password='$pass'";
 $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "ban da dang nhap thanh cong";
        header("location:form.php");
    }
    else{
        echo" ban nhap sai ";
    }
}
else{
    header("location:path.php);
}
?>