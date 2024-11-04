<?php
include("../Asset/Connection/connection.php");

session_start();



if(isset($_POST["btnsave"]))
{
	$insQry="update tbl_user set user_name='".$_POST["txtname"]."',user_email='".$_POST["txtemail"]."',user_contact='".$_POST["txtcontact"]."' where user_id='".$_SESSION["userid"]."'";
	mysql_query($insQry);
	header("location:MyProfile.php");
}


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
<form method="post">
<table align="center">
<tr>
		<td>Name</td>
        <td><input type="text" name="txtname" value="<?php echo $rowUser["user_name"]?>" required placeholder="Enter Name"></td>
</tr>
<tr>
		<td>Contact</td>
        <td><input type="text" name="txtcontact" value="<?php echo $rowUser["user_contact"]?>" required placeholder="Enter Contact"></td>
</tr>
<tr>
		<td>Email</td>
        <td><input type="email" name="txtemail" value="<?php echo $rowUser["user_email"]?>" required placeholder="Enter EmailID"></td>
</tr>
<tr>
        <td colspan="2" align="center"><input type="submit" name="btnsave" id="btnsave" value="UPDATE">
        <input type="reset" name="btncancel" id="btncancel" value="CANCEL"></td>
      </tr>

</table>
</form>
</body>
</html>