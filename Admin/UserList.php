<?php
	include("../Asset/Connection/Connection.php");
	
	
	if(isset($_GET["acid"]))
	{
		$delQry="update tbl_user set user_status='1' where user_id='".$_GET["acid"]."'";
		mysql_query($delQry);
		header("loaction:UserList.php");
	}
	
	if(isset($_GET["rejid"]))
	{
		$delQry="update tbl_user set user_status='2' where user_id='".$_GET["rejid"]."'";
		mysql_query($delQry);
		header("loaction:UserList.php");
	}
	
?>

<h3 align="center">NewUserList</h3>
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
			$selqry="select * from tbl_user u 
			inner join tbl_place p on u.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where user_status='0'";
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
             <td><?php echo $row["user_name"]?></td>
             <td><?php echo $row["user_gender"]?></td>
             <td><?php echo $row["user_address"]?></td>
             <td><?php echo $row["user_contact"]?></td>
             <td><?php echo $row["user_email"]?></td>
             <td><?php echo $row["user_password"]?></td>
             <td>
             <a href="../Asset/File/UserDocs/<?php echo $row["user_photo"]?>">
                <img src="../Asset/File/UserDocs/<?php echo $row["user_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/UserDocs/<?php echo $row["user_idproof"]?>">
                <img src="../Asset/File/UserDocs/<?php echo $row["user_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            <a href="UserList.php?acid=<?php echo $row["user_id"]?>">Accept</a>
            /<a href="UserList.php?rejid=<?php echo $row["user_id"]?>">Reject</a>
            
            
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
			$selqry="select * from tbl_user u 
			inner join tbl_place p on u.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where user_status='1'";
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
             <td><?php echo $row["user_name"]?></td>
             <td><?php echo $row["user_gender"]?></td>
             <td><?php echo $row["user_address"]?></td>
             <td><?php echo $row["user_contact"]?></td>
             <td><?php echo $row["user_email"]?></td>
             <td><?php echo $row["user_password"]?></td>
             <td>
             <a href="../Asset/File/UserDocs/<?php echo $row["user_photo"]?>">
                <img src="../Asset/File/UserDocs/<?php echo $row["user_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/UserDocs/<?php echo $row["user_idproof"]?>">
                <img src="../Asset/File/UserDocs/<?php echo $row["user_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
          
            <a href="UserList.php?rejid=<?php echo $row["user_id"]?>">Reject</a>
            
            
            </td>
	</tr>
    <?php
			}
	?>

</table>
<br/>
<br/>

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
			$selqry="select * from tbl_user u 
			inner join tbl_place p on u.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where user_status='2'";
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
             <td><?php echo $row["user_name"]?></td>
             <td><?php echo $row["user_gender"]?></td>
             <td><?php echo $row["user_address"]?></td>
             <td><?php echo $row["user_contact"]?></td>
             <td><?php echo $row["user_email"]?></td>
             <td><?php echo $row["user_password"]?></td>
             <td>
             <a href="../Asset/File/UserDocs/<?php echo $row["user_photo"]?>">
                <img src="../Asset/File/UserDocs/<?php echo $row["user_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/UserDocs/<?php echo $row["user_idproof"]?>">
                <img src="../Asset/File/UserDocs/<?php echo $row["user_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            <a href="UserList.php?acid=<?php echo $row["user_id"]?>">Accept</a>
           
            
            
            </td>
	</tr>
    <?php
			}
	?>
   </table>