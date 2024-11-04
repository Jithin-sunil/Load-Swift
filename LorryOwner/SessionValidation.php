<?php
session_start();
if($_SESSION['lorryownerid']==""){
    header('location:../Guest/Login.php');
}
?>