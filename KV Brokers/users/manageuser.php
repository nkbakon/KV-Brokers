<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KV Brokers</title>

    <link href="../include/style.css" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
         
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php require_once 'userconn.php'; ?>
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:#2C3E50;">
  <div class="container-fluid justify-content-end">
    <div class="font-size-14">
      <div class="dropdown">
          <a href="#" data-bs-toggle="tooltip" data-bs-placement="right">
          </a>
          <a href="#" class="d-flex align-items-center text-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">            
            <strong class="text-light">Account</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-light text-small shadow bg-dark" aria-labelledby="dropdownUser1">              
            <li><a class="dropdown-item text-light" href="../user.php">Profile</a></li>
            <li><hr class="dropdown-divider text-light"></li>
            <li><a class="dropdown-item text-light" href="../login.php" name="logout">Sign out</a></li>
          </ul>
      </div>
    </div>
  </div>
</nav>

<!-- admin's Dashboard -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse vh-100 sidenav bg-dark">
  <div>
    <a href="../dashboard.php"><img src="../assets/logo.png" width="150" height="150"></a>    
    <ul class="nav flex-column" style="font-size: 18px;">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../dashboard.php">
          <i class="fa fa-home"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="right">
        </a>
        <a href="#" class="nav-link text-light d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">            
          <i class="fa fa-users"></i>
          Users
        </a>
        <ul class="dropdown-menu dropdown-menu-light bg-color shadow" aria-labelledby="dropdownUser1">              
            <li><a class="dropdown-item text-primary" href="./adduser.php">Add User</a></li>
            <li><a class="dropdown-item text-primary" href="./manageuser.php">Manage Users</a></li>
            <li><a class="dropdown-item text-primary" href="./archiveuser.php">Archive Users</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login.php">
          <i class="fa fa-sign-out"></i>
          Logout
        </a>
      </li>      
    </ul>
  </div>
</nav>

<!-- edit modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>     
      <form action="" method="POST">
        <div class="modal-body">

          <input type="hidden" name="update_userid" id="update_userid">

            <div class="form-group">
                <label for="fname" class="form-label">Enter First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>            
            </div><br>
            <div class="form-group">
                <label for="lname" class="form-label">Enter Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>            
            </div><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="usertype" class="font-weight-bold">Select User Type</label>
                <select name="usertype" id="usertype" class="form-control" required>
                    <option selected disabled>Select user type from here</option>
                    <option value="Admin">Admin</option>
                    <option value="Author">Author</option>
                    <option value="Distributee">Distributee</option>
                </select>
                </div>
            </div>
            <br>                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="update" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>                               
        </div>
      </form>
    </div>    
  </div>
</div>
<!-- end of edit modal -->

<!-- Delete User Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
            <div class="modal-body">
                <input type="hidden" name="delete_userid" id="delete_userid">
            
                Do you want to delete this data?              
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">No</button>
                <button type="submit" name="delete" class="btn btn-danger rounded-pill" style="width: 80px;">Yes</button>
            </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of delete user modal -->

<div class="main">
  <?php
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
  <h5 class="text-secondary">User Listning</h5><hr>
  <div class="container">
      <div class="card">
        <div class="card-body bg-light shadow">                
          <strong class="text-dark h5"><i class="fa fa-cog"></i>&nbsp;Users</strong>
          <div class="btn-group btn-group-toggle" data-toggle="buttons" style="float:right;">            
            <button type="button" class="btn bg-transparent btn-outline-secondary">Print</button>
            <button type="button" class="btn bg-transparent btn-outline-primary" checked>PDF</button>
            <button type="button" class="btn bg-transparent btn-outline-secondary">CSV</button>         
          </div>          
        </div>
        <div class="card-body bg-light">
            <div class="float-container">
              <div style="width: 250px; float:left;">
                  <input type="text" id="usersearch" class="form-control" placeholder="Search">                                
              </div>
              <div style="width: 75px; float:right;">
                  <select id="pageno" name="pageno" class="form-control">
                      <option selected disabled>entries</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                  </select>
              </div><br>
            </div>
            <br>
            <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'kvbrokers');

            
            $limit = 10;  
            if (isset($_GET["page"])) {
                $page  = $_GET["page"]; 
            } 
            else{ 
                $page=1;
            };  
            $start_from = ($page-1) * $limit;

            $query = "SELECT * FROM users WHERE status='Active' LIMIT $start_from, $limit";
            $query_run = mysqli_query($connection, $query);
            ?>


            <table class="table table-light table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Type</th>
                        <th>ACTIONS</th>
                        
                    </tr>
                </thead>
                <?php

                    if($query_run){
                        foreach($query_run as $row)
                        {
                ?>                        
                <tbody id="usertable">                   
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['usertype']; ?></td>
                    <td class="text-end">
                        <button type="button" class="btn btn-primary rounded-pill editbtn" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa fa-pencil-square-o"></i></button>                                  
                        <button type="button" class="btn btn-danger rounded-pill deletebtn" data-bs-toggle="modal" data-bs-target="#delete"><i class="fa fa-trash-o"></i></button>
                    </td>                                                            
                        
                    </tr>
                </tbody>
                <?php
                    }
                }
                else
                {
                    echo "NO record found";
                }

                ?>
            </table>
            <?php                    
              $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM users"); 
              $row_db = mysqli_fetch_row($result_db);  
              $total_records = $row_db[0];  
              $total_pages = ceil($total_records / $limit); 
              
              $pagLink = "<ul class='pagination d-flex justify-content-center'>";  
              for ($i=1; $i<=$total_pages; $i++) {
                            $pagLink .= "<li class='page-item'><a class='page-link' href='manageuser.php?page=".$i."'>".$i."</a></li>";	
              }
              echo $pagLink . "</ul>";
              
            ?>                     
        </div>   
      </div>
  </div>
</div>    

<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

<script>
$(document).ready(function(){
  $("#usersearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#usertable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>

$(document).ready(function(){
    $('.editbtn').on('click', function(){
        

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_userid').val(data[0]);
        $('#fname').val(data[1]);
        $('#lname').val(data[2]);
        $('#usertype').val(data[4]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.deletebtn').on('click', function(){
        

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#delete_userid').val(data[0]);
    });
});

</script>

</body>
</html>