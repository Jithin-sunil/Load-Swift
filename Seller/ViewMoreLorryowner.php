<?php
	include("../Asset/Connection/Connection.php");
	session_start();
	?>
<table border="1" align="center">
	
    <?php
			$selqry="select * from tbl_lorryowner a 
			inner join tbl_place p on a.place_id=p.place_id 
			inner join tbl_district d on p.district_id=d.district_id 
			inner join tbl_state s on d.state_id=s.state_id  where lorryowner_id='".$_SESSION["aID"]."'";
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		
            <th>State</th>
            <td><?php echo $row["state_name"]?></td>
            </tr><tr>
             <th>District</th>
        	<td><?php echo $row["district_name"]?></td>
            </tr><tr>
             <th>Place</th>
             <td><?php echo $row["place_name"]?></td>
             </tr><tr>
              <th>Name</th>
             <td><?php echo $row["lorryowner_name"]?></td>
             </tr><tr>
              <th>Gender</th>
             <td><?php echo $row["lorryowner_gender"]?></td>
             </tr><tr>
              <th>Address</th>
             <td><?php echo $row["lorryowner_address"]?></td>
             </tr><tr>
              <th>Contact</th>
             <td><?php echo $row["lorryowner_contact"]?></td>
             </tr><tr>
              <th>Email</th>
             <td><?php echo $row["lorryowner_email"]?></td>
             </tr><tr>
              <th>Password</th>
             <td><?php echo $row["lorryowner_password"]?></td>
             </tr><tr>
             <th>photo</th>
             <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_photo"]?>" width="75" height="75">
             </a>
              </td></tr><tr>
              <th>Idproof</th>
               <td>
             <a href="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>">
                <img src="../Asset/File/LorryownerDocs/<?php echo $row["lorryowner_idproof"]?>" width="75" height="75">
             </a>
              </td>
              </tr>
              
             <?php
			}
	?>
             