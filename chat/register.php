<!--
//register.php
!-->

<?php

include('database_connection.php');

session_start();

$message = '';
$message1 = '';

if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST["register"]))
{
	
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);
	$email = trim($_POST["email"]);
	$phn = trim($_POST["phn"]);
	$j_desc = trim($_POST["j_desc"]);
	$check_query = "
	SELECT * FROM login 
	WHERE username = :username
	";
	$statement = $connect->prepare($check_query);
	$check_data = array(
		':username'		=>	$username
	);
	if($statement->execute($check_data))	
	{
		if($statement->rowCount() > 0)
		{
			$message .= '<p><label>Username already taken</label></p>';
			$message1 .= '<p><label>Username already taken</label></p>';
		}
		else
		{
			if(empty($username))
			{
				$message .= '<p><label>Username is required</label></p>';
				$message1 .= '<p><label>Username is required</label></p>';
			}
			if(empty($password))
			{
				$message .= '<p><label>Password is required</label></p>';
				$message1 .= '<p><label>Password is required</label></p>';
			}
			else
			{
				if($password != $_POST['confirm_password'])
				{
					$message .= '<p><label>Password not match</label></p>';
					$message1 .= '<p><label>Password not match</label></p>';
				}
			}
			if($message=='')
			{
				$data = array(
					':username'		=>	$username,
					':email'		=>  $email,
					':phn'			=>	$phn,
					':j_desc'		=>	$j_desc,
					':password'		=>	password_hash($password, PASSWORD_DEFAULT)
					
				);
		
				$query = "INSERT INTO login (username, password, j_desc,u_phone, u_email) VALUES (:username, :password, :j_desc, :phn, :email)";
				$statement = $connect->prepare($query);
				if($statement->execute($data))
				{
					$message = "<label>Registration Completed</label>";
				}
			}
			if($message1=='')
			{
				$data1 = array(
					':username'		=>	$username,
					':email'		=>  $email,
					':phn'			=>	$phn,
					':j_desc'		=>	$j_desc,
					':password'		=>	password_hash($password, PASSWORD_DEFAULT)
					
				);
			$query1 = "INSERT INTO user (u_name, u_pass,u_email, u_phone, j_desc) VALUES (:username, :password, :email, :phn, :j_desc)";
				$statement1 = $connect->prepare($query1);
				if($statement1->execute($data1))
				{
					$message1 = "<label>Registration Completed</label>";
				}

			}
		}
	}
}

?>

<html>  
    <head>  
        <title>Register</title>  
		<meta charset="utf-8">
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

        <!-- Page Content Holder -->
        <div id="content">

            
        <div class="card">
			<br />
			<h2 align="center">REGISTER</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post">
					<span class="text-danger"><?php echo $message; ?></span>
						<div class="form-group">
							<label>Enter Username</label>
							<input type="text" name="username" class="form-control" />
						</div>
						<div class="form-group">
							<label>Enter Email</label>
							<input type="text" name="email" class="form-control" />
						</div>
						<div class="form-group">
							<label>Enter Phone number</label>
							<input type="text" name="phn" class="form-control" />
						</div>
						<div class="form-group">
							<label>Enter Job description</label>
							<input type="text" name="j_desc" class="form-control" />
						</div>
						<div class="form-group">
							<label>Enter Password</label>
							<input type="password" name="password" class="form-control" />
						</div>
						<div class="form-group">
							<label>Re-enter Password</label>
							<input type="password" name="confirm_password" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" name="register" class="btn btn-info" value="Register" />
						</div>
						<div align="center">
							<a href="login.php">Login</a>
						</div>
					</form>
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
	margin-top: 8%;

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
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>