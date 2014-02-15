<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style>
/* These styles just pretty up the page a bit. */
body {
   font: 62.5%/1.2 Arial, Helvetica, sans-serif;
   background-color: #eee; }
header {
	border-bottom: 1px solid rgba(0, 0, 0, .12);
	background:#00FFCC;
	height: 75px;
	color:d9e6f1;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.56);
}
#wrap {
	margin-left: 0px;
	border-radius: 5px;
   font-size: 1.3em;
   width: 500px;
   padding: 20px;
   margin: 0 auto; 
   background-color: #fff;
   position: relative; }

/* These styles create the dropdown menus. */
#navbar {
		border-radius: 5px;

	background: #585858;
	border-bottom: 1px solid #000000;
	height: 37px;
	box-shadow: 0px 2px 2px #DDDDDD;
    padding: 0;
    }
#navbar li {
		border-radius: 5px;

	background: #585858;
   list-style: none;
   float: left; }
#navbar li a {
padding: 4px 4px 4px 4px;
margin: 4px 4px 4px 4px;
border-radius: 5px;
background: #585858;
font-size: 13px;
text-decoration: none;
padding: 4px;
color: #FFFFFF;
display: block;
white-space: nowrap;
min-width: 85px;
 }
#navbar li ul {
		border-radius: 5px;

	display: none; 
	background: #585858;
   }
 #navbar li ul li{
	 	border-radius: 5px;

	 	background: #585858;

 }
  #navbar li:hover a
  {
  	background: #000000;

  }
#navbar li:hover ul, #navbar li.hover ul {

   display: block;
   position: absolute;
   margin: 0;
   padding: 0; }
#navbar li:hover li, #navbar li.hover li {

   float: none; 
   }
#navbar li:hover li a, #navbar li.hover li a {
		border-radius: 5px;

   border-bottom: 1px solid #fff;
   background: #585858;

   color: #ffff; }
#navbar li li a:hover {
	background: #000000;
}
</style>
<script>
// Javascript originally by Patrick Griffiths and Dan Webb.
// http://htmldog.com/articles/suckerfish/dropdowns/
sfHover = function() {
   var sfEls = document.getElementById("navbar").getElementsByTagName("li");
   for (var i=0; i<sfEls.length; i++) {
      sfEls[i].onmouseover=function() {
         this.className+=" hover";
      }
      sfEls[i].onmouseout=function() {
         this.className=this.className.replace(new RegExp(" hover\\b"), "");
      }
   }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
</script>
<header>
  <h1 class="left">Stylus</h1>
  <ul id="navbar">
    <!-- The strange spacing herein prevents an IE6 whitespace bug. -->
    <li><a href="#">Customers</a>
      <ul>
        <li><a href="#">Customer List</a></li>
        <li> <a href="#">Second Subitem</a></li>
        <li> <a href="#">Numero Tres</a></li>
      </ul>
    </li>
    <li><a href="#">Sales</a>
      <ul>
        <li><a href="#" onclick="changecontent(<?php  $id=1;echo $id;?>)"> Current Products </a></li>
        <li> <a href="#" onclick="changecontent(<?php  $id=2;echo $id;?>)">Uploading New</a></li>
        <li> <a href="#" onclick="changecontent(<?php  $id=3;echo $id;?>)">Updations</a></li>
        <li> <a href="#" onclick="changecontent(<?php  $id=4;echo $id;?>)">Availability</a></li>
        <li> <a href="#" onclick="changecontent(<?php  $id=5;echo $id;?>)">New Orders</a></li>
        <li> <a href="#" onclick="changecontent(<?php  $id=6;echo $id;?>)">Top 10 Buyed</a></li>
      </ul>
    </li>
    <li><a href="#">FeedBack</a>
      <ul>
        <li><a href="#">Latest</a></li>
        <li><a href="#">Read</a></li>
        <li><a href="#">Unread</a></li>
        <li><a href="#">All</a></li>
      </ul>
    </li>
    <li><a href="#">Controll pannel</a>
      <ul>
        <li><a href="#">Design</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Back_up</a></li>
      </ul>
    </li>
    <li><a href="#">Help</a>
      <ul>
        <li><a href="#">UserGuide</a></li>
        <li><a href="#">support Forum</a></li>
      </ul>
  </ul>
</header>

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
