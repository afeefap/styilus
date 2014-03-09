<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>/css/style3.css" />
</head>
<!-- Header -->

<header>
  <h1 class="left main-title">Welcome User</h1>
  <p class="left main-title">
  <div class="right"><span>Welcome</span><a href="logout" >Logout</a></div>
</header>
<!-- # Header --> 
<!-- Main Menu --> 
<menu class="main left">
<h3>Menu</h3>
<nav>
  <ul style="list-style-type:none">
    <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=0;echo $id;?>)">Profile</a>
    <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=1;echo $id;?>)">Settings</a></li>
    <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=2;echo $id;?>)">Mycart</a></li>
     <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=3;echo $id;?>)">Notification</a></li>
    <li><a href="select_items" target="_parent" style="text-decoration:none">Select Items</a></li>
  </ul>
</nav>
</menu> 
<!-- # Main Menu -->
<section class="contents left">
  <iframe src="profile" width="800" height="600" frameborder="0" scrolling="no"  id="eventFrame" style="margin:-8px; margin:30px;"></iframe>
</section>
<script>
	function changecontent(id)
	{

		if(id==1)
		{
			src="settings";

		}
		if(id==2)
		{
			src="mycart";
		}
		if(id==3)
		{
			src="notification";
		}
		if(id==0)
		{
			src="profile";
		}
		
		
	document.getElementById('eventFrame').src = src

	}
	</script>

</body></html>