<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>css/style3.css" />
</head>
<?php  
echo form_open('shop/ok/');
?>
<body>

<form method="post">
	<table width="357" border="0">
   		<tr>
   			<td colspan="2"><h1>LOGIN</h1></TD>
  		</tr>
  		<tr>
    		<td width="203"><label>Enter your Username:</label></td>
    		<td width="144"><input type="text" name="username" /></td>
  		</tr>
  		<tr>
    		<td><label>Enter your password :</label></td>
    		<td><input type="password" name="password" /></td>
 
  		</tr>
 		<tr>
 			<td></td>
 			<td><input name="OK" type="submit" value="LOGIN" />
 		</tr> 
		<tr>
        <td><a href="<?=site_url('shop/newacc')?>" target="_parent" style="text-decoration:none">New account</a></td>
            <td><a href="<?=site_url('shop/forgot')?>" target="_parent" style="text-decoration:none">Forgot Password</a></td>
 		</tr>

	</table>
</form>

</body>

</html>
