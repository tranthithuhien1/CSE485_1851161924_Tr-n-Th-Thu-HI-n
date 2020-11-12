<?php
require('app/database/config.php');
$userid=$_GET['userid'];
$query=mysqli_query($conn,"SELECT * FROM fem where userid='$userid'");
$row=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="text-center">
        <h3>Sửa dữ liệu</h3>
        <form action="" method="post">
             <div class="form-group">
                <label for="">userid</label>
                <input type="number"  id="userid" name="userid"value="<?php echo $row['userid'] ; ?>">
            </div> 
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" id="username" name="username"value="<?php echo $row['username'] ; ?>">
</div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text"  id="password" name="password"value="<?php echo $row['password'] ; ?>">
            </div>
            <div class="form-group">
                <label for="">Displayname</label>
                <input type="text" id="displayname" name="displayname"value="<?php echo $row['displayname'] ; ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $row['email'] ; ?>">
            </div>
            <div class="form-group">
                <label for="">registration_date</label>
                <input type="text" id="registration_date" name="registration_date" value="<?php echo $row['registration_date'] ; ?>">
            </div>
            <button name='update'>Save</button>
            <a href="user.php"  class="btn btn-primary">Back</a>
            <?php
                if (isset($_POST['update'])){
                $userid=$_GET['userid'];
                $username=$_POST['username'];
               
                $password=$_POST['password'];
                $displayname=$_POST['displayname'];
                $email=$_POST['email'];
                $registration_date=$_POST['registration_date'];
                $conn = new mysqli("localhost", "root", "", "blog");
                
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "UPDATE fem SET usename='$username', password='$password',displayname='$displayname', email='$eamil', registration_date='$registration_date' WHERE userid='$userid'";
                
                if ($conn->query($sql) === TRUE) {
                 ?> <script> alert('Đã Cập Nhật Thành Công'); </script><?php
                } else {
                echo "Error updating record: " . $conn->error;
                }
                
                $conn->close();
                }
                ?>
           <!--  <button>quaylai</button> -->
        </form>
        
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
