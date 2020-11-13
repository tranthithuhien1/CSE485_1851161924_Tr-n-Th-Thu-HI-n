<!doctype html>
<html lang="en">
  <head>
    <title>Ban chủ nhiêm khoa Công nghê thông tin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
     <link rel="stylesheet" href="../../CSE.css">
     <link rel="stylesheet" href="../../css/logo.css">
  </head>
  <body>
    <form action="" method="post">
            <?php
                include("../../header.php");
            ?>
            <div class="main ">
                <div class="container  "  >
                  
                    <div class="row content">
                        <div class="col-md-9 logo">
                            <img src="../../images/004.jpg" alt="">
                            <div class="col-md-12"  style="margin-top:5%; padding-bottom:2%">
                                <h3>Ban chủ nhiêm khoa Công nghê thông tin</h3>
                            </div>
                            <div class="col-md-12">
                              <?php 
                                require("config.php");
                                $sql = "SELECT * FROM gioithieu";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                // 3. Xu ly ket qua
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                  <p><b><?php  echo $row['name'] ;  ?></b></p>
                                  <pre><?php  echo $row['content'] ?> </pre>




                                <?php 
                                }
                                ?>
                                 
                            </div>
                             <div class="row" style="float: right;">
                                <div class="col-md-12" style="float: right;">
                                    <a href="gioithieu.html">Trở về đầu trang</a>
                                </div>
                            </div>
                            <div class="row icon" >
                                <div class="col-md-3" style="margin-right: 4%;">
                                    <a href=""> <button class="text-white" style="background-color: #2e5383; border: 0px;" ><i class="fab fa-facebook-f">Facebook</i></button></a>
                                </div>
                                <div class="col-md-3 " style="margin-right: 1%;">
                                    <a href="" > <button class="bg-primary text-white" style="border: 0px;"><i class="fab fa-twitter">Twitter</i></button></a>
                                </div>
                                <div class="col-md-4">
                                    <a href=""> <button style="background-color: #3161a0; border: 0px;" class="text-white"><i class="fab fa-linkedin-in">LinkIn</i></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 gioithieu">
                            <div class="col-md-12" style="padding-bottom: 15%;">
                                <h4><a href="../gioithieu/gioithieu.php">Giới thiệu</a></h4>
                             </div>
                            <div class="col-md-12 gioithieu1" >
                                > <a href="../gioithieu/logokhoa.php" class="gioithieu2">   Logo Khoa CNTT</a>
                            </div>

                            <div class="col-md-12 gioithieu1">
                                > <a href="loichaomung.php" class="gioithieu2">Lời chào mừng </a>
                            </div>
                             <div class="col-md-12 gioithieu1">
                            > <a href="cocautochuc.php" class="gioithieu2">Tổ chức</a>
                            </div>
                            <div class="col-md-12 gioithieu1">
                             > <a href="hoptacquocte.php" class=gioithieu2>Hợp tác liên kết</a>
                            </div>
                        
                        </div>
                    </div>
                   
                </div>
               
                            
            </div>
         
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
    </body>
</html>