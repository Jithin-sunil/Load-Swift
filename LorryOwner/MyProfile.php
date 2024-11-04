<?php
include("../Asset/Connection/connection.php");

session_start();

$selLorryOwner = "SELECT * FROM tbl_lorryowner WHERE lorryowner_id='" . $_SESSION["lorryownerid"] . "'";
$dataLorryOwner = mysql_query($selLorryOwner);
$rowLorryOwner = mysql_fetch_array($dataLorryOwner);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
		* {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            display: flex;
        }

        .sidebar {
            width: 200px;
			height:695px;
            background-color: #00796b;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            margin: 0 0 20px;
            font-size: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 15px 0;
            display: flex;
            align-items: center;
            width: 100%;
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
            flex: 1;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .profile-section {
            margin-bottom: 20px;
        }

        .profile-pic img {
            width: 100px; /* Adjust size as needed */
            height: 100px; /* Adjust size as needed */
            border-radius: 50%;
            object-fit: cover;
        }

        .edit-pic {
            display: block;
            margin-top: 10px;
            color: #00796b;
            text-decoration: underline;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td:first-child {
            font-weight: bold;
            color: #00695c;
        }

        .button-container {
            margin-top: 20px;
        }

        a.button {
            background-color: #00796b;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin: 0 5px;
            display: inline-block;
            font-size: 14px;
        }

        a.button:hover {
            background-color: #004d40;
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
<br></br><br></br>
    <div class="main-content">
        <div class="container">
          <h1>My Profile</h1>
            <div class="profile-section">
                <div class="profile-pic">
                    <img src="../Asset/File/LorryownerDocs/<?php echo $rowLorryOwner["lorryowner_photo"]; ?>" alt="Profile Picture">
                </div>
                <a href="EditProfle.php" class="edit-pic">Edit Profile Picture</a>
            </div>
            <table>
                <tr>
                    <td>Name</td>
                    <td><?php echo $rowLorryOwner["lorryowner_name"]; ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?php echo $rowLorryOwner["lorryowner_contact"]; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $rowLorryOwner["lorryowner_email"]; ?></td>
                </tr>
            </table>
            <div class="button-container">
                <a href="EditProfle.php" class="button">Edit Profile</a>
                <a href="ChangePassword.php" class="button">Change Password</a>
            </div>
        </div>
    </div>
</body>
</html>
