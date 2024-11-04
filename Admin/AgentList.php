<?php
	include("../Asset/Connection/Connection.php");
	
	
	if(isset($_GET["acid"]))
	{
		$delQry="update tbl_agent set agent_status='1' where agent_id='".$_GET["acid"]."'";
		mysql_query($delQry);
		header("loaction:AgentList.php");
	}
	
	if(isset($_GET["rejid"]))
	{
		$delQry="update tbl_agent set agent_status='2' where agent_id='".$_GET["rejid"]."'";
		mysql_query($delQry);
		header("loaction:AgentList.php");
	}
	
?>

<h3 align="center">NewAgentList</h3>
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
			$selqry="select * from tbl_agent a 
			inner join tbl_place p on a.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where agent_status='0'";
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
             <td><?php echo $row["agent_name"]?></td>
             <td><?php echo $row["agent_gender"]?></td>
             <td><?php echo $row["agent_address"]?></td>
             <td><?php echo $row["agent_contact"]?></td>
             <td><?php echo $row["agent_email"]?></td>
             <td><?php echo $row["agent_password"]?></td>
             <td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_idproof"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            <a href="AgentList.php?acid=<?php echo $row["agent_id"]?>">Accept</a>
            /<a href="AgentList.php?rejid=<?php echo $row["agent_id"]?>">Reject</a>
            
            
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
			$selqry="select * from tbl_agent a 
			inner join tbl_place p on a.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where agent_status='1'";
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
             <td><?php echo $row["agent_name"]?></td>
             <td><?php echo $row["agent_gender"]?></td>
             <td><?php echo $row["agent_address"]?></td>
             <td><?php echo $row["agent_contact"]?></td>
             <td><?php echo $row["agent_email"]?></td>
             <td><?php echo $row["agent_password"]?></td>
             <td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_idproof"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            
            <a href="AgentList.php?rejid=<?php echo $row["agent_id"]?>">Reject</a>
            
            
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
			$selqry="select * from tbl_agent a 
			inner join tbl_place p on a.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id where agent_status='2'";
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
             <td><?php echo $row["agent_name"]?></td>
             <td><?php echo $row["agent_gender"]?></td>
             <td><?php echo $row["agent_address"]?></td>
             <td><?php echo $row["agent_contact"]?></td>
             <td><?php echo $row["agent_email"]?></td>
             <td><?php echo $row["agent_password"]?></td>
             <td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>" width="75" height="75">
             </a>
              </td>
               <td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_idproof"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_idproof"]?>" width="75" height="75">
             </a>
              </td>
             
             
            <td>
            
            <a href="AgentList.php?acid=<?php echo $row["agent_id"]?>">Accept</a>
            
            
            </td>
	</tr>
    <?php
			}
	?>
   </table> 

