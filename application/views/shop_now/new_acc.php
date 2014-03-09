<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>/css/newacc.css"/>


<h3>REGISTER ACCOUNT</h3>
<body>
<?php echo form_open('Shop/newacc1');?>

  <fieldset>
    <legend>Your Personal Information </legend>
    <table width="447" border="0">
      <tr>
        <td width="119"><label> First Name :</label></td>
        <td width="144"><input name="firstname" type="text" required="required"/></td>
</td>
      </tr>
      <tr>
        <td><label> Last Name :</label></td>
        <td><input name="lastname" type="text" required="required" /></td>
      </tr>
      <tr>
        <td><label>Email :</label></td>
        <td><input name="email" type="email" required="required"/></td>

      </tr>
      <tr>
        <td><label>Mobile Number :</label></td>
        <td><input name="mob" type="text"  required="required"/></td>
       <tr>
        <td><label>Fax :</label></td>
        <td><input name="fax" type="text" required="required" /></td>
        
    </table>
  </fieldset>
  <fieldset>
    <legend>Your address</legend>
    <table border="0">
        <td><label>Address:</label></td>
        <td><textarea name="address" cols="" rows="" required="required" ></textarea></td>
      </tr>
      <tr>
        <td><label>City :</label></td>
        <td><input name="city" type="text" required="required"/></td>
      </tr>
      <tr>
        <td><label>Postcode :</label></td>
        <td><input name="postcode" type="text" required="required"/></td>
      </tr>
      <tr>
        <td><label>District:</label></td>
        <td><input name="district" type="text" required="required" /></td>
      </tr>
      <tr>
        <td><label>State:</label></td>
        <td><input name="state" type="text" required="required"/></td>
      </tr>
    </table>
  </fieldset>
  <fieldset>
    <legend>Your Password</legend>
    <table border="0">
      <tr>
        <td><label>Choose Password :</label></td>
        <td><input name="password" type="password" required="required"/></td>
      </tr>
      <tr>
        <td><label>Confirm Password :</label></td>
        <td><input name="cpassword" type="password" required="required" /></td>
      </tr>
    </table>
    </div>
  </fieldset>
  <table border="0">
    <tr>
      <td><input name="agree" type="checkbox" value="" required="required" />
        I agree to all the terms and conditins</td>
        
      <tr>
      <td><input name="newsletter" type="checkbox" value="1" />Subscribe Newsletter</td>
    </tr>
    <tr>
      <td><input name="OK" type="submit" value="REGISTER" /></td>
      </tr>
  </table>
</form>
</body>
</html>
