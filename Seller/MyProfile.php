<?php
include("../Asset/Connection/connection.php");

session_start();

	$selSeller="select * from tbl_seller where seller_id='".$_SESSION["sellerid"]."'";
	$dataSeller=mysql_query($selSeller);
	$rowSeller=mysql_fetch_array($dataSeller);
	
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProfile</title>
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
            background-color: #4c00b0;
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

        .main-content {
            flex: 1;
            padding: 40px;
            background-color: #f7f9fc;
        }

        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
        }

        .profile-section {
            margin-bottom: 20px;
        }

        .profile-pic img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .edit-pic {
            margin-top: 10px;
            color: #00796b;
            font-weight: 500;
            text-decoration: underline;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        td:first-child {
            font-weight: bold;
            color: #00796b;
        }

        tr:hover {
            background-color: #f1f1f1;
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
            font-size: 14px;
            transition: background-color 0.3s;
            margin: 0 10px;
            display: inline-block;
        }

        a.button:hover {
            background-color: #004d40;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 30px;
            }

            .sidebar {
                width: 60px;
            }

            .main-content {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            .profile-pic img {
                width: 90px;
                height: 90px;
            }

            table th, table td {
                font-size: 14px;
                padding: 8px;
            }

            .button-container a.button {
                font-size: 12px;
            }
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
            <h1>My Profile</h1>

            <!-- Profile Section -->
            <div class="profile-section">
                <div class="profile-pic">
                    <img src="../Asset/File/sellerDocs/<?php echo $rowSeller["seller_photo"]; ?>" alt="Profile Picture">
                </div>
                <a href="EditProfle.php" class="edit-pic">Edit Profile Picture</a>
            </div>

            <!-- Profile Information -->
            <table>
                <tr>
                    <td>Name</td>
                    <td><?php echo $rowSeller["seller_name"]; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $rowSeller["seller_address"]; ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?php echo $rowSeller["seller_contact"]; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $rowSeller["seller_email"]; ?></td>
                </tr>
            </table>

            <!-- Action Buttons -->
            <div class="button-container">
                <a href="EditProfle.php" class="button">Edit Profile</a>
                <a href="ChangePassword.php" class="button">Change Password</a>
            </div>
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
