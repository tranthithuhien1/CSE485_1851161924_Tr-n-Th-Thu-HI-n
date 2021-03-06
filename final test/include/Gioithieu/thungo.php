<!doctype html>
<html lang="en">
  <head>
    <title>thư ngỏ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href=".../style.css">
    <link rel="stylesheet" href="../../css/thungo.css">
    <link rel="stylesheet" href="../../css/lichsuhinhthanh.css">
  </head>
  <body>
        <form action="/" method="post" enctype="multipart/form-data">
            <?php 
            include("../../header.php");
            ?>
            <div class="main" style="margin-top: 3%;">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 gthieu text-white" style="margin-bottom: 5%;">
                            <h5 >
                                <a href="gioithieu.html" class="text-white">Giới thiệu</a> > <a href="cocautochuc.html" class="text-white">Lời chào mừng</a> 
                            </h5>
                        </div>
                   </div>
                    
                            <div class="container">
                                <div class="row" style="padding-left: 5px;">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
            </div>
            <div class="main">
                <div class="container">
                    <div class="row loigioithieu" style="margin-left:2%" >
                        <div class="col-md-9">
                            <h3>thư ngỏ</h3>
                             <?php 
                                require("config.php");
                                $sql = "SELECT * FROM thungo";
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
                                <h4><a href="../gioithieu/gioithieu.php">Giới thiệu</a></h4>
                             </div>
                            <div class="col-md-12 gioithieu1" >
                                > <a href="../gioithieu/thungo.php" class="gioithieu2">Thư ngỏ </a>
                            </div>

                            <div class="col-md-12 gioithieu1">
                                > <a href="../gioithieu/cocautochuc.php" class="gioithieu2">Cơ cấu tổ chức&nhân lực</a>
                            </div>
                             <div class="col-md-12 gioithieu1">
                            > <a href="../gioithieu/lichsuhinhthanh.php" class="gioithieu2">Lịch sử hình thành</a>
                            </div>
                    
                        
                        </div>

                        
                    </div>
                 <div class="row" style="float: right;margin-right: 20%;">
                        <div class="col-md-12" style="float: right;">
                            <a href="../gioithieu/loichaomung.php">Trở về đầu trang</a>
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
            <footer class="footer" style="background-color: blue;">
    <div class="footer__top">
      <div class="container">
        <span id="dnn_dnnCopyright_lblCopyright" class="SkinObject">&copy; 2020 - Khoa Kinh tế và Quản lý - Đại học Thủy
          Lợi</span>

      </div>
    </div>
    <div class="footer__bot">
      <div class="container">
        <div class="row dnnpane">

          <div id="dnn_Footer_50_1" class="col-md-6 spacingTop">
            <div class="DnnModule DnnModule-DNN_HTML DnnModule-432"><a name="432"></a>
              <div class="DNNContainer_noTitle">
                <div id="dnn_ctr432_ContentPane">
                  <div id="dnn_ctr432_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                    <div id="dnn_ctr432_HtmlModule_lblContent" class="Normal">
                      <div class="box-bottom">
                        <div class="mapguide"><a href="#"><img alt="Image" src="images/img-01.png" /></a>
                          <p>Bản đồ chỉ dẫn trường đại học</p>
                        </div>

                        <div class="text-bot">
                          <div class="text-copyright">Địa chỉ: P.206-207&nbsp;A5, Đại học Thủy lợi, 175 Tây Sơn, Đống
                            Đa, Hà Nội<br />
                            Điện thoại: (04) 3852.2028<br />
                            Email: <a class="ui-link-white" href="#">KhoaK@tlu.edu.vn</a></div>
                          <div>
                            <script id="_wau9oo">
                              var _wau = _wau || [];
                              _wau.push(["dynamic", "vthlqzot3c", "9oo", "3c78d8ffffff", "small"]);
                            </script>
                            <script async src="//waust.at/d.js"></script>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div id="dnn_Footer_25_1" class="col-md-3 spacingTop">
            <div class="DnnModule DnnModule-CMSView DnnModule-867"><a name="867"></a>
              <div id="dnn_ctr867_ContentPane">
                <!-- Start_Module_867 -->
                <div id="dnn_ctr867_ModuleContent" class="DNNModuleContent ModCMSViewC">
                  <span id="dnn_ctr867_ViewCMSView_lblInform"></span>


                  <table>
                    <tr>
                      <td>
                        <div style="color:#fff">Số người đang online : <span class="hit-count">57</span></div>


                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:20px">
                        <div style="color:#fff">Lượt truy cập : <span class="hit-count">1109657</span></div>
                      </td>

                    </tr>
                  </table>



                </div>
              </div>
            </div>
            <div class="DnnModule DnnModule-DNN_HTML DnnModule-868"><a name="868"></a>
              <div id="dnn_ctr868_ContentPane">
                <!-- Start_Module_868 -->
                <div id="dnn_ctr868_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                  <div id="dnn_ctr868_HtmlModule_lblContent" class="Normal">

                  </div>

                </div>
              </div>
            </div>
          </div>
          <div id="dnn_Footer_25_2" class="col-md-3 spacingTop">
            <div class="DnnModule DnnModule-CMSView DnnModule-816"><a name="816"></a>
              <div id="dnn_ctr816_ContentPane">
                <!-- Start_Module_816 -->
                <div id="dnn_ctr816_ModuleContent" class="DNNModuleContent ModCMSViewC">
                  <span id="dnn_ctr816_ViewCMSView_lblInform"></span>

                  <div id="fb-root"></div>
                  <div style="width: 285px;text-align:center">
                    <div class="fb-page" data-href="https://www.facebook.com/khoaKTvaQLtruongDHTL/" data-width="285">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </footer>
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../PROJECT/CSE.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
     <script src="../PROJECT/CSE.js"></script>
   </body>
</html>