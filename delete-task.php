<?php

include 'includes/dbhandler.php';

$t_no = $_GET['id'];

$sql = " DELETE FROM task WHERE t_no = $t_no ";

mysqli_query($conn, $sql);


mysqli_close($conn);

header('location:edit-task.php');
?>