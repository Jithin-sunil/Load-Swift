<?php
include("../Asset/Connection/connection.php");

session_start();
$message="";
if(isset($_POST["btnsubmit"]))
{
	$selAdmin="select * from tbl_admin where admin_email='".$_POST["txtEmail"]."' and admin_password='".$_POST["txtPassword"]."'";
	$dataAdmin=mysql_query($selAdmin);
	
	$selUser="select * from tbl_user where user_email='".$_POST["txtEmail"]."' and user_password='".$_POST["txtPassword"]."'";
	$dataUser=mysql_query($selUser);
	
	$selLorryOwner="select * from tbl_lorryowner where lorryowner_email='".$_POST["txtEmail"]."' and lorryowner_password='".$_POST["txtPassword"]."'";
	$dataLorryOwner=mysql_query($selLorryOwner);
	
	$selAgent="select * from tbl_agent where agent_email='".$_POST["txtEmail"]."' and agent_password='".$_POST["txtPassword"]."'";
	$dataAgent=mysql_query($selAgent);
	
	$selSeller="select * from tbl_seller where seller_email='".$_POST["txtEmail"]."' and seller_password='".$_POST["txtPassword"]."'";
	$dataSeller=mysql_query($selSeller);
	
	
	if($rowAdmin=mysql_fetch_array($dataAdmin))
	{
		$_SESSION["adminid"]=$rowAdmin["admin_id"];
		$_SESSION["adminname"]=$rowAdmin["admin_name"];
		header("location:../Admin/HomePage.php");
	}
	
	else if($rowUser=mysql_fetch_array($dataUser))
	{
		$_SESSION["userid"]=$rowUser["user_id"];
		$_SESSION["username"]=$rowUser["user_name"];
		header("location:../User/HomePage.php");
	}
	
	else if($rowLorryOwner=mysql_fetch_array($dataLorryOwner))
	{
		$_SESSION["lorryownerid"]=$rowLorryOwner["lorryowner_id"];
		$_SESSION["lorryownername"]=$rowLorryOwner["lorryowner_name"];
		header("location:../LorryOwner/HomePage.php");
	}
	
	else if($rowAgent=mysql_fetch_array($dataAgent))
	{
		$_SESSION["agentid"]=$rowAgent["agent_id"];
		$_SESSION["agentname"]=$rowAgent["agent_name"];
		header("location:../Agent/HomePage.php");
	}
	
	else if($rowSeller=mysql_fetch_array($dataSeller))
	{
		$_SESSION["sellerid"]=$rowSeller["seller_id"];
		$_SESSION["sellername"]=$rowSeller["seller_name"];
		header("location:../Seller/HomePage.php");
	}
	
	else
	{
		$message="Invalid Login!!!";
	}
}

?>








<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Login.css">
	
</head>
<body>
    <div class="login-container">
        <form id="form1" name="form1" method="post">
            <h2>Login</h2>
            <div class="input-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" required placeholder="Enter EmailID">
            </div>
            <div class="input-group">
                <label for="txtPassword">Password</label>
                <input type="password" name="txtPassword" id="txtPassword" required placeholder="Enter Password">
            </div>
            <div class="form-actions">
                <input type="submit" name="btnsubmit" id="btnsubmit" value="Login">
            </div>
            <div class="message">
                <?php echo $message; ?>
            </div>
        </form>
    </div>
</body>
</html>
