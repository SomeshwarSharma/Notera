<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = "";
$dbname = "notera";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
session_start();
$p_id=$_SESSION['pid'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add Task</title>

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
                                <a class="nav-link" href="#"><h3>ADD TASK</h3></a>
                            </li>
                    </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="profile2.php">Profile</a>
                            </li>
							<li class="nav-item active">
                                <a class="nav-link" href="chat/index.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <!-- Page Content Holder -->
        <div id="content">
        <form method='post'>
        <table>
        <thead>
            <tr >
                <th class="text-center">id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Deadline</th>
                <th class="text-center">Priority</th>    
                <th class="text-center">status</th>
                <th class="text-center">Assign To</th>
                <th class="text-center">Description</th>
                <th class="text-center">Project id</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name='tid'  ></input>
                </td>
                <td>
                    <input type="text" name='tname'  ></input>
                </td>
                <td>
                <input type="date" name='tdeadline' ></input>
                <td>
                <select name="tpriority" >
                                        <option selected="selected" disabled="">-- SELECT --</option>
                                        <option value="high">high</option>
                                        <option value="medium">medium</option>
                                        <option value="low">low</option>
                                    </select>
                <td>
                <select name="tstatus" >
                                        <option selected="selected" disabled="">-- SELECT --</option>
                                        <option value="to-do">TO-DO</option>
                                        <option value="doing">Doing</option>
                                        <option value="done">Done</option>
                                    </select>
                </td>

                <td>

                <input type="text" name='assi_user'  ></input>

                </td>
                <td>
                    <textarea placeholder="Add Discription"  name="tdesc"></textarea>
                </td>

                <td>
                <center><b><?php echo $p_id; ?></b></center>
                <td>
            </tr>
            <tr></tr>
        </tbody>
    </table>
    <input type="submit" name ='submit' value="submit">

          <br> <br>
        <div class="container">
        <div class="col-lg-12">
            
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
        <tr class="bg-dark text-white text-center">
        
        <th> TASK ID </th>
        <th> Task Name </th>
        <th> Deadline </th>
        <th> Priority </th>
        <th> status </th>
        <th> Assigned To </th>
        <th> Description </th>
        <th> Project Id </th>
        <th> Actions </th>

        </tr >
        <?php


        $sql = "select * from task where p_id =$p_id";

        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr class="text-center">
        <td> <?php echo $row["t_no"];  ?> </td>
        <td> <?php echo $row["t_name"];  ?> </td>
        <td> <?php echo $row["t_deadline"];  ?> </td>
        <td> <?php echo $row["t_priority"];  ?> </td>
        <td> <?php echo $row["t_status"];  ?> </td>
        <td> <?php echo $row["t_aname"];  ?> </td>
        <td> <?php echo $row["t_desc"];  ?> </td>
        <td> <?php echo $row["p_id"];  ?> </td>

        <td> <button class="btn-danger btn"> <a href="delete-task.php?id=<?php echo $row['t_no']; ?>" class="text-white"> Delete </a>  </button> </td>

        </tr>

        <?php 
        }

        ?>
        </div>
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
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</html>
<?php
if(isset($_POST['submit']))
{
echo"<br>";

$t_id=$_POST['tid'];
$t_name=$_POST['tname'];
$t_deadline=$_POST['tdeadline'];
$t_priority=$_POST['tpriority'];
$t_status=$_POST['tstatus'];
$t_auser=$_POST['assi_user'];
$t_desc=$_POST['tdesc'];

$sql11="select u_name from user where u_name='$t_auser'";
$result11= mysqli_query($conn,$sql11);
if($result11==true)
{
    $sql = mysqli_query($conn, "INSERT INTO `task`(`t_no`, `t_name`, `t_deadline`, `t_priority`, `t_status`,`t_aname`,`t_desc`, `p_id`) VALUES ('$t_id','$t_name','$t_deadline','$t_priority','$t_status','$t_auser','$t_desc','$p_id')");

    if(!$sql)
    {
        echo mysqli_error($conn);
    }
}

mysqli_close($conn);

}
?>
<script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
<style>
    body{
        background-image: linear-gradient(to bottom, #cae6f2, #d2e8f2, #daeaf2, #e2edf2, #e9eff2);}

  input, select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<!--add row-->
