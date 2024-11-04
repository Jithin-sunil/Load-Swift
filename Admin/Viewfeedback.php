<?php
include("../Asset/Connection/Connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Sl.No</th>
            <th>Date</th>
            <th>Name</th>
            <th>Feedback</th>
        </tr>
    <?php
      $selQry = "
          SELECT f.feedback_date, f.feedback_content,
          COALESCE(u.user_name, s.shop_name, a.agent_name, l.lorryowner_name) AS name
          FROM tbl_feedback f
          LEFT JOIN tbl_user u ON f.feedback_type = 'user' AND f.feedback_source_id = u.user_id
          LEFT JOIN tbl_shop s ON f.feedback_type = 'shop' AND f.feedback_source_id = s.shop_id
          LEFT JOIN tbl_agent a ON f.feedback_type = 'agent' AND f.feedback_source_id = a.agent_id
          LEFT JOIN tbl_lorryowner l ON f.feedback_type = 'lorryowner' AND f.feedback_source_id = l.owner_id
      ";
      
      $data = mysql_query($selQry);
      $i = 0;
      while ($row = mysql_fetch_array($data)) {
          $i++;
    ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['feedback_date']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['feedback_content']; ?></td>
        </tr>
    <?php
      }
    ?>
    </table>
</body>
</html>
