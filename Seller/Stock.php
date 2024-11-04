<?php
	include("../Asset/Connection/Connection.php");
    if(isset($_POST["btnsubmit"]))
	{
		 $inqry="insert into tbl_stock(stock_quantity,product_id)values('".$_POST["txtquality"]."','".$_GET["sid"]."')";
        
		if(mysql_query($inqry))
        {
            ?>
            <script>
                alert('Stock Added..');
                window.location="ProductEntry.php";
            </script>
            <?php
        }
		
	}
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::Stock</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Stock Quality</td>
      <td><input type="text" name="txtquality" id="txtquality" required placeholder="Enter Stock"/></td>
    </tr>
    <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
     </td>
    </tr>
  </table>
</form>
</body>
</html>