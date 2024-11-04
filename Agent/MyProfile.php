<?php
include("../Asset/Connection/connection.php");

session_start();

	$selAgent="select * from tbl_agent where agent_id='".$_SESSION["agentid"]."'";
	$dataAgent=mysql_query($selAgent);
	$rowAgent=mysql_fetch_array($dataAgent);
	
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
        <td><?php echo $rowAgent["agent_name"]?></td>
</tr>
<tr>
		<td>Contact</td>
        <td><?php echo $rowAgent["agent_contact"]?></td>
</tr>
<tr>
		<td>Email</td>
        <td><?php echo $rowAgent["agent_email"]?></td>
</tr>
<tr>
<td colspan="2" align="center">
<a href="EditProfle.php">EditProfle</a>/<a href="ChangePassword.php">ChangePassword</a>
</td>
</tr>
</table>
</body>
</html>