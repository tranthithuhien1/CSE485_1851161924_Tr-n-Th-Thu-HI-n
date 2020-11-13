<?php
require_once('app/database/config.php');
 
if(!empty($_POST)){
    $userid=$username=$password=$displayname=$email=$registration_date='';
    if(isset($_POST['userid'])){
        $userid=$_POST['userid'];
    }
    if(isset($_POST['username'])){
        $username=$_POST['username'];
    }

    if(isset($_POST['password'])){
        $password=$_POST['password'];
    }

    if(isset($_POST['displayname'])){
        $displayname=$_POST['displayname'];
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
   if(isset($_POST['registration_date'])){
        $registration_date=$_POST['registration_date'];
    }
/*     $id=str_replace('\'','\\\'',$id);
    $address=str_replace('\'','\\\'',$address);
    $name=str_replace('\'','\\\'',$name);
    $email=str_replace('\'','\\\'',$email);
    $gender=str_replace('\'','\\\'',$gender); */
    
    $sql="INSERT INTO fem(userid,username,password,displayname,email,registration_date) 
    value('$userid','$username','$password','$displayname','$email','$registration_date')";
    
    echo ' Dữ liệu bạn vừa thêm là :'.'<br>'.' userid: '.$userid .'<br>'.'username:'.$username .'<br>'
    .'password:' .$password .'<br>'.'displayname:'.$displayname.'<br>'.' email:'.$email.'<br>'.'registration_date:'.$registration_date;
    if (mysqli_query($conn, $sql)) {
        ?><script> alert('Thêm Dữ Liệu Thành Công');</script><?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    /* header('location: index.php'); */

} 

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
      <div class="container h-100 mt-3">
        <div class="row h-100 justify-content-center ">
            <form action="user.php" method="post">
                <h3>THÊM MỚI NGƯỜI DÙNG</h3><br>
                <table>
                    <tr>
                        <td><label for=""><b>Userid :</b></label></td>
                        <td><input type="text"  id="userid" name="userid"></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Username :</b></label></td>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Password :</b></label></td>
                        <td><input type="text" id="ten" name="ten"></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Displayname :</b></label></td>
                        <td><input type="text"  id="displayname" name="displayname"></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Email :</b></label></td>
                        <td><input type="text" id="email" name="email"  ></td>
                    </tr>
                    <tr>
                    <td><label for=""><b>Registration_date :</b></label></td>
                     <td><input type="text" id="registration_date :" name="registration_date :"  ></td>
                    </tr>
                    <tr>
                        <td>
                            <button name="save" class="btn btn-primary" >Save</button>
                        </td>
                        <td>
                            <a href="user.php"  class="btn btn-outline-secondary">Back</a>
                        </td>
                    </tr>
                </table>
            
            </form>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
