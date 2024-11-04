<?php
	include("../Asset/Connection/Connection.php");
	if(isset($_POST["btnsubmit"]))
	{
		$inqry="insert into tbl_grade(category_id,grade_name)values('".$_POST["selcategory"]."','".$_POST["txtgrade"]."')";
		mysql_query($inqry);
		//echo $inqry;
	}
	
	
	if(isset($_GET["delID"]))
	{
		$delQry="delete from tbl_grade where grade_id='".$_GET["delID"]."'";
		mysql_query($delQry);
		header("loaction:Grade.php");
	}
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoadSwift::Grade</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="217" border="1" align="center">
    <tr>
      <td width="56">Category</td>
      <td width="145"><label for="selcategory"></label>
        <select name="selcategory" id="selcategory">
        <option value="----select----">----select----</option>
        	 <?php
							$selqry="select * from tbl_category";
							$data=mysql_query($selqry);
							while($row=mysql_fetch_array($data))
								{
				?>
        
        			<option value="<?php echo $row["category_id"]?>"><?php echo $row["category_name"]?></option>
                    
               <?php
								}
				?>
        
      </select></td>
    </tr>
    <tr>
      <td>Grade</td>
      <td><label for="txtgrade"></label>
      <input type="text" name="txtgrade" id="txtgrade" required placeholder="Enter Grade"/></td>
    </tr>
    <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<br/>
<br/>
<table border="1" align="center">
	<tr>
		<th>SI NO</th>
		<th>Category Name</th>
        <th>Grade</th>
		<th>Action</th>
	</tr>
    <?php
			$selqry="select * from tbl_grade g inner join tbl_category c on g.category_id=c.category_id";
			$data=mysql_query($selqry);
			$i=0;
			while($row=mysql_fetch_array($data))
			{
				$i++;
	?>
    <tr>
    		<td><?php echo $i ?></td>
            <td><?php echo $row["category_name"]?></td>
             <td><?php echo $row["grade_name"]?></td>
            <td><a href="Grade.php?delID=<?php echo $row["grade_id"]?>">Delete</a></td>
	</tr>
    <?php
			}
	?>
