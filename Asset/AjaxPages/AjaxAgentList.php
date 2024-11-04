 <?php
	include("../Connection/Connection.php");

	
?>	
<table border="1" align="center">
	<tr>
        <th>Photo</th>
		<th>Name</th>
        <th>Contact</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_agent where place_id = '".$_GET["place_id"]."'"  ;
			$result = mysql_query($selqry);
			$i=0;
			while($row = mysql_fetch_array($result))
			{
				$i++;
	?>
    <tr>
    		<td>
             <a href="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>">
                <img src="../Asset/File/AgentDocs/<?php echo $row["agent_photo"]?>" width="75" height="75">
             </a></td>
            <td><?php echo $row["agent_name"]?></td>
             <td><?php echo $row["agent_contact"]?></td>
             <td><a href="SearchAgent.php?aID=<?php echo $row["agent_id"]?>">ViewMore</a></td>
			 <td><a href="#" onclick="Assign('<?php echo $row['agent_id']?>')">Assign</a></td>
             
            
            
            </td> 
	</tr>
    <?php
			}
	?>
	</table>