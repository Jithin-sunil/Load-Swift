<?php
	include("../Asset/Connection/Connection.php");
	
	
	if(isset($_GET["acid"]))
	{
		$delQry="update tbl_product set product_status='1' where product_id='".$_GET["acid"]."'";
		mysql_query($delQry);
		header("loaction:ProductList.php");
	}
	
	if(isset($_GET["rejid"]))
	{
		$delQry="update tbl_product set product_status='2' where product_id='".$_GET["rejid"]."'";
		mysql_query($delQry);
		header("loaction:ProductList.php");
	}
	
?>

<h3 align="center">NewProductList</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
        <th>Product</th>
        <th>Category</th>
        <th>Grade</th>
        <th>Seller Name</th>
        <th>Seller Address</th>
        <th>Place</th>
        <th>Location Address</th>
        <th>Date</th>
        <th>Available Stock</th>
        <th>photo</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_product p 
			inner join tbl_grade g on p.grade_id=g.grade_id 
			inner join tbl_category c on c.category_id=g.category_id 
			inner join tbl_seller s on s.seller_id=p.seller_id
			inner join tbl_place pl on pl.place_id=p.place_id where product_status='0'";
			
			
			//"select * from tbl_product p inner join tbl_grade g on p.grade_id=g.grade_id inner join tbl_category c on c.category_id=g.category_id inner join tbl_place pl on pl.place_id=p.place_id where p.seller_id='".$_SESSION["sellerid"]."'";
		    // echo $selqry;
			//echo $selqry;
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["product_name"]?></td>
            <td><?php echo $row["category_name"]?></td>
            <td><?php echo $row["grade_name"]?></td>
            <td><?php echo $row["seller_name"]?></td>
            <td><?php echo $row["seller_address"]?></td>
            <td><?php echo $row["place_name"]?></td>
            <td><?php echo $row["product_date"]?></td>
            <td><?php echo $row["product_locationaddress"]?></td>
            <td><?php echo $row["product_stock"]?></td>
           <td>
             <a href="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>">
                <img src="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>" width="75" height="75">
             </a>
              </td>
             
             
             
            <td>
            
            <a href="ProductList.php?acid=<?php echo $row["product_id"]?>">Accept</a>
            /<a href="ProductList.php?rejid=<?php echo $row["product_id"]?>">Reject</a>
            
            
            </td>
	</tr>
    <?php
			}
	?>
    </table>

<br/><br/>

<h3 align="center">AcceptedProductList</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
        <th>Product</th>
        <th>Category</th>
        <th>Grade</th>
         <th>Seller Name</th>
        <th>Seller Address</th>
        <th>Place</th>
        <th>Location Address</th>
        <th>Date</th>
        <th>Available Stock</th>
        <th>photo</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_product p 
			inner join tbl_grade g on p.grade_id=g.grade_id 
			inner join tbl_category c on c.category_id=g.category_id 
			inner join tbl_seller s on s.seller_id=p.seller_id
			inner join tbl_place pl on pl.place_id=p.place_id where product_status='1'";
			
			//echo $selqry;
			
			//"select * from tbl_product p inner join tbl_grade g on p.grade_id=g.grade_id inner join tbl_category c on c.category_id=g.category_id inner join tbl_place pl on pl.place_id=p.place_id where p.seller_id='".$_SESSION["sellerid"]."'";
		    // echo $selqry;
			//echo $selqry;
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["product_name"]?></td>
            <td><?php echo $row["category_name"]?></td>
            <td><?php echo $row["grade_name"]?></td>
            <td><?php echo $row["seller_name"]?></td>
            <td><?php echo $row["seller_address"]?></td>
            <td><?php echo $row["place_name"]?></td>
            
            <td><?php echo $row["product_locationaddress"]?></td>
            <td><?php echo $row["product_date"]?></td>
            <td><?php echo $row["product_stock"]?></td>
           <td>
             <a href="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>">
                <img src="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>" width="75" height="75">
             </a>
              </td>
             
             
             
            <td>
            
       
            <a href="ProductList.php?rejid=<?php echo $row["product_id"]?>">Reject</a>
            
            
            </td>
	</tr>
    <?php
			}
	?>
    </table>

<br/><br/>

<h3 align="center">RejectedProductList</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
        <th>Product</th>
        <th>Category</th>
        <th>Grade</th>
         <th>Seller Name</th>
        <th>Seller Address</th>
        <th>Place</th>
        <th>Location Address</th>
        <th>Date</th>
        <th>Available Stock</th>
        <th>photo</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_product p 
			inner join tbl_grade g on p.grade_id=g.grade_id 
			inner join tbl_category c on c.category_id=g.category_id 
			inner join tbl_seller s on s.seller_id=p.seller_id
			inner join tbl_place pl on pl.place_id=p.place_id where product_status='2'";
			
			
			//"select * from tbl_product p inner join tbl_grade g on p.grade_id=g.grade_id inner join tbl_category c on c.category_id=g.category_id inner join tbl_place pl on pl.place_id=p.place_id where p.seller_id='".$_SESSION["sellerid"]."'";
		    // echo $selqry;
			//echo $selqry;
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["product_name"]?></td>
            <td><?php echo $row["category_name"]?></td>
            <td><?php echo $row["grade_name"]?></td>
            <td><?php echo $row["seller_name"]?></td>
            <td><?php echo $row["seller_address"]?></td>
            <td><?php echo $row["place_name"]?></td>
            <td><?php echo $row["product_date"]?></td>
            <td><?php echo $row["product_locationaddress"]?></td>
            <td><?php echo $row["product_stock"]?></td>
           <td>
             <a href="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>">
                <img src="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>" width="75" height="75">
             </a>
              </td>
             
             
             
            <td>
            
            <a href="ProductList.php?acid=<?php echo $row["product_id"]?>">Accept</a>
           
            
            
            </td>
	</tr>
    <?php
			}
	?>
    </table>

<br/><br/>

