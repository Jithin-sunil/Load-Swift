<?php
include("../Asset/Connection/Connection.php");
if (isset($_POST["btnsubmit"])) {
  $photo = $_FILES["filephoto"]["name"];
  $temp = $_FILES["filephoto"]["tmp_name"];
  move_uploaded_file($temp, "../Asset/File/LorryownerDocs/" . $photo);

  $photoo = $_FILES["fileproof"]["name"];
  $temp = $_FILES["fileproof"]["tmp_name"];
  move_uploaded_file($temp, "../Asset/File/LorryownerDocs/" . $photoo);

  $selU = " select * from tbl_user where user_email='" . $_POST['txtemail'] . "'  ";
  $selS = " select * from tbl_seller where seller_email='" . $_POST['txtemail'] . "'  ";
  $selA = " select * from tbl_agent where agent_email='" . $_POST['txtemail'] . "'  ";
  $selL = " select * from tbl_lorrydriver where lorrydriver_email='" . $_POST['txtemail'] . "'  ";
  $selAd = " select * from tbl_admin where admin_email='" . $_POST['txtemail'] . "'  ";


  $resU = mysql_query($selU);
  $resS = mysql_query($selS);
  $resA = mysql_query($selA);
  $resL = mysql_query($selL);
  $resAd = mysql_query($selAd);

  if (mysql_num_rows($resU) > 0 && mysql_num_rows($resS) > 0 && mysql_num_rows($resA) > 0 && mysql_num_rows($resL) > 0 && mysql_num_rows($resAd)) {
    ?>
    <script>
      alert("Email Already Exist");
    </script>
    <?php
  } else {
    $inqry = "insert into tbl_lorryowner(place_id,lorryowner_name,lorryowner_gender,lorryowner_address,lorryowner_contact,lorryowner_email,lorryowner_password,lorryowner_photo,lorryowner_idproof)values('" . $_POST["selplace"] . "','" . $_POST["txtname"] . "','" . $_POST["rdngender"] . "','" . $_POST["txtaddress"] . "','" . $_POST["txtcontact"] . "','" . $_POST["txtemail"] . "','" . $_POST["txtpassword"] . "','$photo','$photoo')";
    if (mysql_query($inqry)) {
      ?>
      <script>
        alert("Registered SuccessFully");
        window.location = "Login.php";
      </script>
      <?php
    }
  }



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LoadSwift - Lorry Owner Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('../Asset/Templates/Main/img/image.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
    }
    .form-container {
      max-width: 900px;
      margin: 50px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
    .form-heading {
      text-align: center;
      font-weight: bold;
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <div class="form-heading">Lorry Owner Registration</div>
    <form action="" method="post" enctype="multipart/form-data">
      
      <!-- Row 1: State, District, Place -->
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="selstate" class="form-label">State</label>
          <select class="form-select" name="selstate" id="selstate" onchange="getDistrict(this.value)">
            <option value="">---- Select ----</option>
            <?php
              $selqry = "select * from tbl_state";
              $data = mysql_query($selqry);
              while ($row = mysql_fetch_array($data)) {
            ?>
            <option value="<?php echo $row["state_id"] ?>"><?php echo $row["state_name"] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-4">
          <label for="seldistrict" class="form-label">District</label>
          <select class="form-select" name="seldistrict" id="seldistrict" onchange="getPlace(this.value)">
          </select>
        </div>
        <div class="col-md-4">
          <label for="selplace" class="form-label">Place</label>
          <select class="form-select" name="selplace" id="selplace">
          </select>
        </div>
      </div>

      <!-- Row 2: Name, Gender -->
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="txtname" class="form-label">Name</label>
          <input type="text" class="form-control" name="txtname" id="txtname" required placeholder="Enter Name">
        </div>
        <div class="col-md-6">
          <label class="form-label">Gender</label>
          <div class="d-flex align-items-center">
            <div class="form-check me-3">
              <input type="radio" class="form-check-input" name="rdngender" id="genderFemale" value="Female">
              <label class="form-check-label" for="genderFemale">Female</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="rdngender" id="genderMale" value="Male">
              <label class="form-check-label" for="genderMale">Male</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 3: Address -->
      <div class="row mb-3">
        <div class="col">
          <label for="txtaddress" class="form-label">Address</label>
          <textarea class="form-control" name="txtaddress" id="txtaddress" rows="2" required placeholder="Enter Address"></textarea>
        </div>
      </div>

      <!-- Row 4: Contact, Email -->
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="txtcontact" class="form-label">Contact</label>
          <input type="text" class="form-control" name="txtcontact" id="txtcontact" required placeholder="Enter Contact">
        </div>
        <div class="col-md-6">
          <label for="txtemail" class="form-label">Email ID</label>
          <input type="email" class="form-control" name="txtemail" id="txtemail" required placeholder="Enter Email ID">
        </div>
      </div>

      <!-- Row 5: Password -->
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="txtpassword" class="form-label">Password</label>
          <input type="password" class="form-control" name="txtpassword" id="txtpassword" required placeholder="Enter Password">
        </div>
      </div>

      <!-- Row 6: Photo, ID Proof -->
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="filephoto" class="form-label">Photo</label>
          <input type="file" class="form-control" name="filephoto" id="filephoto" required>
        </div>
        <div class="col-md-6">
          <label for="fileproof" class="form-label">ID Proof</label>
          <input type="file" class="form-control" name="fileproof" id="fileproof" required>
        </div>
      </div>

      <!-- Row 7: Submit and Reset Buttons -->
      <div class="row">
        <div class="col text-center">
          <button type="submit" class="btn btn-primary me-2" name="btnsubmit">Submit</button>
          <button type="reset" class="btn btn-secondary" name="btncancel">Cancel</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



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
</script>