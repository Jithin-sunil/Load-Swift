<?php
include("../Asset/Connection/connection.php");

session_start();



if(isset($_POST["btnsave"]))
{
	 $selseller = "SELECT seller_photo FROM tbl_seller WHERE seller_id='" . $_SESSION["sellerid"] . "'";
    $dataseller = mysql_query($selseller);
    $rowseller = mysql_fetch_array($dataseller);
    $existingPhoto = $rowseller["seller_photo"];
    
    // Check if a new photo was uploaded
    if (!empty($_FILES["pfile"]["name"])) {
        $photo = $_FILES["pfile"]["name"];
        $temp = $_FILES["pfile"]["tmp_name"];
        move_uploaded_file($temp, "../Asset/File/SellerDocs/" . $photo);
    } else {
        // No new photo, keep the existing photo
        $photo = $existingPhoto;
    }
	
	$insQry="update tbl_seller set 
	seller_photo='$photo',
	seller_name='".$_POST["txtname"]."',
	seller_address='".$_POST["txtaddress"]."',
	seller_email='".$_POST["txtemail"]."',
	seller_contact='".$_POST["txtcontact"]."' where seller_id='".$_SESSION["sellerid"]."'";
	mysql_query($insQry);
	header("location:MyProfile.php");
}


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
            background-color: #e0f7fa;
            margin: 0;
            display: flex;
            min-height: 100vh;
			margin-top: 5px;
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
            flex-direction: column;
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

        .content {
			  width: 500px;
            margin: 0 auto;
            margin-left: 60px;
            padding: 40px;
            width: calc(100% - 250px);
            transition: margin-left 0.3s;
        }

        h1 {
			margin-top:-40px;
            margin-bottom: 20px;
            font-size: 28px;
            color: #2980b9;
        }

      .profile-section {
    margin-bottom: 20px;
    text-align: center;
}

.profile-pic {
    margin-bottom: 10px;
}

.profile-pic img {
    width: 120px; /* Ensure the image is 120px */
    height: 120px; /* Optional: maintain a consistent height */
    border-radius: 50%; /* Circular image */
    border: 2px solid #4caf50; /* Border color */
    object-fit: cover; /* Ensure image covers the container */
}

.file-upload {
    position: relative;
    margin: 0 auto;
    display: inline-block; /* Center the upload button */
}

.file-upload input[type="file"] {
    display: none; /* Hide the default file input */
}

.file-upload label {
    background-color: #4caf50; /* Background color of the button */
    color: white; /* Text color */
    padding: 10px 20px; /* Padding around the label */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 16px; /* Font size */
    transition: background-color 0.3s; /* Smooth transition for background color */
}

.file-upload label:hover {
    background-color: #45a049; /* Darken the button on hover */
}

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
        }

        .form-buttons input[type="submit"],
        .form-buttons input[type="reset"] {
            background-color: #2980b9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-buttons input[type="submit"]:hover,
        .form-buttons input[type="reset"]:hover {
            background-color: #1c6691;
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

            .form-group input[type="text"],
            .form-group input[type="email"],
            .form-group input[type="file"] {
                padding: 8px;
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
        <a href="SearchLorryowner.php"><i class="fas fa-truck"></i><span> Lorry Owners</span></a>
        <a href="Logout.php"><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="content">
            <h1>Update Profile</h1>
            <!-- Profile Section -->
            <div class="profile-section">
 <div class="profile-pic">
            <img src="../Asset/File/SellerDocs/<?php echo $rowSeller["seller_photo"]; ?>" alt="Profile Picture" style="width: 120px; border-radius: 50%; border: 2px solid #4caf50;">
        </div>
       <form method="post" enctype="multipart/form-data" class="profile-form">
    <div class="file-upload">
        <input type="file" id="pfile" name="pfile" required style="display: none;">
        <label for="pfile" class="custom-file-upload">
            <i class="fas fa-upload"></i> Choose a New Photo
        </label>
          </div>  
          </div>
                <div class="form-group">
                    <label for="txtname">Name</label>
                    <input type="text" name="txtname" value="<?php echo $rowSeller["seller_name"]?>" required placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="txtaddress">Address</label>
                    <input type="text" name="txtaddress" value="<?php echo $rowSeller["seller_address"]?>" required placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="txtcontact">Contact</label>
                    <input type="text" name="txtcontact" value="<?php echo $rowSeller["seller_contact"]?>" required placeholder="Enter Contact">
                </div>
                <div class="form-group">
                    <label for="txtemail">Email</label>
                    <input type="email" name="txtemail" value="<?php echo $rowSeller["seller_email"]?>" required placeholder="Enter Email">
                </div>
                <div class="form-buttons">
                    <input type="submit" name="btnsave" value="UPDATE">
                    <input type="reset" name="btncancel" value="CANCEL">
                </div>
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
