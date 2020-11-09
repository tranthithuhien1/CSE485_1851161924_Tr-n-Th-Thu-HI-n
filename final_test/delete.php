<?php
    require("connect.php");
    include("function.php");


    $id= $_GET["id"];
    $sql = "DELETE FROM fem WHERE id = '$id'";
    if(deleteAdmin($id)){
        header("location: hethong.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
  
?>