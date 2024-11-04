<?php
	include("../Asset/Connection/Connection.php");
	session_start();
	include("Head.php");
	
	if(isset($_GET['cid']))
	{
		$up="update tbl_booking set booking_status='3' where booking_id=".$_GET['cid'];
		if(mysql_query($up))
		{
			?>
			<script>
				window.location="MyBooking.php";
			</script>
			<?php
		}
	}
	
?>
<h3 align="center">Booking</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>Product</th>
		<th>Price</th>
		<th>Seller</th>
		<th>Contact</th>
		<th>Product photo</th>
		<th>Total Amount</th>
		<th>Action</th>
	</tr>
	<?php
			$selqry="select * from tbl_booking se  inner join tbl_cart c on se.booking_id=c.booking_id
			inner join tbl_product p on c.product_id=p.product_id 
			inner join tbl_seller d on p.seller_id=d.seller_id  where booking_status>0 and cart_status>0 and se.user_id=".$_SESSION['userid'];
			$data=mysql_query($selqry);
			$i=0;
			while ($row = mysql_fetch_array($data)) {
				$booking_km = $row["booking_km"];
				$product_price = $row["product_price"];
				$amount_km = $row["amount_km"];
				
				
				$total_amount = ($booking_km * $amount_km) + $product_price;
		
				
				$updateQry = "UPDATE tbl_booking SET total_amount = '$total_amount' WHERE booking_id = '".$row["booking_id"]."'";
				mysql_query($updateQry);
				
				$i++;
	?>
	<tr>
		<td>
			<?php echo $i ?>
		</td>
		<td>
			<?php echo $row["product_name"]?>
		</td>
		<td>
			<?php echo $row["product_price"]?>
		</td>
		<td>
			<?php echo $row["seller_name"]?>
		</td>
		<td>
			<?php echo $row["seller_contact"]?>
		</td>
		<td>
			<a href="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>">
				<img src="../Asset/File/ProductDocs/<?php echo $row["product_image"]?>" width="75" height="75">
			</a>
			
		</td>
			<td><?php echo $total_amount; ?></td>
			<td>
				<?php  if($row['booking_status']==1)
			{
				?>
				<a href="Payment.php?bid=<?php echo $row['booking_id']?>">Payment</a>
				<a href="MyBooking.php?cid=<?php echo $row['booking_id']?>">Cancel</a>
				<?php
			} 
			else if($row['booking_status']==2)
	
			{
				echo "Payment Completed";

			}
			else if($row['booking_status']==3)
	
			{
				echo "Order Has Been Cancelled";

			}
			else if($row['booking_status']==4)
	
			{
				if (!empty($row['agent_id'])) {
					$agentQry = "SELECT * FROM tbl_agent WHERE agent_id = " . $row['agent_id'];
					$agentData = mysql_query( $agentQry);
					if ($agent = mysql_fetch_array($agentData)) {
						echo "Order Has Been Assigned to '{$agent['agent_name']}'. For more details, contact '{$agent['agent_contact']}'";
					}
				}
				

			}
			
               else if($row['booking_status']==5)
                {
                    ?>
                    Order On The Way
                    <?php
                }
                else if($row['booking_status']==6)
                {
                    ?>
                    Delivered
                    <?php
                }
                else if($row['booking_status']==7)
                {
                    echo "Order Completed";
                }
			?>
			
			
		</td>

				




	</tr>
	<?php
			}
	?>
</table>
<br /> <br />

<?php	
include("Foot.php");
?>