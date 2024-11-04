<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$inqry="insert into tbl_district(state_id,district_name)values('".$_POST["selstate"]."','".$_POST["txtdistrict"]."')";
		mysql_query($inqry);
	}
	
	
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_district where district_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("loaction:District.php");
	}
	
	?>
    
    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::District</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td width="63">State</td>
      <td width="121"><label for="selstate"></label>
      
      
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
        
      </select>
      
      
      </td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="txtdistrict"></label>
      <input type="text" name="txtdistrict" id="txtdistrict" required placeholder="Enter District"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="submit" name="txtcancel" id="txtcancel" value="Cancel" /></td>
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
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_district d inner join tbl_state s on d.state_id=s.state_id";
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
            <td><a href="District.php?delID=<?php echo $row["district_id"]?>">Delete</a></td>
	</tr>
    <?php
			}
	?>

