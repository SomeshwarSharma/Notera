<!DOCTYPE html>
<?php
session_start();
$t_name=$_SESSION['username'];
//connect to database
include 'includes/dbhandler.php'; 
$pid=$_GET['id'];

$_SESSION['pid']= $pid;
$p_id = $_SESSION['pid'];
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
                    <a href="upload.php">Upload file</a>
                </li>
                <li>
                    <a href="uploads/fileread1.php">View Files</a>
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
<br><br>

<div class="form-group">
<button type="file" class="btn btn-secondary btn-md float-right" ><a href="edit-task.php?id=<?php echo $p_id; ?>">Edit Task</a></button>

<button type="file" class="btn btn-secondary btn-md float-right" ><a href="add-task.php?id=<?php echo $p_id; ?>">ADD Task</a></button>

<br>
<br>
</div>
<div class="row">
<div class="column">
    <div class="card">
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                    <th colspan="3"> To Do </th>
                    </tr >
                    <?php

                    $sql = "select * from task where t_status= 'to-do' AND t_aname='$t_name' AND  p_id = '$p_id'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr class="text-center">
                      
                    <td > <?php 
                    
                    echo $row["t_name"];  ?> </td>
                    <td> 
                        <form method="post">
                        <button style="font-size:20px" class="btn btn-link fa fa-arrow-circle-right "><a href="todo-edit.php?id=<?php echo $row['t_no']; ?>">shift.</a></button> 
                                               
                        </form>
                    </td>
                    </tr>
                    <?php  }     ?>
                    </table>
    </div>
  </div>  

  <div class="column">
    <div class="card">
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                <th colspan="3"> DOING </th>
                </tr >
                <?php

                $sql1 = "select t_name , t_no from task where t_status= 'doing' AND t_aname='$t_name' AND  p_id = '$p_id' ";
                $result3 = mysqli_query($conn,$sql1);
                while($row = mysqli_fetch_assoc($result3)){
                ?>
                <tr class="text-center">
                <td> 
                    <form method="post">
                      <input type ="hidden" name="pid" id="pid" value= "<?php echo $p_id ;?>" />
                    <button style="font-size:20px" class="btn btn-link fa fa-arrow-circle-left "><a href="doing-edit1.php?id=<?php echo $row['t_no']; ?>">shift.</a></button> 
                    </form>
                </td>
                <td > <?php 
                 $t_id=$row["t_no"];
                echo $row["t_name"];  ?> </td>
                <td> 
                    <form method="post">
                    <button style="font-size:20px" class="btn btn-link fa fa-arrow-circle-right "><a href="doing-edit.php?id=<?php echo $row['t_no']; ?>">shift.</a></button> 
                    </form>
                </td>
                </tr>
                <?php }     ?>
                
        </table>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                <th colspan="3"> Done </th>
                </tr >
                <?php
                $sql2 = "select t_name , t_no from task where  t_status= 'done' AND t_aname='$t_name' AND  p_id = '$p_id' ";
                $result5 = mysqli_query($conn,$sql2);
                while($row = mysqli_fetch_assoc($result5)){
                  $t_id=$row["t_no"];

                ?>
                <tr class="text-center">
                <td> 
                    <form method="post">

                    <button style="font-size:20px" class="btn btn-link fa fa-arrow-circle-left "><a href="done-edit.php?id=<?php echo $row['t_no']; ?>">shift.</a></button> 
                    </form>
                </td>
                <td > <?php echo $row["t_name"];  ?> </td>
                
                </tr>
                <?php }  ?> 
        </table>
    </div>
  </div>
  
  
</div>
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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33.33%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>