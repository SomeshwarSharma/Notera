<?php
session_start();
 include 'includes/dbhandler.php';
  $u_id=$_SESSION['user_id'];

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
                                <a class="nav-link" href="#"><h3>EDIT PROFILE</h3></a>
                            </li>
                    </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="profile2.php">Profile</a>
                            </li>
							<li class="nav-item active">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container emp-profile">

    <div class="col-lg-10 m-auto">
    <br><br><br><br><br>
        <form method="post">
            <br><br>
            <div class="col-md-8">
                <div class="profile-tab" >
                    <div class="row">
                        <div class="col-md-6">
                            <label>User ID</label>
                        </div>
                        <div class="col-md-6">
                            <center><b><?php echo $u_id ?></b></center><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                        </div>
                        <div class="col-md-6">
                            <p><input type="text" name="name" class="form-control"/></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <p><input type="text" name="email" class="form-control"/></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-6">
                            <p><input type="text" name="phone" class="form-control"/></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Job Description</label>
                        </div>
                        <div class="col-md-6">
                            <p><input type="text" name="jdesc" class="form-control"/></p>
                        </div>
                    </div>
                    
                </div><br><br><br>
                <button class="btn btn-secondary btn-md float-right" type="submit" name="edit"> Update </button>

                
            </div>
        </form>
        </div>
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
    $u_name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $jdesc=$_POST['jdesc'];
$sql11="select * from login where user_id='$u_id'";
$result11= mysqli_query($conn,$sql11);
if($result11==true)
{
$sql = " UPDATE login set username='$u_name',u_email='$email',u_phone='$phone', j_desc='$jdesc' where user_id=$u_id";
    $query = mysqli_query($conn,$sql);

 mysqli_close($conn);
}

 }
?>
<style>
    .profile-head h4{
    color: #333;
}

.profile-head h5{
    color: #0062cc;
}
.profile-head h6{
    color: grey;
}
.profile-head hr{
    border:1px solid #333;
    
}
.chat-btn {
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    background: green;
    align-items: flex-end;
    
}
.edit-profile-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    background: lightgrey;
    align-items: flex-end;
}

.profile-head {
    font-weight:600;
    border: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
    </style>

