<?php
//Start session
session_start();
//Check whether the session variable SESS_mEmBER_ID is present or not
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
global $session_id;
$session_id=$_SESSION['id'];

$user_query = mysqli_query($conn,"select * from members where id = '$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
$admin_username = $user_row['mobile'];
?>