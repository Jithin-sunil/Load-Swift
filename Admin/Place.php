<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$inqry="insert into tbl_place(district_id,place_name,place_pincode)values('".$_POST["seldistrict"]."','".$_POST["txtplace"]."','".$_POST["txtpincode"]."')";
		mysql_query($inqry);
	}
	
	
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_place where place_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("loaction:Place.php");
	}
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::Place</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>State</td>
      <td><label for="selstate"></label>
        <select name="selstate" id="selstate">
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
        <select name="seldistrict" id="seldistrict">
         <option value="----select----">----select----</option>
         <?php
							$selqry="select * from tbl_district";
							$data=mysql_query($selqry);
							while($row=mysql_fetch_array($data))
								{
				?>
        
        			<option value="<?php echo $row["district_id"]?>"><?php echo $row["district_name"]?></option>
                    
               <?php
								}
				?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txtplace"></label>
      <input type="text" name="txtplace" id="txtplace" required placeholder="Enter Place"/></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="txtpincode"></label>
      <input type="text" name="txtpincode" id="txtpincode" required placeholder="Enter Pincode"/></td>
    </tr>
    <tr>
     
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<br/><br/>

<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>State</th>
        <th>District</th>
        <th>Place</th>
        <th>Pincode</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id inner join tbl_state s on s.state_id=d.state_id";
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["state_name"]?></td>
             <td><?php echo $row["district_name"]?></td>
             <td><?php echo $row["place_name"]?></td>
             <td><?php echo $row["place_pincode"]?></td>
            <td><a href="Place.php?delID=<?php echo $row["place_id"]?>">Delete</a></td>
	</tr>
    <?php
			}
	?>


