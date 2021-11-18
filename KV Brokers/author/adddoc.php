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

<!-- Author's Dashboard -->
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
          <i class="fa fa-file"></i>&nbsp;
          Document
        </a>
        <ul class="dropdown-menu dropdown-menu-light bg-color shadow" aria-labelledby="dropdownUser1">              
            <li><a class="dropdown-item text-primary" href="./adddoc.php">Add Document</a></li>
            <li><a class="dropdown-item text-primary" href="./managedoc.php">Manage Document</a></li>
            <li><a class="dropdown-item text-primary" href="./archivedoc.php">Archive Document</a></li>
            <li><a class="dropdown-item text-primary" href="./deletedoc.php">Delete Document</a></li>
            <li><a class="dropdown-item text-primary" href="./assigndoc.php">Assign Document</a></li>
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
  <h5 class="text-secondary">Add User</h5><hr>
  <div class="container">
      <div class="card">
        <div class="card-body bg-primary shadow">                
            <span class="text-light"><i class="fa fa-file"></i>&nbsp;Add Document</span>
        </div>
        <div class="card-body bg-light">
            <form action="" method="POST">         
            
                <div class="modal-body">                
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" required>            
                </div><br>
                <div class="form-group">
                    <label for="stock" class="form-label">File</label><br>
                    <input type="file" id="file" name="file" value="">   
                </div><br>                     
                <button type="submit" class="btn btn-primary rounded-pill" name="save" style="width: 80px;">Submit</button>
                <a href="adddoc.php"><button type="button" class="btn btn-danger rounded-pill" style="width: 80px;">Cancel</button></a>
            </div>                      
                         
            </form>            
        </div>   
      </div>
  </div>
</div>    

<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

</body>
</html>