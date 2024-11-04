<?php

session_start();
?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Seller Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    * {
    box-sizing: border-box;
}

/* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
	align-content:center;
}


/* Sidebar styling */
       .sidebar {
            width: 220px;
            background-color: #00796b;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            height: 100%;
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
            height: 65px;
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
        .content {
    
    	justify-content: center; /* Centers the content horizontally */
  		margin-left: 70px; /* Updated to account for the collapsed sidebar */
    	padding: 20px;
    	transition: margin-left 0.3s ease; /* Smooth transition when the sidebar is toggled */
	}

	.sidebar.collapsed + .content {
    	margin-left: 70px; /* Adjust margin for collapsed sidebar */
	}

	.sidebar + .content {
    	margin-left: 220px; /* Margin for expanded sidebar */
	}


/* Content section styling */
.content {
    margin-left: 240px; /* Space for sidebar */
    padding: 20px;
    text-align: center; /* Center content */
}
  .dash {
	  margin-top:-25px;
            margin-bottom: 130px; /* Space below the dashboard heading */
        }

        .dash h2 {
			font-size:46px;
            text-align: left;
            color: #34495e;
        }


.content h1 {
	font-size:60px;
	align-content:space-around
    color: #34495e;
}

.content pre {
	
	font-size:40px;
    color: #666;
}

/* Responsive sidebar behavior */
@media screen and (max-width: 768px) {
    .sidebar {
        width: 70px;
    }
	
    .content {
        margin-left: 80px; /* Adjust margin for smaller screen */
    }
    
    .sidebar h2 {
        display: none; /* Hide heading in collapsed sidebar */
    }
}
</style>
</head>

<body>
    
      
   <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <i class="fas fa-bars menu-toggle" id="toggleMenu"></i>
        <h2>Seller</h2>
        <a href="MyProfile.php"><i class="fas fa-user"></i><span> Profile</span></a>
        <a href="HomePage.php"><i class="fas fa-home"></i><span> Home</span></a>
        <a href="ProductEntry.php"><i class="fas fa-box"></i><span> Product Entry</span></a>
        <a href="SearchAgent.php"><i class="fas fa-search"></i><span> Agents</span></a>
        <a href="SearchLorryowner.php"><i class="fas fa-search"></i><span> Lorry Owners</span></a>
        <a href="Logout.php"><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
    </div>
  <div class="content">
        <div class="dash">
            <h2>Seller Dashboard</h2>
        </div>
       <h1>Welcome</h1>
        <pre>Welcome :: <?php echo $_SESSION["sellername"]; ?></pre> 
        <p>Your one-stop solution for managing your products and shipping.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
