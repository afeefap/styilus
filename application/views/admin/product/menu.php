<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
<!-- Header -->
<header>
          <h1 class="left main-title">STYLY</h1>
          <p class="left main-title">
  <div class="right"> 	
  <a href="index.php/Quick_view_controller/" >BACK</a>
 </div>

        </header>
<!-- # Header --> 
<!-- Main Menu --> 
<menu class="main left">
        <h3>Menu</h3>
        <nav>
  <ul style="list-style-type:none">
  <li> <a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=0;echo $id;?>)">Current Products</a>
        <li> <a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=1;echo $id;?>)">Uploading New</a>
            </li>
            <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=2;echo $id;?>)"> Updations</a></li>
            <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=3;echo $id;?>)"> Availability</a></li>
            <li><a href="index.php/shop_now_controller/" target="_parent" style="text-decoration:none">All Products</a></li>
            <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=4;echo $id;?>)"> New Orders</a></li>
                        <li><a href="#" target="_parent" style="text-decoration:none" onclick="changecontent(<?php  $id=4;echo $id;?>)"> Top 10 Buyed</a></li>
          </ul>
</nav>
        </menu> 
<!-- # Main Menu -->
<section class="contents left">

    	<iframe src="index.php/welcome/image" width="800" height="600" frameborder="0" scrolling="no"  id="eventFrame" style="margin:-8px; margin:30px;"></iframe>


</section>
    <script>
	function changecontent(id)
	{

		if(id==1)
		{
			src="index.php/welcome/aboutus";

		}
		if(id==2)
		{
			src="index.php/welcome/career";
		}
		if(id==3)
		{
			src="index.php/welcome/gurantee";
		}
		if(id==4)
		{
			src="index.php/welcome/contactus";
		}
		if(id==0)
		{
			src="index.php/welcome/image";
		}
		
		
	document.getElementById('eventFrame').src = src

	}
	</script>

</body>
</html>