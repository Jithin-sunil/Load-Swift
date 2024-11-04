<?php
include("../Asset/Connection/connection.php");

session_start();

	$selUser="select * from tbl_user where user_id='".$_SESSION["userid"]."'";
	$dataUser=mysql_query($selUser);
	$rowUser=mysql_fetch_array($dataUser);
	
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MyProfile</title>
</head>

<body>
<table align="center">
<tr>
		<td>Name</td>
        <td><?php echo $rowUser["user_name"]?></td>
</tr>
<tr>
		<td>Contact</td>
        <td><?php echo $rowUser["user_contact"]?></td>
</tr>
<tr>
		<td>Email</td>
        <td><?php echo $rowUser["user_email"]?></td>
</tr>
<tr>
<td colspan="2" align="center">
<a href="EditProfle.php">EditProfle</a>/<a href="ChangePassword.php">ChangePassword</a>
</td>
</tr>
</table>
</body>
</html>