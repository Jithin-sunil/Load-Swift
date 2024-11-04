 <?php
	include("../Connection/Connection.php");
?>
 
  <select name="selgrade" id="selgrade" onchange="getGrade(this.value)">
   <option value="----select----">----select----</option>      
     
 <?php
							$selqry="select * from tbl_grade where category_id='".$_GET["did"]."'";
							$data=mysql_query($selqry);
							while($row=mysql_fetch_array($data))
								{
				?>
        
        			<option value="<?php echo $row["grade_id"]?>"><?php echo $row["grade_name"]?></option>
                    
               <?php
								}
				?>
				
                 </select>