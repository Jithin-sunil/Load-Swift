<?php
	include("../Asset/Connection/Connection.php");
	session_start();

	if(isset($_POST["btnsubmit"]))
	{
		$photo=$_FILES["filephoto"]["name"];
		$temp=$_FILES["filephoto"]["tmp_name"];
		move_uploaded_file($temp,"../Asset/File/ProductDocs/".$photo);
		
		$inqry="insert into tbl_product(place_id,product_name,grade_id,product_date,product_locationaddress,product_price,product_image,seller_id)values('".$_POST["selplace"]."','".$_POST["txtname"]."','".$_POST["selgrade"]."','".$_POST["date"]."','".$_POST["txtlocation"]."','".$_POST["txtprice"]."','$photo','".$_SESSION["sellerid"]."')";
		mysql_query($inqry);
		//echo $inqry;
	}
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_product where product_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("loaction:ProductEntry.php");
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        /* CSS styles from your previous message */
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
			background-color:#e0f7fa;
        }
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

	.form-container {
    	margin: 20px 0;
    	padding: 20px;
    	border: 1px solid #ddd;
    	border-radius: 8px;
    	background-color: #f9f9f9;
    	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    	width: 80%; /* Optional: Set a max width */
	}

	.form-container h1 {
    	text-align: center;
    	color: #34495e;
	}

	.form-container table {	
    	width: 100%; /* Changed to 100% for full-width */
    	margin: 0 auto; /* Centers the table */
    	border-collapse: collapse;
    	box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
	}

	.form-container td {
    	padding: 10px;
    	text-align: center; /* Centers text in each cell */
	}

	.form-container input[type="text"],
	.form-container input[type="date"],
	.form-container input[type="file"],
	.form-container select,
	.form-container textarea {
    	width: 90%; /* Adjusted for better padding */
    	padding: 8px;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	margin: 0 auto; /* Centers the inputs */
    	display: block; /* Makes inputs block-level elements */
	}

	.form-container input[type="submit"],
	.form-container input[type="reset"] {
	    background-color: #34495e;
    	color: white;
    	border: none;
    	padding: 10px 15px;
    	border-radius: 4px;
    	cursor: pointer;
    	margin-top: 10px;
    	width: 100px; /* Fixed width for buttons */
    	margin-left: auto; /* Centers button */
    	margin-right: auto; /* Centers button */
	}

	.form-container input[type="submit"]:hover,
	.form-container input[type="reset"]:hover {
	    background-color: #2c3e50;
	}

	.form-container textarea {
	    resize: vertical;
	}


        @media screen and (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            .content {
                margin-left: 70px;
            }
            .sidebar-header h2 {
                display: none;
            }
        }
        .product-table-container {
            margin-top: 20px;
        }
		 .product-table-container h1{
			  text-align: center;
            color: #34495e;
		 }
		 
        .product-table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .product-table-container th, .product-table-container td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .product-table-container th {
            background-color: #34495e;
            color: white;
        }
        .product-table-container tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .product-table-container tr:hover {
            background-color: #ddd;
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
        <!-- Product Entry Form -->
        <div class="form-container">
            <h1>Product Entry</h1>
            <form id="form1" name="form1" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Product Name</td>
                        <td><input type="text" name="txtname" id="txtname" required placeholder="Enter Product Name"></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="selcategory" id="selcategory" onchange="getGrade(this.value)">
                              <option value="----select----">----select----</option>
                                <?php
                                    $selqry="select * from tbl_category";
                                    $data=mysql_query($selqry);
                                    while($row=mysql_fetch_array($data)) {
                                ?>
                                <option value="<?php echo $row["category_id"] ?>"><?php echo $row["category_name"] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Grade</td>
                        <td><select name="selgrade" id="selgrade"></select></td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>
                            <select name="selstate" id="selstate" onchange="getDistrict(this.value)">
                                <option value="----select----">----select----</option>
                                <?php
                                    $selqry="select * from tbl_state";
                                    $data=mysql_query($selqry);
                                    while($row=mysql_fetch_array($data)) {
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
                        <td><select name="seldistrict" id="seldistrict" onchange="getPlace(this.value)"></select></td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td><select name="selplace" id="selplace"></select></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><input type="date" name="date" id="date"></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td><textarea name="txtlocation" id="txtlocation" required placeholder="Enter Product Location"></textarea></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="txtprice" id="txtprice" required placeholder="Enter Product Price"></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="filephoto" id="filephoto" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit">
                            <input type="reset" name="btncancel" id="btncancel" value="Cancel">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- Product List Table


        <!-- Product list table -->
        <div class="product-table-container">
        <h1 align="center">Product List</h1>
            <table>
                <thead>
                    <tr>
                        <th>SI No</th>
                        <th>Product Name</th>
                        <th>Grade</th>
                        <th>Category</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $selqry="select * from tbl_product p 
						inner join tbl_grade g on p.grade_id=g.grade_id 
						inner join tbl_category c on c.category_id=g.category_id 
						inner join tbl_place pl on pl.place_id=p.place_id where p.seller_id='".$_SESSION["sellerid"]."'";
                        $data=mysql_query($selqry);
                        $i=0;
                        while($row=mysql_fetch_array($data)) {
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row["product_name"] ?></td>
                        <td><?php echo $row["grade_name"] ?></td>
                        <td><?php echo $row["category_name"] ?></td>
                        <td><?php echo $row["place_name"] ?></td>
                        <td><?php echo $row["product_date"] ?></td>
                        <td><?php echo $row["product_price"] ?></td>
                        <td><?php echo $row["product_locationaddress"] ?></td>
                        <td><?php echo $row["product_stock"] ?></td>
                        <td>
                            <a href="../Asset/File/ProductDocs/<?php echo $row["product_image"] ?>">
                                <img src="../Asset/File/ProductDocs/<?php echo $row["product_image"] ?>" width="100" height="100">
                            </a>
                        </td>
                        <td><a href="ProductEntry.php?delID=<?php echo $row["product_id"] ?>">Delete</a>
                        <a href="Stock.php?sid=<?php echo $row["product_id"] ?>">Stock</a></td>

                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../Asset/JQ/jQuery.js"></script>
    <script>
        // Menu toggle script
        const toggleMenu = document.getElementById('toggleMenu');
        const sidebar = document.getElementById('sidebar');

        toggleMenu.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    </script>
    
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
            $("#selplace").html(result);
          }
        });
      }
    </script>

    <script>
      function getGrade(did) {
        $.ajax({
          url: "../Asset/AjaxPages/AjaxGrade.php?did=" + did,
          success: function (result) {
            $("#selgrade").html(result);
          }
        });
      }
    </script>

</body>
</html>


