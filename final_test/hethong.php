<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Admin fem TLU</title>


<link rel="stylesheet" href="css/template.css" type="text/css">

<!-- Menu head -->
<link href="assets/css/ja.css" rel="stylesheet" type="text/css">
<link href="assets/css/default.css" rel="stylesheet" type="text/css">
<link href="assets/css/log.css" rel="stylesheet" type="text/css">

</head>
<body id="bd" class="wide fs3">

<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix" style="height: 100px;">
	<h1 class="logo">
		<a href="../index.php" title="">
			<img src="assets/images/logo.jpg" alt="">
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
							<td width="70">SĐT</td>
							<td width="100">Nhóm quyền</td>	
							
						</tr>
						<tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suauser.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
							<td >admin</td>
							<td >Trần Thị Thu Hiền</td>
							<td>1851161924@e.tlu.edu.vn</td>
							<td>0338653055</td>
							<td>admin</td>
						</tr>
						<tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suauser.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
							<td >admin</td>
							<td >Nguyễn Thị Huệ</td>
							<td>1851160589@e.tlu.edu.vn</td>
							<td>09759755555</td>
							<td>admin</td>
						</tr>
						
					</table>
					<div class="task"><a href="themuser.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
									<input type="button" name="Xóa" value="Xóa"> 
									<a href="suauser.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					</div>
			    </div>
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<li id="current" class="active item1"><a href="user.php">Quản trị người sử dụng</a></li>
			<li class="item82"><a href="phanquyen.php">Phân quyền người sử dụng</a></li>
			<li class="item83"><a href="log.php">Quản lý log</a></li>
			<li class="item85"><a href="dsmonhoc.php"><a href="changepass.html">Đổi mật khẩu</a></li>			
			</ul>		
	</div>

	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>

<!-- BEGIN: FOOTER -->
<div id="ja-footer" class="clearfix">

	
	<small>Copyright © 2009 TTTH Ứng dụng - Khoa Kinh tế và quản lý. Designed by 
<a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.</small>
<!--<small><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a></small> -->


</div>
<!-- END: FOOTER -->

</div>



</body></html>