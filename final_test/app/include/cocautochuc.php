<!doctype html>
<html lang="en">
  <head>
    <title>Cơ cấu tổ chức&Nhân lực</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/logo.css">
    <link rel="stylesheet" href="../../assets/css/thungo.css">
  </head>
  <body>
        <form action="/" method="post" enctype="multipart/form-data">
            <?php 
            include("header.php");
            ?>
            <div class="main" style="margin-top: 3%;">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 gthieu text-white" style="margin-bottom: 5%;">
                            <h5 >
                                <a href="gioithieu.php" class="text-white">Giới thiệu</a> > <a href="cocautochuc.php" class="text-white">Cơ cấu tổ chức&nhân lực</a> 
                            </h5>
                        </div>
                   </div>
                    
            <div class="main">
                <div class="container">
                    <div class="row cocautochuc" style="margin-left:2%" >
                        <div class="col-md-9">
                            <h3>Tổ chức bộ máy Khoa Kinh tế và Quản lý</h3>
                             <?php 
                                require("../app/database/config.php");
                                $sql = "SELECT * FROM ctct";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                // 3. Xu ly ket qua
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                  <pre style="overflow-x: hidden;">
                                    <?php echo  $row['content']?>
                                  </pre>
                                <?php 
                                }
                                ?>

                            
                                
                        </div>
                          <div class="col-md-3 gioithieu">
                            <div class="col-md-12" style="padding-bottom: 15%;">
                                <h4><a href="gioithieu.php">Giới thiệu</a></h4>
                             </div>
                            <div class="col-md-12 gioithieu1" >
                                > <a href="thungo.php" class="gioithieu2">Thư ngỏ</a>
                            </div>

                            <div class="col-md-12 gioithieu1">
                                > <a href="cocautochuc.php" class="gioithieu2">Cơ cấu tổ chức&nhân lực </a>
                            </div>
                             <div class="col-md-12 gioithieu1">
                            > <a href="lichsuhinhthanh.php" class="gioithieu2">Lịch sử hình thành</a>
                            </div>
                        
                        
                        </div>

                        
                    </div>
                 <div class="row" style="float: right;margin-right: 20%;">
                        <div class="col-md-12" style="float: right;">
                            <a href="cocautochuc.php">Trở về đầu trang</a>
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
                </div>
            </div>
            <!-- REP: Ờ-->
            
                           
            
                  <?php include("footer.php");?>
                </div>
              </footer>
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
   </body>
</html>