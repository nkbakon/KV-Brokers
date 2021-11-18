<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KV Brokers</title>

    <link href="include/style.css" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
         
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

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
            <li><a class="dropdown-item text-light" href="./user.php">Profile</a></li>
            <li><hr class="dropdown-divider text-light"></li>
            <li><a class="dropdown-item text-light" href="./login.php" name="logout">Sign out</a></li>
          </ul>
      </div>
    </div>
  </div>
</nav>

    <?php 
    
    include('./loginconn.php');

    if (Admin()) {   
    
    ?>
<!-- admin's Dashboard -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse vh-100 sidenav bg-dark">
  <div>
    <a href="./dashboard.php"><img src="./assets/logo.png" width="150" height="150"></a>    
    <ul class="nav flex-column" style="font-size: 18px;">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./dashboard.php">
          <i class="fa fa-home"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="right">
        </a>
        <a href="#" class="nav-link d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">            
          <i class="fa fa-users"></i>
          Users
        </a>
        <ul class="dropdown-menu dropdown-menu-light bg-color shadow" aria-labelledby="dropdownUser1">              
            <li><a class="dropdown-item text-primary" href="./users/adduser.php">Add User</a></li>
            <li><a class="dropdown-item text-primary" href="./users/manageuser.php">Manage Users</a></li>
            <li><a class="dropdown-item text-primary" href="./users/archiveuser.php">Archive Users</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.php">
          <i class="fa fa-sign-out"></i>
          Logout
        </a>
      </li>      
    </ul>
  </div>
</nav>


      <?php
      
       }

      else{
      }

      
      ?>
<?php    
   

   if (Author()) {   
   
   ?>
<!-- Author's Dashboard -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse vh-100 sidenav bg-dark">
 <div>
   <a href="./dashboard.php"><img src="./assets/logo.png" width="150" height="150"></a>    
   <ul class="nav flex-column" style="font-size: 18px;">
     <li class="nav-item">
       <a class="nav-link active" aria-current="page" href="./dashboard.php">
         <i class="fa fa-home"></i>
         Dashboard
       </a>
     </li>
     <li class="nav-item dropdown">
       <a href="#" data-bs-toggle="tooltip" data-bs-placement="right">
       </a>
       <a href="#" class="nav-link d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">            
         <i class="fa fa-file"></i>&nbsp;
         Document
       </a>
       <ul class="dropdown-menu dropdown-menu-light bg-color shadow" aria-labelledby="dropdownUser1">              
          <li><a class="dropdown-item text-primary" href="./author/adddoc.php">Add Document</a></li>
          <li><a class="dropdown-item text-primary" href="./author/managedoc.php">Manage Document</a></li>
          <li><a class="dropdown-item text-primary" href="./author/archivedoc.php">Archive Document</a></li>
          <li><a class="dropdown-item text-primary" href="./author/deletedoc.php">Delete Document</a></li>
          <li><a class="dropdown-item text-primary" href="./author/assigndoc.php">Assign Document</a></li>
        </ul>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="./login.php">
         <i class="fa fa-sign-out"></i>
         Logout
       </a>
     </li>      
   </ul>
 </div>
</nav>

     <?php
     
      }

     else{
     }

     
     ?>

<?php    
   

    if (Distributee()) {   
    
    ?>
<!-- Distributee's Dashboard -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse vh-100 sidenav bg-dark">
  <div>
    <a href="./dashboard.php"><img src="./assets/logo.png" width="150" height="150"></a>    
    <ul class="nav flex-column" style="font-size: 18px;">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="./dashboard.php">
          <i class="fa fa-home"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="./distributee/doc.php">
          <i class="fa fa-file"></i>
          Assign Document
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.php">
          <i class="fa fa-sign-out"></i>
          Logout
        </a>
      </li>      
    </ul>
  </div>
</nav>

      <?php
      
       }

      else{
      }

      
      ?>


<!-- Change Username modal -->
<div class="modal fade" id="editusername" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Change Username</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
            <div class="modal-body">

                <input type="hidden" name="update_userid" id="update_userid">              
            
                <div class="form-group">
                    <label>Enter Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>                    
                </div>             
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
                <button type="submit" name="changeusername" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>
                               
            </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit product type modal -->

<!-- Change Username modal -->
<div class="modal fade" id="editpassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
        <div class="modal-body">

          <input type="hidden" name="update_passid" id="update_passid">              
            
          <div class="form-group">
            <label>Enter Current Password</label>
            <input type="password" name="currentpass" id="currentpass" class="form-control" placeholder="Enter Current Password" required>                    
          </div><br>
          <div class="form-group">
            <label>Enter New Password</label>
            <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Enter New Password" required>                    
          </div><br>
          <div class="form-group">
            <label>Enter Confirm Password</label>
            <input type="password" name="confirmpass" id="confirmpass" class="form-control" placeholder="Enter Same New Password" required>                    
          </div><br>
          <span id='passwordcheck'></span>           
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="changepassword" class="btn btn-primary rounded-pill passwordvalid" style="width: 80px;">Update</button>
                               
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit product type modal -->

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
<h5 class="font-rubik text-center">User's Profile</h5>


<div class="container vh-100">
  <div class="row justify-content-center h-100">
    <div class="card w-50 my-auto bg-light shadow">
      <div class="card-body">
        <div class="text-center">
          <img src="./assets/user.png" alt="" width="150" height="150" class="rounded-circle me-2">
        </div>
        <?php  if (isset($_SESSION['user'])) : ?>
        <p>
        <strong style="display:none;"><?php echo $_SESSION['user']['id']; ?></strong><br><br>
        <i class="fa fa-hashtag"></i> Employee ID :-
          <strong><?php echo $_SESSION['user']['id']; ?></strong><br><br>
        <i class="fa fa-user"></i> Username :- 
        <?php
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,'kvbrokers');
          $id= $_SESSION['user']['id'];
          $query = "SELECT * FROM users WHERE id='$id'";
          $query_run = mysqli_query($connection, $query);
        ?>
        <?php

          if($query_run){
            foreach($query_run as $row)
              {
        ?>
        <strong><?php echo $row['username']; ?></strong>
        <?php
              }
          }
          else
          {
            echo "NO record found";
          }

        ?>
        <button  class="btn btn-success rounded-pill editusernamebtn" data-bs-toggle="modal" data-bs-target="#editusername"><i class="fa fa-pencil-square-o"></i></button>
        <br><br>
        <?php endif ?>
        <i class="fa fa-id-card-o"></i> Full Name :-  
        <?php
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,'kvbrokers');
          $id= $_SESSION['user']['id'];
          $query = "SELECT * FROM users WHERE id='$id'";
          $query_run = mysqli_query($connection, $query);
        ?>
        <?php

          if($query_run){
            foreach($query_run as $row)
              {
        ?>
        <strong><?php echo $row['fname']; ?></strong>&nbsp;<strong><?php echo $row['lname']; ?></strong>
        <?php
              }
          }
          else
          {
            echo "NO record found";
          }

        ?>
        <br><br>
        <i class="fa fa-lock"></i> Password &nbsp;
        <button class="btn btn-success rounded-pill editpasswordbtn" data-bs-toggle="modal" data-bs-target="#editpassword"><i class="fa fa-pencil-square-o"></i></button>
        <br><br>
        </p>    
              
      </div>
    </div>
  </div>
</div>
</div>


<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

<script>

$(document).ready(function(){
    $('.editusernamebtn').on('click', function(){

        $p = $(this).closest('p');

        var data = $p.children("strong").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_userid').val(data[0]);
        $('#username').val(data[2]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.editpasswordbtn').on('click', function(){

        $p = $(this).closest('p');

        var data = $p.children("strong").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_passid').val(data[0]);
    });
});

</script>

<script>

$(document).ready(function(){    

        $p = $(this).closest('p');

        var data = $p.children("strong").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#userid').val(data[0]);  
});

</script>

<script>
$('#newpass, #confirmpass').on('keyup', function () { 
    
  if ($('#newpass').val() == $('#confirmpass').val()) {
    $('#passwordcheck').html('Passwords Matching').css('color', 'green');
    $(".passwordvalid").attr('disabled', false);
  }
  else if($('#confirmpass').val() == ''){
    $('#passwordcheck').html('');
  }
  else { 
    $('#passwordcheck').html('Passwords Not Matching').css('color', 'red');
    $(".passwordvalid").attr('disabled', true);
  }
  if ($('#newpass').val() == '' && $('#confirmpass').val() == '') {
    $('#passwordcheck').html('');
  }  
});
</script>

</body>
</html>