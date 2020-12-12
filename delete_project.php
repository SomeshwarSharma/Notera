<?php

include 'includes/dbhandler.php';

$p_no = $_GET['id'];


$sql1= " DELETE FROM task WHERE p_id = $p_no;";
mysqli_query($conn, $sql1);

$sql2= " DELETE FROM user_project WHERE p_id = $p_no;";
mysqli_query($conn, $sql2);

$sql3= " DELETE FROM file WHERE p_id = $p_no;";
mysqli_query($conn, $sql2);

$sql = " DELETE FROM project WHERE p_id = $p_no";
if ($conn->query($sql) === TRUE)
{
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

mysqli_query($conn, $sql);

header('location:project_homepage.php');
?>