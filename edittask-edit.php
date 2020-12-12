<?php

 include 'includes/dbhandler.php';
  $t_no = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="logo1.png" width="80%"style="padding-left: 20px"/>
            </div>

            <ul class="list-unstyled components">
                <!--<p>Welcome <?php //echo $u_name; ?></p>-->
				<li>
                    <a href="homepage.php">Home</a>
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
                                <a class="nav-link" href="#"><h3>EDIT TASK</h3></a>
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

    <div class="col-lg-6 m-auto">
    
        <form method="post">
        
        <br><br>
            <div class="card">
            
                <div class="card-header bg-darkgrey">
                <b><label  > Task ID: </label>
                <label  > <?php echo $t_no;?> </label></b>
                <br>

                <label> Task name: </label>
                <input type="text" name="tname" class="form-control"/> <br>

                <label> Deadline: </label>
                <input type="date" class="form-control input-sm " name="tdeadline"/> <br>
				
                <label> Priority </label>
                <select name="tpriority" class="form-control" >
                    <option selected="selected" disabled="">-- SELECT --</option>
                    <option value="high">high</option>
                    <option value="medium">medium</option>
                    <option value="low">low</option>
                </select><br>

                <label> Status: </label>

                <select name="tstatus" class="form-control" >
                    <option selected="selected" disabled="">-- SELECT --</option>
                    <option value="to-do">To-Do</option>
                    <option value="doing">Doing</option>
					<option value="done">Done</option>
                </select><br>
                <label> Assign User </label><br>
                <input type="text" name='assi_user' class="form-control"></input><br>

				<label> Task description: </label>
                <input type="text" name="tdesc" class="form-control"/> <br>

                <label> Project ID </label>
                <input type="text" name="pid" class="form-control"/> <br>

                <button class="btn btn-success" type="submit" name="edit"> Update </button>
                <button type="button" class="btn btn-secondary btn-md float-right" ><a href="edit-task.php ?>">GO BACK</a></button>


                </div>
        </form>
    </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>
<style>
body{
        background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);}


    </style>

<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
<?php
 if(isset($_POST['edit'])){
    $t_name=$_POST['tname'];
    $t_deadline=$_POST['tdeadline'];
    $t_priority=$_POST['tpriority'];
    $t_status=$_POST['tstatus'];
    $t_aname=$_POST['assi_user'];
    $t_desc=$_POST['tdesc'];
    $p_id=$_POST['pid'];
$sql11="select u_name from user where u_name='$t_aname'";
$result11= mysqli_query($conn,$sql11);
if($result11==true)
{
$sql = " UPDATE task set t_name='$t_name', t_deadline='$t_deadline',t_priority='$t_priority',t_status='$t_status', t_desc='$t_desc' ,p_id='$p_id' where t_no=$t_no";
    $query = mysqli_query($conn,$sql);

    header('location:edit-task.php');


 mysqli_close($conn);
}

 }
?>

