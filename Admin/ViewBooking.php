<?php
    include("../Asset/Connection/Connection.php");
    session_start();

    if (isset($_GET['cid'])) {
        $up = "UPDATE tbl_booking SET booking_status='3' WHERE booking_id=" . $_GET['cid'];
        if (mysqli_query($connection, $up)) {
            echo "<script>window.location='Orders.php';</script>";
        } else {
            echo "<script>alert('Error updating booking status.');</script>";
        }
    }
?>
<style>
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }
    .modal-content {
        background: white;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }
    .modal-footer {
        margin-top: 10px;
    }
</style>

<h3 align="center">Booking</h3>
<table border="1" align="center">
    <tr>
        <th>SI NO</th>
        <th>Product</th>
        <th>Price</th>
        <th>Seller</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Product Photo</th>
        <th>Total Amount</th>
        <th>Action</th>
    </tr>

    <?php
         $selqry = "SELECT * FROM tbl_booking se 
                    INNER JOIN tbl_cart c ON se.booking_id = c.booking_id
                    INNER JOIN tbl_product p ON c.product_id = p.product_id 
                    INNER JOIN tbl_seller d ON p.seller_id = d.seller_id 
                    WHERE booking_status > 0 AND cart_status > 0 AND se.booking_id = " . $_GET['bid'];
        $data = mysql_query( $selqry);
        $i = 0;

        while ($row = mysql_fetch_array($data)) {
            $_SESSION['bid'] = $row['booking_id'];
            $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["product_name"]; ?></td>
        <td><?php echo $row["product_price"]; ?></td>
        <td><?php echo $row["seller_name"]; ?></td>
        <td><?php echo $row["seller_contact"]; ?></td>
        <td><?php echo $row["seller_email"]; ?></td>
        <td>
            <a href="../Asset/File/ProductDocs/<?php echo $row["product_image"]; ?>">
                <img src="../Asset/File/ProductDocs/<?php echo $row["product_image"]; ?>" width="75" height="75">
            </a>
        </td>
        <td><?php echo $row['total_amount']; ?></td>
        <td>
            <?php
                if ($row['booking_status'] == 1) {
                    echo "Waiting For User Response.";
                } elseif ($row['booking_status'] == 2) {
                    echo "Payment Completed";

                } elseif ($row['booking_status'] == 3) {
                    echo "Order Has Been Cancelled";
                } elseif ($row['booking_status'] == 4) {
                    
                    if (!empty($row['agent_id'])) {
                        $agentQry = "SELECT * FROM tbl_agent WHERE agent_id = " . $row['agent_id'];
                        $agentData = mysql_query( $agentQry);
                        if ($agent = mysql_fetch_array($agentData)) {
                            echo "Order Has Been Assigned to '{$agent['agent_name']}'. For more details, contact '{$agent['agent_contact']}'";
                        }
                    }
                    elseif (!empty($row['lorryowner_id'])) {
                        $lorryQry = "SELECT * FROM tbl_lorryowner WHERE lorryowner_id = " . $row['lorryowner_id'];
                        $lorryData = mysql_query($lorryQry);
                        if ($lorryOwner = mysql_fetch_array($lorryData)) {
                            echo "Order Has Been Assigned to '{$lorryOwner['lorryowner_name']}'. For more details, contact '{$lorryOwner['lorryowner_contact']}'";
                        }
                    }
                } elseif ($row['booking_status'] == 5) {
                    echo 'Order On The Way';
                } elseif ($row['booking_status'] == 6) {
                    echo 'Delivered';
                } elseif ($row['booking_status'] == 7) {
                    echo "Order Completed";
                } else {
                    echo "Unknown Status";
                }
            ?>
        </td>
    </tr>
    <?php } ?>
</table>

