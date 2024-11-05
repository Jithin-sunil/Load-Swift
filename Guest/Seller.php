<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$photo=$_FILES["filephoto"]["name"];
		$temp=$_FILES["filephoto"]["tmp_name"];
		move_uploaded_file($temp,"../Asset/File/SellerDocs/".$photo);
		
		$photoo=$_FILES["fileproof"]["name"];
		$temp=$_FILES["fileproof"]["tmp_name"];
		move_uploaded_file($temp,"../Asset/File/SellerDocs/".$photoo);

    $selU=" select * from tbl_user where user_email='".$_POST['txtemail']."'  ";
    $selS=" select * from tbl_seller where seller_email='".$_POST['txtemail']."'  ";
    $selA=" select * from tbl_agent where agent_email='".$_POST['txtemail']."'  ";
    $selL=" select * from tbl_lorrydriver where lorrydriver_email='".$_POST['txtemail']."'  ";
    $selAd=" select * from tbl_admin where admin_email='".$_POST['txtemail']."'  ";


    $resU=mysql_query($selU);
    $resS=mysql_query($selS);
    $resA=mysql_query($selA);
    $resL=mysql_query($selL);
    $resAd=mysql_query($selAd);

    if(mysql_num_rows($resU)>0 && mysql_num_rows($resS)>0 && mysql_num_rows($resA)>0 && mysql_num_rows($resL)>0 && mysql_num_rows($resAd))
    {
      ?>
      <script>
        alert("Email Already Exist");
      </script>
      <?php
    }
    else
    {
      $inqry="insert into tbl_seller(place_id,seller_name,seller_gender,seller_address,seller_contact,seller_email,seller_password,seller_photo,seller_idproof,amount_km)values('".$_POST["selplace"]."','".$_POST["txtname"]."','".$_POST["rdngender"]."','".$_POST["txtaddress"]."','".$_POST["txtcontact"]."','".$_POST["txtemail"]."','".$_POST["txtpassword"]."','$photo','$photoo','".$_POST['txtamt']."')";
      if(mysql_query($inqry))
      {
        ?>
        <script>
          alert("Registered SuccessFully");
          window.location="Login.php";
        </script>
        <?php
      }
      
    }
	
		//echo $inqry;
	}
	
	
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LoadSwift::SellerRegistration</title>
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
      max-width: 1000px;
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
    .form-title {
      font-size: 24px;
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="container form-container">
    <div class="form-title">Lorry Owner Registration</div>
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3 row">
            <label for="selstate" class="col-sm-4 col-form-label">State</label>
            <div class="col-sm-8">
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
          </div>
          <div class="mb-3 row">
            <label for="seldistrict" class="col-sm-4 col-form-label">District</label>
            <div class="col-sm-8">
              <select class="form-select" name="seldistrict" id="seldistrict" onchange="getPlace(this.value)"></select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="selplace" class="col-sm-4 col-form-label">Place</label>
            <div class="col-sm-8">
              <select class="form-select" name="selplace" id="selplace"></select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtname" class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="txtname" id="txtname" required placeholder="Enter Name">
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-4 col-form-label">Gender</label>
            <div class="col-sm-8 d-flex align-items-center">
              <div class="form-check me-3">
                <input class="form-check-input" type="radio" name="rdngender" id="genderFemale" value="Female">
                <label class="form-check-label" for="genderFemale">Female</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdngender" id="genderMale" value="Male">
                <label class="form-check-label" for="genderMale">Male</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3 row">
            <label for="txtaddress" class="col-sm-4 col-form-label">Address</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="txtaddress" id="txtaddress" rows="2" required placeholder="Enter Address"></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtamt" class="col-sm-4 col-form-label">Amount Per KM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="txtamt" id="txtamt" required placeholder="Enter The Amount">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtcontact" class="col-sm-4 col-form-label">Contact</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="txtcontact" id="txtcontact" required placeholder="Enter Contact">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtemail" class="col-sm-4 col-form-label">Email ID</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="txtemail" id="txtemail" required placeholder="Enter Email ID">
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
          <div class="mb-3 row">
            <label for="txtpassword" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="txtpassword" id="txtpassword" required placeholder="Enter Password">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="filephoto" class="col-sm-4 col-form-label">Photo</label>
            <div class="col-sm-8">
              <input type="file" class="form-control" name="filephoto" id="filephoto" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="fileproof" class="col-sm-4 col-form-label">ID Proof</label>
            <div class="col-sm-8">
              <input type="file" class="form-control" name="fileproof" id="fileproof" required>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary me-2" name="btnsubmit">Submit</button>
        <button type="reset" class="btn btn-secondary" name="btncancel">Cancel</button>
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