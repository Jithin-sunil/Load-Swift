<?php
	include("../Asset/Connection/Connection.php");
	
	
	if(isset($_GET["acid"]))
	{
		$delQry="update tbl_lorryowner set lorryowner_status='1' where lorryowner_id='".$_GET["acid"]."'";
		mysql_query($delQry);
		header("loaction:LorryOwnerList.php");
	}
	
	if(isset($_GET["rejid"]))
	{
		$delQry="update tbl_lorryowner set lorryowner_status='2' where lorryowner_id='".$_GET["rejid"]."'";
		mysql_query($delQry);
		header("loaction:LorryOwnerList.php");
	}
	
?>

<h3 align="center">NewLorryOwnerList</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>State</th>
        <th>District</th>
        <th>Place</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
        <th>photo</th>
        <th>Idproof</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_lorryowner l 
			inner join tbl_place p on l.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where lorryowner_status='0'";
			//echo $selqry;
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
             <td><?php echo $row["lorryowner_name"]?></td>
             <td><?php echo $row["lorryowner_gender"]?></td>
             <td><?php echo $row["lorryowner_address"]?></td>
             <td><?php echo $row["lorryowner_contact"]?></td>
             <td><?php echo $row["lorryowner_email"]?></td>
             <td><?php echo $row["lorryowner_password"]?></td>
             <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            <a href="LorryOwnerList.php?acid=<?php echo $row["lorryowner_id"]?>">Accept</a>
            /<a href="LorryOwnerList.php?rejid=<?php echo $row["lorryowner_id"]?>">Reject</a>
            
            
            </td>
	</tr>
    <?php
			}
	?>
    </table>

<br/><br/>

<h3 align="center">AcceptedList</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>State</th>
        <th>District</th>
        <th>Place</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
        <th>photo</th>
        <th>Idproof</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_lorryowner l 
			inner join tbl_place p on l.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where lorryowner_status='1'";
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
             <td><?php echo $row["lorryowner_name"]?></td>
             <td><?php echo $row["lorryowner_gender"]?></td>
             <td><?php echo $row["lorryowner_address"]?></td>
             <td><?php echo $row["lorryowner_contact"]?></td>
             <td><?php echo $row["lorryowner_email"]?></td>
             <td><?php echo $row["lorryowner_password"]?></td>
             <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            
            <a href="LorryOwnerList.php?rejid=<?php echo $row["lorryowner_id"]?>">Reject</a>
            
            
            </td>
	</tr>
    <?php
			}
	?>

</table>
<br/><br/>



<h3 align="center">RejectedList</h3>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>State</th>
        <th>District</th>
        <th>Place</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
        <th>photo</th>
        <th>Idproof</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_lorryowner l 
			inner join tbl_place p on l.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where lorryowner_status='2'";
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
             <td><?php echo $row["lorryowner_name"]?></td>
             <td><?php echo $row["lorryowner_gender"]?></td>
             <td><?php echo $row["lorryowner_address"]?></td>
             <td><?php echo $row["lorryowner_contact"]?></td>
             <td><?php echo $row["lorryowner_email"]?></td>
             <td><?php echo $row["lorryowner_password"]?></td>
             <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            <a href="LorryOwnerList.php?acid=<?php echo $row["lorryowner_id"]?>">Accept</a>
            </td>
	</tr>
    <?php
			}
	?>
   </table>