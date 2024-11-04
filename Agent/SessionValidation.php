<?php
session_start();
if($_SESSION['agentid']==""){
    header('location:../Guest/Login.php');
}
?>