<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$photo=$_FILES["filephoto"]["name"];
		$temp=$_FILES["filephoto"]["tmp_name"];
		move_uploaded_file($temp,"../Asset/File/UserDocs/".$photo);
		
		$photoo=$_FILES["fileproof"]["name"];
		$temp=$_FILES["fileproof"]["tmp_name"];
		move_uploaded_file($temp,"../Asset/File/UserDocs/".$photoo);


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

      $inqry="insert into tbl_user(place_id,user_name,user_gender,user_address,user_contact,user_email,user_password,user_photo,user_idproof)values('".$_POST["selplace"]."','".$_POST["txtname"]."','".$_POST["rdngender"]."','".$_POST["txtaddress"]."','".$_POST["txtcontact"]."','".$_POST["txtemail"]."','".$_POST["txtpassword"]."','$photo','$photoo')";
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
		
		
		
	}
	
	
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::CustomerRegistration</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1" align="center">
    <tr>
      <td>State</td>
      <td><label for="selstate"></label>
        <select name="selstate" id="selstate" onchange="getDistrict(this.value)">
        <option value="----select----">----select----</option>
          <?php
							$selqry="select * from tbl_state";
							$data=mysql_query($selqry);
							while($row=mysql_fetch_array($data))
								{
				?>
        
        			<option value="<?php echo $row["state_id"]?>"><?php echo $row["state_name"]?></option>
                    
               <?php
								}
				?>
      </select></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="seldistrict"></label>
        <select name="seldistrict" id="seldistrict" onchange="getPlace(this.value)">
      
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="selplace"></label>
        <select name="selplace" id="selplace">
        
      </select></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" required placeholder="Enter Name"/></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="rdngender" id="rdngender" value="Female" />
      <label for="rdngender">Female
        <input type="radio" name="rdngender" id="rdngender" value=" Male" />
      Male</label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txtaddress"></label>
      <textarea name="txtaddress" id="txtaddress" cols="45" rows="5" required placeholder="Enter Address"></textarea></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact" required placeholder="Enter Contact"/></td>
    </tr>
    <tr>
      <td>Email ID</td>
      <td><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" required placeholder="Enter EmailID"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpassword"></label>
      <input type="password" name="txtpassword" id="txtpassword" required placeholder="Enter Password"/></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="filephoto"></label>
      <input type="file" name="filephoto" id="filephoto" required/></td>
    </tr>
    <tr>
      <td>Id Proof</td>
      <td><label for="fileproof"></label>
      <input type="file" name="fileproof" id="fileproof" required/></td>
    </tr>
    <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
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
