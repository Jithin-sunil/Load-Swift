<?php
include("../Asset/Connection/connection.php");

session_start();

$message="";


if(isset($_POST["btnsave"]))
{
	
	$selSeller="select * from tbl_seller where seller_id='".$_SESSION["sellerid"]."' and seller_password='".$_POST["txtcurrent"]."'";
	$dataSeller=mysql_query($selSeller);
	if($rowSeller=mysql_fetch_array($dataSeller))
	{
		$newpassword=$_POST["txtnew"];
		$confirmpwd=$_POST["txtconfirm"];
		if($newpassword==$confirmpwd)
		{
			$insQry="update tbl_seller set seller_password='".$_POST["txtconfirm"]."' where seller_id='".$_SESSION["sellerid"]."'";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
     <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #00796b;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .menu-toggle {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed h2 {
            opacity: 0;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 15px 0;
            display: flex;
            align-items: center;
			flex-direction:column;
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #004d40;
        }

        .sidebar a i {
            margin-bottom: 5px;
            font-size: 20px;
        }

        .sidebar.collapsed a span {
            display: none;
        }

        /* Main content */
        .main-content {
            flex: 1;
            padding: 40px;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 600px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #00796b;
            font-size: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        input[type="password"], input[type="text"], input[type="email"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #00796b;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #004d40;
        }
		.button-container {
            text-align: center; 
		}

        .message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
  <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Menu Toggle Icon -->
        <i class="fas fa-bars menu-toggle" id="toggleMenu"></i>

        <h2>Seller</h2>

        <!-- Sidebar links with icons -->
        <a href="MyProfile.php"><i class="fas fa-user"></i><span> Profile</span></a>
        <a href="HomePage.php"><i class="fas fa-home"></i><span> Home</span></a>
        <a href="ProductEntry.php"><i class="fas fa-box"></i><span> Products</span></a>
        <a href="SearchAgent.php"><i class="fas fa-search"></i><span> Agents</span></a>
        <a href="SearchLorryowner.php"><i class="fas fa-search"></i><span> Lorry Owners</span></a>
        <a href="Logout.php"><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
    </div>


    <!-- Main content -->
    <div class="main-content">
        <div class="container">
            <h1>Change Password</h1>
            <form id="form1" name="form1" method="post">
                <table>
                    <tbody>
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
                            <td colspan="2" class="button-container">
                                <input type="submit" name="btnsave" id="btnsave" value="UPDATE">
                                <input type="reset" name="btncancel" id="btncancel" value="CANCEL">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" class="message"><?php echo $message; ?></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

  <script>
        // Menu toggle script
        const toggleMenu = document.getElementById('toggleMenu');
        const sidebar = document.getElementById('sidebar');

        toggleMenu.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    </script>
</body>
</html>