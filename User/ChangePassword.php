<?php
include("../Asset/Connection/connection.php");

session_start();

$message="";


if(isset($_POST["btnsave"]))
{
	
	$selUser="select * from tbl_user where user_id='".$_SESSION["userid"]."' and user_password='".$_POST["txtcurrent"]."'";
	$dataUser=mysql_query($selUser);
	if($rowUser=mysql_fetch_array($dataUser))
	{
		$newpassword=$_POST["txtnew"];
		$confirmpwd=$_POST["txtconfirm"];
		if($newpassword==$confirmpwd)
		{
			$insQry="update tbl_user set user_password='".$_POST["txtconfirm"]."' where user_id='".$_SESSION["userid"]."'";
			if(mysql_query($insQry))
      {
			header("location:./MyProfile.php");


      }
			// echo $insQry;
		}
		else
		{
			$message="Pasword not same...";
		}
	}
	else
	{
		$message="Pasword not correct...";
		
	}


}
	
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>Current Password</td>
        <td>
        <input type="password" name="txtcurrent" id="txtcurrent" required placeholder="Enter Password"></td>
      </tr>
      <tr>
        <td>New Password</td>
        <td>
        <input type="password" name="txtnew" id="txtnew" required placeholder="Enter New Password"></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td>
        <input type="password" name="txtconfirm" id="txtconfirm" required placeholder="Enter Confirm Password"></td>
      </tr>
       <tr>
        <td colspan="2" align="center"><input type="submit" name="btnsave" id="btnsave" value="UPDATE">
        <input type="reset" name="btncancel" id="btncancel" value="CANCEL"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?php echo $message?></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>