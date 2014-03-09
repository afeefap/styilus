<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="<?php echo(base_url());?>/css/s.css" rel="stylesheet" type="text/css">
<link href="<?php echo(base_url());?>/css/style3.css" rel="stylesheet" type="text/css">

</head>

<body>

<menu class="main left">
        <h3>Menu</h3>
        <nav>
  <ul style="list-style-type:none">
            <a href="Aboutus.php" target="_parent" style="text-decoration:none">About Us</a>
            </li>
            <li><a href="Career.php" target="_parent" style="text-decoration:none"> Career</a></li>
            <li><a href="100%.php" target="_parent" style="text-decoration:none"> 100% gurantee</a></li>
            <li><a href="<?=site_url('shop')?>" target="_parent" style="text-decoration:none">Shop Now</a></li>
            <li><a href="Contact.php" target="_parent" style="text-decoration:none"> Contact</a></li>
          </ul>
</nav>
        </menu> 
<!-- # Main Menu -->
    <section class="contents left" style=" margin-top:60px;border: 1px  inset #000;" >

    	<h2>NewItems</h2>
        <?php 
		for($i=0;$i<9;$i++)
		{
		?>
         <div class="wrkshp_logo"><img src="<?php echo(base_url());?>/images/thumbs/cc.jpg" width="83" height="55" alt="stylus" /></div>
         <?php }?>
    </div>
         </section>

</body>

</html>
