<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Admin fem TLU</title>


<link rel="stylesheet" href="css/template.css" type="text/css">

<!-- Menu head -->
<link href="css/ja.css" rel="stylesheet" type="text/css">
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body id="bd" class="wide fs3">

	<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
	<div id="ja-header" class="clearfix" style="height: 100px;">
		<h1 class="logo">
			<a href="index.php" title="">
				<img src="../final test/images/logo (1).jpg" alt="">
			</a>
		</h1>
	</div>

<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<div id="ja-mainnavwrap">
	<div id="ja-mainnav">
		<ul id="ja-cssmenu" class="clearfix">
			<li class="active"><a href="hethong.php" class="active" id="menu86 active first-item" title="Documentation (Beta)"><span class="menu-title">Hệ thống</span></a></li> 
			<li class=""><a href="#" id="menu86" title="Documentation (Beta)"><span class="menu-title">Đăng xuất</span></a></li> 
		</ul>
	</div>

	<div id="ja-search">
		<form action="index.php" method="post">
		<div class="search">
			<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox" size="20" value="search..." onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" type="text">	</div>
		<input name="task" value="search" type="hidden">
		<input name="option" value="com_search" type="hidden">
		</form>
	</div>
	
</div>

<!-- END: MAIN NAVIGATION -->



<div id="ja-containerwrap-fr">
<div id="ja-container">
<div id="ja-container2" class="clearfix">

<div id="ja-mainbody" class="clearfix">

<!-- BEGIN: CONTENT -->
	<div class="title-module">DANH SÁCH NGƯỜI SỬ DỤNG</div>
				<div class="filter">
					<div class="label">Tên đăng nhập</div>
					<div class="value"><input type="text" name="code" size="20"></div>					
					<div class="label">Nhóm quyền</div>
					<div class="value">
						<select>
							<option selected="selected"></option>
							<option>admin</option>
							<option>Quản lý đào tạo</option>
							<option>Quản lý tài chính</option>							
						</select>
					</div>					
					<div class="search"><input type="button" value="Tìm" name="search"></div>
				</div>
			  <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="10"><input type="checkbox"></td>
							<td width="30">Sửa</td>
							<td width="30">Xóa</td>
							<td width="100">Tên đăng nhập</td>
							<td width="150">Họ tên</td>													
							<td width="150">Email</td>
							<!-- <td width="70">SĐT</td> -->
							<td width="100">Nhóm quyền</td>	
							
						</tr>
						<tr>
					<?php	 
							 $host = 'localhost';
    						$user = 'root';
    						$pass = '';
    						$db   = 'simpled';
    						$conn = mysqli_connect($host,$user,$pass, $db);
    						if(!$conn){
        					die("Không thể kết nối");
							}
                      		$sql = "SELECT * FROM fem";
                      		mysqli_set_charset($conn,'UTF8');
                      		$result = mysqli_query($conn,$sql);
                      // 3. Xu ly ket qua
                      while($row = mysqli_fetch_assoc($result)){ ?>
							<td width="10"><input type="checkbox" value="<?php  echo $row['id'] ?>"></td>
							<td><a href="edit.php?id=<?php echo $row["id"]?>"><img src="../3.PROJECT/images/edit.gif" alt=""></a></td>
							<td><a href="delete.php?id=<?php echo $row["id"] ?>"><img src="../3.PROJECT/images/deleted.jpg" alt=""></a></td>
							<td ><?php  echo $row['username']?></td>
							<td ><?php  echo $row['displayname']?></td>
							<td><?php  echo $row['email']?></td>
							<!-- <td>09759755555</td> -->
							<td>admin</td>
						</tr>
						<?php
						}
						?>
						
					</table>
					<div class="task"><a href="../3.PROJECT/register.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
									<!-- <a href="delete.php?id=<?php echo $row["id"]?>"> <input type="button" name="Xóa" value="Xóa"> </a> 
									<a href="edit.php?id=<?php echo $row["id"]?>"><input type="button" name="Cập nhật" value="Cập nhật"></a> -->
					</div>
			    </div>
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<li id="current" class="active item1"><a href="user.html">Quản trị người sử dụng</a></li>
			<li class="item82"><a href="phanquyen.php">Phân quyền người sử dụng</a></li>
			<li class="item83"><a href="log.html">Quản lý log</a></li>
			<li class="item85"><a href="dsmonhoc.html"><a href="changepass.html">Đổi mật khẩu</a></li>			
			</ul>		
	</div>

	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>

<!-- BEGIN: FOOTER -->
<div id="ja-footer" class="clearfix">

	
	<small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
<a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.</small>
<!--<small><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a></small> -->


</div>
<!-- END: FOOTER -->

</div>

	<script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	 <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>

</body>
</html>