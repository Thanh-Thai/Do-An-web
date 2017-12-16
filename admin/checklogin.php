<?php
session_start();
if(!isset($_SESSION["hoten"]))
{
    header("location:login.php");?><script>window.alert("Must Login");</script> 
    <?php
    die();
}
include "../dbcon.php";