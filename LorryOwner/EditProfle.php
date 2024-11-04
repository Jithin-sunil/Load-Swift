<?php
include("../Asset/Connection/connection.php");

session_start();



if(isset($_POST["btnsave"]))
{
	 $sellorryowner = "SELECT lorryowner_photo FROM tbl_lorryowner WHERE lorryowner_id='" . $_SESSION["lorryownerid"] . "'";
    $datalorryowner = mysql_query($sellorryowner);
    $rowLorryOwner = mysql_fetch_array($datalorryowner);
    $existingPhoto = $rowLorryOwner["lorryowner_photo"];
    
    // Check if a new photo was uploaded
    if (!empty($_FILES["pfile"]["name"])) {
        $photo = $_FILES["pfile"]["name"];
        $temp = $_FILES["pfile"]["tmp_name"];
        move_uploaded_file($temp, "../Asset/File/LorryownerDocs/" . $photo);
    } else {
        // No new photo, keep the existing photo
        $photo = $existingPhoto;
    }

	
	$insQry="update tbl_lorryowner set 
	lorryowner_photo='$photo',
	lorryowner_name='".$_POST["txtname"]."',
	lorryowner_email='".$_POST["txtemail"]."',
	lorryowner_contact='".$_POST["txtcontact"]."' where lorryowner_id='".$_SESSION["lorryownerid"]."'";
	mysql_query($insQry);
	header("location:MyProfile.php");
}


	$selLorryOwner="select * from tbl_lorryowner where lorryowner_id='".$_SESSION["lorryownerid"]."'";
	$dataLorryOwner=mysql_query($selLorryOwner);
	$rowLorryOwner=mysql_fetch_array($dataLorryOwner);
	
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lorry Owner Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	 <style>
        :root {
    --primary-color: #2c7a7b;
    --background-color: #f0f4f8;
    --text-color: #333;
    --card-bg-color: #ffffff;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
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
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }
  h1 {
            color: #4caf50;
            margin-bottom: 20px;
            font-size: 26px;
        }
        table {
            width: 500px;
            border-collapse: collapse;
            margin-top: 20px;
        }
      
      td {
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
		.file-upload {
    position: relative;
    margin: 20px 0;
}

.custom-file-upload {
    display: inline-block;
    padding: 10px 15px;
    border: 1px solid #4caf50;
    border-radius: 5px;
    background-color: #ffffff;
    color: #4caf50;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
    text-align: center;
}

.custom-file-upload:hover {
    background-color: #4caf50;
    color: white;
}

.custom-file-upload i {
    margin-right: 5px; /* Space between icon and text */
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
        <h2>Lorry Owner</h2>
        <a href="MyProfile.php"><i class="fas fa-user"></i>Profile</a>
        <a href="HomePage.php"><i class="fas fa-home"></i>Home</a>
        <a href="ManageLoads.php"><i class="fas fa-truck"></i>Manage Loads</a>
        <a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
    <div class="main-content">
        <div class="container">
            <h1>Edit Profile</h1>
            <div class="profile-pic">
                <img src="../Asset/File/LorryownerDocs/<?php echo $rowLorryOwner["lorryowner_photo"]; ?>" alt="Profile Picture" style="width: 120px; border-radius: 50%; border: 2px solid #4caf50;">
            </div>
           <form method="post" enctype="multipart/form-data" class="profile-form">
    <div class="file-upload">
        <input type="file" id="pfile" name="pfile" required style="display: none;">
        <label for="pfile" class="custom-file-upload">
            <i class="fas fa-upload"></i> Choose a New Photo
        </label>
    </div>
    <table style="width: 100%; height:10px; margin-top: 20px;">
        <tr>
            <td>Name</td>
            <td><input type="text" name="txtname" value="<?php echo $rowLorryOwner["lorryowner_name"]; ?>" required placeholder="Enter Name"></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><input type="text" name="txtcontact" value="<?php echo $rowLorryOwner["lorryowner_contact"]; ?>" required placeholder="Enter Contact"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="txtemail" value="<?php echo $rowLorryOwner["lorryowner_email"]; ?>" required placeholder="Enter EmailID"></td>
        </tr>
        <tr>
            <td colspan="2" class="button-container">
                <input type="submit" name="btnsave" value="UPDATE">
                <input type="reset" name="btncancel" value="CANCEL">
            </td>
        </tr>
    </table>
</form>
 <script>
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
        });
    </script>
    </body>
    </html>
