<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Admin fem TLU</title>


<link rel="stylesheet" href="assets/css/template.css" type="text/css">

<!-- Menu head -->
<link href="assets/css/ja.css" rel="stylesheet" type="text/css">
<link href="assets/css/default.css" rel="stylesheet" type="text/css">
<link href="assets/css/log.css" rel="stylesheet" type="text/css">

</head>
<body id="bd" class="wide fs3">

<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix " style="height: 100px;">
	<h1 class="logo">
		<a href="index.php" >
			<img src="assets/images/logo (1).jpg" alt="">
		</a>
	</h1>
</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<div id="ja-mainnavwrap">
	<div id="ja-mainnav">
		<ul id="ja-cssmenu" class="clearfix">
			<li class="active"><a href="hethong.php" id="menu86" class="active" title="Documentation (Beta)"><span class="menu-title">Hệ thống</span></a></li> 
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
	<div class="title-module">QUẢN LÝ LOG</div>
	<div align="center"><img src="images/log.JPG" border="none"></div>
			  
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<li id="current" class=" item1"><a href="hethong.php">Quản trị người sử dụng</a></li>
			<li class="  item82"><a href="phanquyen.php">Phân quyền người sử dụng</a></li>
			<li class=" active item83"><a href="log.php">Quản lý log</a></li>
			<li class="item85"><a href="dsmonhoc.php"><a href="changepass.php">Đổi mật khẩu</a></li>			
			</ul>		
	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>

<!-- BEGIN: FOOTER -->
<?php include("app/include/footer.php");?>
<!-- END: FOOTER -->

</div>



</body></html>
