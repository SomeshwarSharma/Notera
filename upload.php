<!DOCTYPE html>
<?php 
session_start();
  include "includes/dbhandler.php";
  $p_id= $_SESSION['pid'];

?>
<html>
<head>
        <title> Dashboad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

      </head>
<body ><div class="wrapper">
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
                <br> <br><br><br><br><br><br><br> <br><br><br><br><br><br><hr>
                
                <li>
                    <a href="uploads/fileread1.php">View Files</a>
                </li>
               
            </ul>
        </nav>
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
                                <a class="nav-link" href="#"><h3>DASHBOARD</h3></a>
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

        
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>


</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
    $('#tabledata').DataTable();
    }) 
    
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
</script>
<style>
  input[type=file],[type=submit] {
  background-color: #8F8886;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
  </style>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    
    $path = "uploads/";
    $fileTmpPath = $_FILES['uploaded_file']['tmp_name'];
    $fname=$_FILES['uploaded_file']['name'];
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename($fname). " has been uploaded";
      $sql="INSERT into file (`f_id`,`f_name`,`p_id`,`location`) values ('','$fname','$p_id','$fileTmpPath')";
      if (mysqli_query($conn, $sql)) 
	 {
		echo "New record created successfully !";
	 }
	 else
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
  }
}
?>
<style>
body{
    background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);
}
</style>