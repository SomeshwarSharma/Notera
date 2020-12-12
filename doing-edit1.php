<?php
session_start();
include 'includes/dbhandler.php';
$p_id = $_SESSION['pid'];
$t_no = $_GET['id'];
echo $p_id;
$sql = " UPDATE task SET t_status = 'to-do'  where t_no=$t_no ";

mysqli_query($conn, $sql);


mysqli_close($conn);


header('location:dashboard2.php?id='.$p_id);

?>