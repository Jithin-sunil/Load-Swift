<?php
include("../Asset/Connection/Connection.php");
session_start();

// Check if the agent ID is set in the session
if (isset($_SESSION['agentid'])) {
    $agentId = $_SESSION['agentid'];

    // Check if 'bid' and 'sts' are set in the URL for status update
    if (isset($_GET['bid']) && isset($_GET['sts'])) {
        $bookingId = intval($_GET['bid']); // Get booking ID and sanitize it
        $status = intval($_GET['sts']); // Get status and sanitize it

        // Prepare the SQL query to update booking status
        $updateQuery = "UPDATE tbl_booking SET booking_status = $status WHERE booking_id = $bookingId AND agent_id = $agentId";

        // Execute the update query
        if (mysql_query($updateQuery)) {
            echo "<script>alert('Booking status updated successfully.');</script>";
        } else {
            echo "<script>alert('Error updating booking status: " . mysql_error() . "');</script>";
        }
    }

    // Prepare the SQL query to fetch all assigned bookings for the agent
    $selqry = "SELECT se.*, 
                       p.product_name, p.product_image, p.product_price,
                       s.seller_name, 
                       s.seller_contact, 
                       d.user_name, 
                       d.user_contact, 
                       pe.place_name, 
                       de.district_name, 
                       st.state_name 
                FROM tbl_booking se 
                INNER JOIN tbl_cart c ON se.booking_id = c.booking_id 
                INNER JOIN tbl_product p ON c.product_id = p.product_id 
                INNER JOIN tbl_seller s ON s.seller_id = p.seller_id 
                INNER JOIN tbl_user d ON se.user_id = d.user_id 
                INNER JOIN tbl_place pe ON se.place_id = pe.place_id 
                INNER JOIN tbl_district de ON pe.district_id = de.district_id 
                INNER JOIN tbl_state st ON de.state_id = st.state_id 
                WHERE se.agent_id = $agentId"; // Fetch all bookings assigned to the agent

    $data = mysql_query($selqry);

    // Check for errors in the query
    if (!$data) {
        die("Query failed: " . mysql_error());
    }

    // Display the results
    echo '<h3 align="center">Assigned Orders</h3>';
    echo '<table border="1" align="center">';
    echo '<tr>
            <th>SI NO</th>
            <th>Product</th>
            <th>State</th>
            <th>District</th>
            <th>Place</th>
            <th>Address</th>
            <th>Price</th>
            <th>User Name</th>
            <th>User Contact</th>
            <th>Seller Name</th>
            <th>Seller Contact</th>
            <th>Product Photo</th>
            <th>Action</th>
          </tr>';
    
    $i = 0; // Initialize serial number counter
    while ($row = mysql_fetch_array($data)) {
        $i++;
        echo '<tr>
                <td>' . $i . '</td>
                <td>' . htmlspecialchars($row["product_name"]) . '</td>
                <td>' . htmlspecialchars($row["state_name"]) . '</td>
                <td>' . htmlspecialchars($row["district_name"]) . '</td>
                <td>' . htmlspecialchars($row["place_name"]) . '</td>
                <td>' . htmlspecialchars($row["booking_address"]) . '</td>
                <td>' . htmlspecialchars($row["product_price"]) . '</td>
                <td>' . htmlspecialchars($row["user_name"]) . '</td>
                <td>' . htmlspecialchars($row["user_contact"]) . '</td>
                <td>' . htmlspecialchars($row["seller_name"]) . '</td>
                <td>' . htmlspecialchars($row["seller_contact"]) . '</td>
                <td>
                    <a href="../Asset/File/ProductDocs/' . htmlspecialchars($row["product_image"]) . '">
                        <img src="../Asset/File/ProductDocs/' . htmlspecialchars($row["product_image"]) . '" width="75" height="75">
                    </a>
                </td>
                <td>
                    <a href="ViewOrders.php?bid=' . $row['booking_id'] . '&sts=5">Mark On The Way</a> |
                    <a href="ViewOrders.php?bid=' . $row['booking_id'] . '&sts=6">Mark Delivered</a>
                </td>
              </tr>';
    }
    echo '</table>';
} else {
    echo 'Agent ID not set in the session.';
}
?>
