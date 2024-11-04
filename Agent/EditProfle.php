<?php
include("../Asset/Connection/connection.php");

session_start();



if(isset($_POST["btnsave"]))
{
	$insQry="update tbl_agent set agent_name='".$_POST["txtname"]."',agent_email='".$_POST["txtemail"]."',agent_contact='".$_POST["txtcontact"]."' where agent_id='".$_SESSION["agentid"]."'";
	mysql_query($insQry);
	header("location:MyProfile.php");
}


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
<form method="post">
<table align="center">
<tr>
		<td>Name</td>
        <td><input type="text" name="txtname" value="<?php echo $rowAgent["agent_name"]?>" required placeholder="Enter Name"></td>
</tr>
<tr>
		<td>Contact</td>
        <td><input type="text" name="txtcontact" value="<?php echo $rowAgent["agent_contact"]?>" required placeholder="Enter Contact"></td>
</tr>
<tr>
		<td>Email</td>
        <td><input type="email" name="txtemail" value="<?php echo $rowAgent["agent_email"]?>" required placeholder="Enter EmailID"></td>
</tr>
<tr>
        <td colspan="2" align="center"><input type="submit" name="btnsave" id="btnsave" value="UPDATE">
        <input type="reset" name="btncancel" id="btncancel" value="CANCEL"></td>
      </tr>

</table>
</form>
</body>
</html>