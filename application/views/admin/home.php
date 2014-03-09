<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Home</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>css/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>css/style3.css" />

<!-- dd menu -->
<script type="text/javascript">
<!--
var timeout         = 10;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>

</head>

<body>



<ul id="sddm">
	<li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Customers</a>
		<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">Customer List</a>
		<a href="#">Second Subitem</a>
		<a href="#">JavaScript DropDown</a>
		<a href="#">DropDown Menu</a>
		<a href="#">CSS DropDown</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Sales</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#" onclick="changecontent(<?php  $id=1;echo $id;?>)" >Current Products</a>
		<a href="#" onclick="changecontent(<?php  $id=2;echo $id;?>)">Uploading New</a>
		<a href="#" onclick="changecontent(<?php  $id=3;echo $id;?>)">Updations</a>
		<a href="#" onclick="changecontent(<?php  $id=4;echo $id;?>)">Availability</a>
        <a href="#" onclick="changecontent(<?php  $id=5;echo $id;?>)">New Orders</a>
        <a href="#" onclick="changecontent(<?php  $id=6;echo $id;?>)">Top 10 Buyed</a>

		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">FeedBack</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">Latest</a>
		<a href="#">Read</a>
        <a href="#">Unread</a>
        <a href="#">All</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Controll pannel</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">Design</a>
        <a href="#">Settings</a>
        <a href="#">Back_up</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Help</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">UserGuide</a>
        <a href="#">support Forum</a>
		</div>
	</li>
</ul>
<div style="clear:both"></div>

<div style="clear:both"></div>
<iframe src="<?php echo site_url('welcome/image'); ?>" width="990" height="600" frameborder="0" scrolling="no"  id="eventFrame" style="margin:0px; margin:0px; border: 1px  inset #000;" ></iframe>

</body>
<script>
	function changecontent(id)
	{

		if(id==1)
		{
            src="<?=site_url('admin_controller/current1')?>";

		}
		if(id==2)
		{
            src="<?=site_url('admin_controller/upload')?>";
		}
		if(id==3)
		{
            src="<?=site_url('admin_controller/updations')?>";
		}
		if(id==4)
		{
            src="<?=site_url('admin_controller/available')?>";
		}
		if(id==5)
		{
            src="<?=site_url('admin_controller/neworders')?>";
		}
		if(id==6)
		{
            src="<?=site_url('admin_controller/top10')?>";
		}

		
		
	document.getElementById('eventFrame').src = src

	}
	</script>
</html>
