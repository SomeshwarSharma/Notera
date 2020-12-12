<!--
//login.php
!-->

<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
	header('location:..\home_page.php');
}

if(isset($_POST['login']))
{
	$query = "
		SELECT * FROM login 
  		WHERE username = :username
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':username' => $_POST["username"]
		)
	);	
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if(password_verify($_POST["password"], $row["password"]))
			{
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row['user_id']."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
				header('location:..\home_page.php');
			}
			else
			{
				$message = '<label>Wrong Password</label>';
			}
		}
	}
	else
	{
		$message = '<label>Wrong Username</labe>';
	}
}


?>

<html>  
    <head>  
        <title>NOTERA</title>  
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </head>  
    <body>  
	<div class="container">

        <div class="card">
			<br />
			
			<h3 align="center">NOTERA</h3><br />
			<br />
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="text-danger"><?php echo $message; ?></p>
					<form method="post">
						<div class="form-group">
							<label>Enter Username</label>
							<input type="text" name="username" class="form-control" required />
						</div>
						<br>
						<div class="form-group">
							<label>Enter Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<br><br>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-info" value="Login" />
						</div>
						<div align="center">
							<a href="register.php">Register</a>
						</div>
					</form>
					<br />
					
				</div>
			</div>
		</div>
</div>
    </body>  
</html>
<style>
label{
	font-weight: bold;
}
body{
        background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);}
.card {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  background-color: darkgrey;
  width: 40%;
    display: block;
    margin-left: 30%;
	margin-top: 17%;

}
input {
      outline: none;
      display: block;
      background: rgba(black, 0.1);
      width: 100%;
      border: 0;
      border-radius: 4px;
      box-sizing: border-box;
      padding: 12px 20px;
      color: gray;
      font-family: inherit;
      font-size: inherit;
      font-weight: semibold;
      line-height: inherit;
      transition: 0.3s ease;
    }
</style>