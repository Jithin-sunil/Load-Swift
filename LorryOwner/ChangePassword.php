<?php
include("../Asset/Connection/connection.php");

session_start();

$message="";


if(isset($_POST["btnsave"]))
{
	
	$selLorryOwner="select * from tbl_lorryowner where lorryowner_id='".$_SESSION["lorryownerid"]."' and lorryowner_password='".$_POST["txtcurrent"]."'";
	$dataLorryOwner=mysql_query($selLorryOwner);
	if($rowLorryOwner=mysql_fetch_array($dataLorryOwner))
	{
		$newpassword=$_POST["txtnew"];
		$confirmpwd=$_POST["txtconfirm"];
		if($newpassword==$confirmpwd)
		{
			$insQry="update tbl_lorryowner set lorryowner_password='".$_POST["txtconfirm"]."' where lorryowner_id='".$_SESSION["lorryownerid"]."'";
			mysql_query($insQry);
			echo $insQry;
			//header("location:../Guest/Login.php");
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lorry Owner Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 220px;
            background-color: #00796b;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            margin: 0 0 20px;
            font-size: 24px;
            text-align: center;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #004d40;
        }

        .sidebar a i {
            margin-right: 10px;
            font-size: 20px;
        }
		  .main-content {
            margin-left: 240px; /* space for the sidebar */
            padding: 20px;
            width: calc(100% - 240px);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #4caf50;
            margin-bottom: 20px;
            font-size: 26px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 10px;
            text-align: left;
        }
		tr:hover {
            background-color: #f1f1f1;
        }

        td:first-child {
            font-weight: bold;
            color: #00695c;
        }
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }
		.button-container {
            text-align: center; 
		}
       input[type="submit"],
        input[type="reset"] {
            background-color: #00796b;
            color: white;
            padding: 12px;
            border: none;
			align-items:center;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 10px 5px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #004d40;
        
        }
        .message {
            margin-top: 15px;
            color: #d32f2f; /* Red color for error messages */
        }
    </style>
</head>

<body>
 <div class="sidebar">
        <h2>LorryOwner</h2>
        <a href="MyProfile.php"><i class="fas fa-user"></i>Profile</a>
        <a href="HomePage.php"><i class="fas fa-home"></i>Home</a>
        <a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <a href="ManageLoads.php"><i class="fas fa-truck"></i>Manage Loads</a>
    </div>
    <div class="main-content">
    <div class="container">
        <h1>Change Password</h1>
        <form id="form1" name="form1" method="post">
            <table>
                <tr>
                    <td>Current Password</td>
                    <td>
                        <input type="password" name="txtcurrent" id="txtcurrent" required placeholder="Enter Current Password">
                    </td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="password" name="txtnew" id="txtnew" required placeholder="Enter New Password">
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="password" name="txtconfirm" id="txtconfirm" required placeholder="Enter Confirm Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"  class="button-container">
                        <input type="submit" name="btnsave" id="btnsave" value="UPDATE">
                        <input type="reset" name="btncancel" id="btncancel" value="CANCEL">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" class="message"><?php echo $message; ?></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
