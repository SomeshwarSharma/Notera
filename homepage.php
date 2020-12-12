<?php
session_start();
$u_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Notera</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>

body{
    background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);
}
</style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
         <nav id="sidebar">
            <div class="sidebar-header">
                <img src="logo1.png" width="80%"style="padding-left: 20px"/>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">Home</a>
                </li>
				<li class="active">
                    <a href="project_homepage.php">Project</a>
                </li>
                <li>
                    <a href="chat/index.php">Message</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                                <a class="nav-link" href="#"><h3>HOME PAGE</h3></a>
                            </li>
                    </ul>
                        <ul class="nav navbar-nav ml-auto">
						<li class="nav-item active">
                                <a class="nav-link" href="profile2.php">Profile</a>
                            </li>
							<li class="nav-item active">
                                <a class="nav-link" href="chat/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
      <?php
		include_once 'includes/dbhandler.php';
		$arr = array();
		$sql = "select p_id from user_project where u_id=$u_id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc())
			{
				$arr[]=$row['p_id'];
				
			}
		}?>
		<table class=" table table-striped table-hover table-bordered" >
           <tr>
               <th>id</th>
                <th>name</th>
                <th>Deadline</th>
           </tr>
		   <?php
		for($i=0;$i<sizeof($arr);$i++)
		{
			$query = "SELECT * FROM project WHERE p_id = '$arr[$i]'";
			$result1 = $conn->query($query);
			if ($result1)
			{
				if ($result1->num_rows > 0)
				{
					while ($row2 = mysqli_fetch_array($result1)) 
					{ ?>
				<tr>
				<td><?php echo $row2['p_id']; ?> </td><td><?php echo $row2['p_name']; ?> </td><td><?php echo $row2['deadline']; ?> </td></tr>
						
					<?php }
				}
			}
		}
		echo "</table>";
	 ?>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
		var app = {
	settings: {
		container: $('.calendar'),
		calendar: $('.front'),
		days: $('.weeks span'),
		form: $('.back'),
		input: $('.back input'),
		buttons: $('.back button')
	},

	init: function() {
		instance = this;
		settings = this.settings;
		this.bindUIActions();
	},

	swap: function(currentSide, desiredSide) {
		settings.container.toggleClass('flip');

		currentSide.fadeOut(900);
		currentSide.hide();

		desiredSide.show();
	},

	bindUIActions: function() {
		settings.days.on('click', function(){
			instance.swap(settings.calendar, settings.form);
			settings.input.focus();
		});

		settings.buttons.on('click', function(){
			instance.swap(settings.form, settings.calendar);
		});
	}
}
    </script>
</body>
</html>