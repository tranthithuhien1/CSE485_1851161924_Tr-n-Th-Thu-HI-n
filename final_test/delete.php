<?php
include_once('app/database/config.php');
if(isset($_REQUEST['userid']) and $_REQUEST['userid']!=""){
$userid=$_GET['userid'];
$sql = "DELETE FROM fem WHERE userid='$userid'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
header('location: user.php');
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>