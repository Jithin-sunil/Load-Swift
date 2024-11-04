<?php
	include("../Asset/Connection/Connection.php");
	session_start();
		
		
	if(isset($_GET["aID"]))
	{
		$_SESSION["aID"]=$_GET["aID"];
		header("location:ViewMoreLorryowner.php");
	}
	
	
	?>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            height: 100%;
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
			height:65px;
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

        h1 {
            color: #00796b;
            text-align: center;
             margin: 40px 0 80px; /* Allows the heading to take available space */
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
		

        table {
			background-color: #ffeeff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
          
		}

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #00796b;
            color: white;
        }

        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            outline: none;
        }

        #LorryownerList {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%; /* Match the table width */
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
    <div class="content">
   
        <h1>Search for LorryOwners</h1>
        <form id="form1" name="form1" method="post" enctype="multipart/form-data">
            
            <table>
         
                    <tr>
                        <td>State</td>
                        <td>
                            <select name="selstate" id="selstate" onchange="getDistrict(this.value)">
                                <option value="">----select----</option>
                                <?php
                                $selqry = "SELECT * FROM tbl_state";
                                $data = mysql_query($selqry);
                                while ($row = mysql_fetch_array($data)) {
                                ?>
                                    <option value="<?php echo $row["state_id"] ?>"><?php echo $row["state_name"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td>
                            <select name="seldistrict" id="seldistrict" onchange="getPlace(this.value)">
                                <option value="">----select----</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td>
                            <select name="selplace" id="selplace" onchange="getLorryownerList(this.value)">
                                <option value="">----select----</option>
                            </select>
                        </td>
                    </tr>
              
            </table>
        </form>

<div id="LorryownerList">
  <!-- The list of lorryowner will be loaded here via AJAX -->
</div>





<script src="../Asset/JQ/jQuery.js"></script>
<script>
  function getDistrict(did) {
    $.ajax({
      url: "../Asset/AjaxPages/AjaxDistrict.php?did=" + did,
      success: function (result) {

        $("#seldistrict").html(result);
      }
    });
  }
</script>


<script>
  function getPlace(did) {
    $.ajax({
      url: "../Asset/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {
		//alert(did);
        $("#selplace").html(result);
      }
    });
  }
  function Assign(lid)
            {
                $.ajax({
                    url: "../Asset/AjaxPages/AjaxAssign.php?lid=" + lid,
                    success: function(response) {
                       window.location="Orders.php";
                    }
                });
            }

  function getLorryownerList(place_id) {
    $.ajax({
      url: "../Asset/AjaxPages/AjaxLorryownerList.php",
      method: "GET",
      data: { place_id: place_id },
      success: function (result) {
        // Update the HTML content where the agent list will be displayed
        $("#LorryownerList").html(result);
      },
      error: function () {
        alert("Error loading agent list. Please try again.");
      }
    });
  }
  function Assign(lid)
            {
                $.ajax({
                    url: "../Asset/AjaxPages/AjaxAssign.php?lid=" + lid,
                    success: function(response) {
                       window.location="Orders.php";
                    }
                });
            }
   
        // Menu toggle script
        const toggleMenu = document.getElementById('toggleMenu');
        const sidebar = document.getElementById('sidebar');

        toggleMenu.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    </script>
</body>
</html>


