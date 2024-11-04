<?php
session_start();
include("../Asset/Connection/Connection.php");

// Check if user_id exists in session
if (!isset($_SESSION['userid'])) {
    die('User not logged in.'); // Handle case where user is not logged in
}

$user_id = $_SESSION['userid'];

// Prepare the SQL statement to fetch bookings along with lorry owner, agent, place, and product details from the cart
$sql = "SELECT b.booking_id, b.booking_date, b.user_id, b.booking_status, 
               b.booking_amount, b.total_amount, b.place_id, b.booking_km, 
               b.booking_todate, b.agent_id, b.lorryowner_id, 
               b.booking_address, 
               lo.lorryowner_name, lo.lorryowner_contact, 
               a.agent_name, a.agent_contact, 
               p.place_name,
               c.product_id, c.cart_quantity, c.cart_id, pr.product_name
        FROM tbl_booking AS b
        LEFT JOIN tbl_lorryowner AS lo ON b.lorryowner_id = lo.lorryowner_id
        LEFT JOIN tbl_agent AS a ON b.agent_id = a.agent_id
        LEFT JOIN tbl_place AS p ON b.place_id = p.place_id
        LEFT JOIN tbl_cart AS c ON b.booking_id = c.booking_id
        LEFT JOIN tbl_product AS pr ON c.product_id = pr.product_id
        WHERE b.user_id = '$user_id'"; // Use user_id directly (ensure proper validation in production)

$result = mysql_query($sql);

// Check for errors in the query
if (!$result) {
    die("Query failed: " . mysql_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Orders</h1>
    <div class="orders-container">
        <?php if (mysql_num_rows($result) > 0): ?>
            <?php while ($booking = mysql_fetch_assoc($result)): ?>
                <div class="order-card">
                    <p><strong>Booking Date:</strong> <?php echo htmlspecialchars($booking['booking_date']); ?></p>
                    <p><strong>Booking Amount:</strong> $<?php echo htmlspecialchars(number_format($booking['booking_amount'], 2)); ?></p>
                    <p><strong>Total Amount:</strong> $<?php echo htmlspecialchars(number_format($booking['total_amount'], 2)); ?></p>
                    <p><strong>Place Name:</strong> <?php echo htmlspecialchars($booking['place_name']); ?></p>
                    <p><strong>Distance (km):</strong> <?php echo htmlspecialchars($booking['booking_km']); ?> km</p>
                    <p><strong>To Date:</strong> <?php echo htmlspecialchars($booking['booking_todate']); ?></p>

                    <p><strong>Booking Status:</strong>
                        <?php 
                        switch ($booking['booking_status']) {
                            case 1:
                                echo "Waiting For Seller Response.";
                                break;
                            case 2:
                                echo "Payment Completed ";
                                echo '<a href="#" onclick="openModal()">Assign</a>';
                                break;
                            case 3:
                                echo "Order Has Been Cancelled";
                                break;
                            case 4:
                                if (!empty($booking['agent_id'])) {
                                    echo "Order Has Been Assigned to Agent";
                                } else {
                                    echo "Order Has Been Assigned";
                                }
                                break;
                            case 5:
                                echo 'Order On The Way';
                                break;
                            case 6:
                                echo 'Delivered';
                                // Show the button to go to the complaint page
                                echo '<br><a href="complaint.php?bid=' . htmlspecialchars($booking['booking_id']) . '&cart_id=' . htmlspecialchars($booking['cart_id']) . '" class="button">File a Complaint</a>';
                                break;
                            case 7:
                                echo "Order Completed";
                                break;
                            default:
                                echo "Unknown Status";
                        }
                        ?>
                    </p>

                    <?php if ($booking['agent_id'] != 0): ?>
                        <p><strong>Agent Name:</strong> <?php echo htmlspecialchars($booking['agent_name']); ?></p>
                        <p><strong>Agent Contact:</strong> <?php echo htmlspecialchars($booking['agent_contact']); ?></p>
                    <?php endif; ?>

                    <?php if ($booking['lorryowner_id'] != 0): ?>
                        <p><strong>Lorry Owner Name:</strong> <?php echo htmlspecialchars($booking['lorryowner_name']); ?></p>
                        <p><strong>Lorry Owner Contact:</strong> <?php echo htmlspecialchars($booking['lorryowner_contact']); ?></p>
                    <?php endif; ?>

                    <p><strong>Booking Address:</strong> <?php echo htmlspecialchars($booking['booking_address']); ?></p>
                    
                    <?php if (!empty($booking['product_id'])): ?>
                        <p><strong>Product Name:</strong> <?php echo htmlspecialchars($booking['product_name']); ?></p>
                        <p><strong>Quantity:</strong> <?php echo htmlspecialchars($booking['cart_quantity']); ?></p>
                    <?php endif; ?>
                </div>
                <hr>
            <?php endwhile; ?>
        <?php else: ?>
            <p>You have no bookings yet.</p>
        <?php endif; ?>
    </div>

    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</body>
</html>
