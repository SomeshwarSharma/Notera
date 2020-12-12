<?php
session_start();

include 'includes/dbhandler.php';

$t_no = $_GET['id'];
$p_id = $_SESSION['pid'];


$sql = " UPDATE task SET t_status = 'doing'  where t_no=$t_no ";

mysqli_query($conn, $sql);


mysqli_close($conn);

header('location:dashboard2.php?id='.$p_id);

?>