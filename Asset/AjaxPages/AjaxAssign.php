<?php       
include("../Connection/Connection.php");
session_start();

if(isset($_GET['aid']))
{
    echo $up= " update tbl_booking set agent_id='".$_GET['aid']."',booking_status='4' where booking_id=".$_SESSION['bid'];
    if(mysql_query($up))
    {
        echo "Assigned";
    }
}

if(isset($_GET['lid']))
{
    echo $up= " update tbl_booking set lorryowner_id='".$_GET['lid']."' ,booking_status='4' where booking_id=".$_SESSION['bid'];
    if(mysql_query($up))
    {
        echo "Assigned";
    }
}
?>
