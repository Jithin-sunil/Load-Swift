<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$inqry="insert into tbl_state(state_name)values('".$_POST["txtstate"]."')";
		mysql_query($inqry);
	}
	
	
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_state where state_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("loaction:State.php");
	}
	
	?>
    
    
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::State</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>State</td>
      <td><label for="txtstate"></label>
      <input type="text" name="txtstate" id="txtstate" required placeholder="Enter State"/></td>
    </tr>
    <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<br /><br />

<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>State</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_state";
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["state_name"]?></td>
            <td><a href="State.php?delID=<?php echo $row["state_id"]?>">Delete</a></td>
	</tr>
    <?php
			}
	?>


