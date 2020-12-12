<?php
 session_start();
 $u_id=$_SESSION['user_id'];
 include_once 'includes/dbhandler.php';
 $sql = "select * from  login where user_id=$u_id;";
	$result = $result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc())
		{
			$u_id=$row["user_id"];
			$u_name=$row["username"];
			$u_email=$row["u_email"];
			$u_phone=$row["u_phone"];
			$j_desc=$row["j_desc"];
		}
	}
?>
<html>
<head>
   <!-- Bootstrap CSS CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
    <body>
    <div class="wrapper" style="text-align: center;">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="logo1.png" width="80%"style="padding-left: 20px"/>
            </div>

            <ul class="list-unstyled components ">
                <!--<p>Welcome <?php //echo $u_name; ?></p>-->
				<li>
                    <a href="homepage.php">Home</a>
                </li>
                <li >
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
                                <a class="nav-link" href="#"><h3>PROFILE</h3></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            
							          <li class="nav-item active">
                                <a class="nav-link" href="chat/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


  <!-- page content -->
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/profile.png" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                                    <h4>
                                    <?php echo $u_name ?>
                                    </h4>
                                    <h5>
                                    <?php echo $j_desc ?>
                                    </h5>
                                    <br>
                                    <h6>
                                    About
                                    </h6>
                                    <hr style="width: 100%;">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4"><br><br>
                    <button type="file" class="btn btn-success btn-md float-left" ><a href="edit-profile.php">Edit Profile</a></button>
                    
                    </div>
                    <div class="col-md-8">
                        <div class="profile-tab" >
                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $u_id ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $u_name ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $u_email ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $u_phone ?></p>
                                            </div>
                                        </div>
                                       
                            </div>
                        
                    </div>
                </div>
            </form>           
        </div>
          <!--end content -->
  
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    

    $(document).ready(function(){
    $('#tabledata').DataTable();
    }) 
</script>
<style>
    body{
        background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);
}
.emp-profile{
    padding: 3%;
    margin-top: 13%;
    margin-bottom: 15%;
    border-radius: 0.5rem;
    background: #fff;
    width: 50%;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
    border-radius: 50%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;

}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
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
</html>