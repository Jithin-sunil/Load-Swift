<?php
include('../connection/connection.php');

$cat = $_GET['category'];
if (!empty($type)) {
    
    $selQry = "SELECT * FROM tbl_grade WHERE category_id IN ($cat)";
    $result = $con->query($selQry);

    while ($data = $result->fetch_assoc()) {
        echo '<div class="form-check">
                <input class="form-check-input" type="checkbox" value="' . $data['grade_id'] . '" id="grade' . $data['grade_id'] . '" name="grade" onchange="getSearch()">
                <label class="form-check-label" for="grade' . $data['grade_id'] . '">' . $data['grade_name'] . '</label>
              </div>';
    }
} else {
    echo '<p>No categories Available</p>';
}

?>