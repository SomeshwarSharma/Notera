<?php

session_start();

require 'includes/dbhandler.php';
$pid= $_POST['pid'];
$pname= $_POST['pname'];
$deadline= $_POST['deadline'];
$priority= $_POST['priority'];
$u_name= $_POST['u_name'];
$leader= $_POST['leader'];
$_SESSION['pid']=$pid;

$sql1= "select u_id from user where u_name='$leader';";
$result1 = mysqli_query($conn, $sql1);
while ($row1 = mysqli_fetch_array($result1)) 
{
$u_id= $row1['u_id'];
}
$sql1= "select p_id from project where p_id='$pid';";
$result1 = mysqli_query($conn, $sql1);
if ($result1)
{
	echo" this project id is already taken<br>enter another project id<br>";
}
$sql = "INSERT INTO project(p_id, p_name, deadline, priority, p_status, leader) VALUES ('$pid','$pname','$deadline','$priority','incomplete','$u_id')";
if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//checking whether the user exists and then inserting that value in user_prj table

$arr = explode (",", $u_name);  
for($i=0;$i<sizeof($arr);$i++)
{
	$query = "SELECT * FROM user WHERE u_name = '$arr[$i]'";
	$result = $conn->query($query);
	if ($result)
	{
	  if ($result->num_rows > 0)
	  {
		$s= "select u_id from user where u_name='$arr[$i]';";
		$r1 = mysqli_query($conn, $s);
		while ($row2 = mysqli_fetch_array($r1)) 
		{
			$u_id= $row2['u_id'];
			echo $u_id."<br>";
		}
		$query2 = "INSERT INTO user_project(p_id, u_id) VALUES ('$pid','$u_id')";
		if ($conn->query($query2) === TRUE) 
		{
		  echo "New record created successfully";
		}
		else
		{
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	  }
	  else 
	  {
		echo 'Record(s) not found';
	  }
	}
	else
	{
	  echo 'Error: '.mysql_error();
	}
}
header('location:add-task.php');
?>