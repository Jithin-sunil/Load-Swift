<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lorry Owner Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #00796b;
            padding: 20px;
            color: white;
            height: 100vh; /* Full height */
            position: fixed; /* Stay in place */
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            padding: 10px;
            color: white;
            text-decoration: none;
            margin: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #004d40;
        }
        .sidebar i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 270px; /* Space for sidebar */
            padding: 20px;
            width: calc(100% - 270px);
			
        }
        .container {
             background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 400px;
            margin: 0 auto;
            text-align: center;
			margin-top: 120px;
        }
        h1 {
            color: #00796b;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 15px;
            border: 1px solid #bdbdbd;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
            transition: color 0.3s;
        }
        a:hover {
            color: #388e3c;
        }
    </style>
</head>

<?php
session_start();
?>

<body>
    <div class="sidebar">
        <h2>LorryOwner</h2>
        <a href="MyProfile.php"><i class="fas fa-user"></i>Profile</a>
        <a href="HomePage.php"><i class="fas fa-home"></i>Home</a>
        <a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <a href="ManageLoads.php"><i class="fas fa-truck"></i>Manage Loads</a>
    </div>

    <div class="main-content">
        <h1>LORRYOWNER DASHBOARD</h1>
        <div class="container">
            <h2>Welcome!</h2>
            <table>
                <tbody>
                    <tr>
                        <td>Welcome :: <?php echo $_SESSION["lorryownername"]; ?></td>
                    </tr>
                    <tr>
                        <td><a href="MyProfile.php">PROFILE</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
