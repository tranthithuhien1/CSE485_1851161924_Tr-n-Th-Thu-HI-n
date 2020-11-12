<?php
    function getAllTeachers(){
        global $conn;
        $sql="SELECT * FROM fem";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteAdmin($userid){
        global $dbcon;
        $sql = "DELETE FROM fem WHERE userid = '$userid'";
        $result = mysqli_query($dbcon, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function editAdmin($userid){
        global $dbcon;
        $sql = "SELECT * FROM fem WHERE userid = '$userid'";
        $result = mysqli_query($dbcon, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
    

?>