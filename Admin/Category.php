<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$inqry="insert into tbl_category(category_name)values('".$_POST["txtcategory"]."')";
		mysql_query($inqry);
	}
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_category where category_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("location:Category.php");
	}
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::Category</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Category</td>
      <td><label for="txtcategory"></label>
      <input type="text" name="txtcategory" id="txtcategory" required placeholder="Enter Category"/></td>
    </tr>
    <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<br/>
<br/>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>Category Name</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_category";
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["category_name"]?></td>
            <td><a href="Category.php?delID=<?php echo $row["category_id"]?>">Delete</a></td>
	</tr>
    <?php
			}
	?>
