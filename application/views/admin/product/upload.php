<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php echo form_open_multipart('admin_controller/do_upload');?>
<h3>UPLOAD NEW PRODUCT</h3>
<fieldset>
  <legend>General</legend>
  <table width="288" border="0">
    <tr>
      <td width="58"><label>Model :</label></td>
      <td width="214"><input name="name" type="text" /></td>
    </tr>
    <tr>
      <td width="58"><label>Description :</label></td>
      <td width="214"><textarea name="description" cols="" rows=""></textarea></td>
    </tr>
    <tr>
      <td width="58"><label>Image :</label></td>
      <td width="214"><input name="upload" type="file" /></td>
    </tr>
    <tr>
      <td>
  </table>
</fieldset>
<fieldset>
  <legend>Data</legend>
  <table>
      </tr>
    
    <tr>
      <td width="58"><label>Price :</label></td>
      <td width="214"><input name="price" type="text" /></td>
    </tr>
    <tr>
      <td width="58"><label>Quantity :</label></td>
      <td width="214"><input name="quantity" type="text" /></td>
    </tr>
    <tr>
      <td width="58"><label>Manufactrurer:</label></td>
      <td width="214"><input name="manufactrurer" type="text" /></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend>Link</legend>
  <table>
    <tr>
      <td><label>Category</label></td>
      <td><select name="category">
          <option value="please select.." selected="selected">Please select..</option>
          <option value="ORANGE">ORANGE</option>
          <option value="ORANGE">APPLE</option>
          <option value="GRAPES">GRAPES</option>
        </select>
    </tr>
    <tr>
      <td><label>Related product</label></td>
      <td><select name="related_product">
          <option value="please select.." selected="selected">Please select..</option>
          <option value="ORANGE">ORANGE</option>
          <option value="ORANGE">APPLE</option>
          <option value="GRAPES">GRAPES</option>
        </select>
    </tr>
    <tr>
      <td></td>
      <td><input name="OK" type="submit" value="OK" /></td>
  </table>
</fieldset>
</form>
</body>
</html>