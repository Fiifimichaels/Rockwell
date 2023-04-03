<?php
include('lib/dbcon.php'); 
dbcon(); 
include('session.php');

session_destroy();
header('location: ../'); 
?>