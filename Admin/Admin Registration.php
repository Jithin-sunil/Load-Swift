<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$inqry="insert into tbl_admin(admin_name,admin_contact,admin_email,admin_password)values('".$_POST["txtname"]."','".$_POST["txtcontact"]."','".$_POST["txtemail"]."','".$_POST["txtpassword"]."')";
		mysql_query($inqry);
		
	}
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_admin where admin_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("loaction:Admin Registration.php");
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::AdminRegistration</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Name</td>
      <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" required placeholder="Enter Name"/></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact" required placeholder="Enter Contact"/></td>
    </tr>
    <tr>
      <td>Email ID</td>
      <td><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" required placeholder="Enter EmailID"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpassword"></label>
      <input type="password" name="txtpassword" id="txtpassword" required placeholder="Enter Password"/></td>
    </tr>
    <tr>
     
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />   <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<br />
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_admin";
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["admin_name"]?></td>
             <td><?php echo $row["admin_contact"]?></td>
              <td><?php echo $row["admin_email"]?></td>
               <td><?php echo $row["admin_password"]?></td>
            <td><a href="Admin Registration.php?delID=<?php echo $row["admin_id"]?>">Delete</a></td>
	</tr>
    <?php
			}
	?>