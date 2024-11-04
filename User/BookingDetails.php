<?php
	include("../Asset/Connection/Connection.php");
	session_start();
	if(isset($_POST["btnsubmit"]))
	{
		
		echo $inqry="update  tbl_booking set place_id='".$_POST['selplace']."',booking_address='".$_POST['txtaddress']."' ,booking_km='".$_POST['txtkm']."' ,booking_todate='".$_POST['todate']."' where booking_id=".$_SESSION['bid'];
		if(mysql_query($inqry))
    {
      ?>
      <script>
        alert("Booking Details Added.");
        window.location="MyBooking.php";
      </script>
      <?php
    }

		//echo $inqry;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" enctype="multipart/form-data">
            
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
                        <td>Address</td>
                        <td><input type="text" name="txtaddress" id="txtaddress"></td>
                    </tr>
                    <tr>
                        <td>KM</td>
                        <td><input type="text" name="txtkm" id="txtkm"></td>
                    </tr>
                   
                    <tr>
                        <td>To Date</td>
                        <td><input type="date" name="todate" id="todate"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit">
                        </td>
                    </tr>
    </table>
    </form>

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
</body>
</html>
