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

<!-- assign modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Assign Distributee</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>     
      <form action="" method="POST">
        <div class="modal-body">

          <input type="hidden" name="update_userid" id="update_userid">

          <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>            
         </div><br>
         <div class="form-group">
                <label for="title" class="form-label">Distributee's ID</label>
                <input type="text" class="form-control" name="distributee" placeholder="Distributee's ID" required>            
         </div><br>
         <div class="form-group">
            <label for="date" class="form-label">Select Date</label>
            <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" required>            
         </div><br> 
         <input type="text" class="form-control" name="author" value="<?php echo $_SESSION['user']['id']; ?>" hidden>                          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="save" class="btn btn-primary rounded-pill" style="width: 80px;">Save</button>                               
        </div>
      </form>
    </div>    
  </div>
</div>
<!-- end of assign modal -->


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
  <h5 class="text-secondary">Assign Documents</h5><hr>
  <div class="container">
      <div class="card">
        <div class="card-body bg-light shadow">                
            <strong class="text-dark h5"><i class="fa fa-file"></i>&nbsp;Documents</strong>
            <div class="btn-group btn-group-toggle" data-toggle="buttons" style="float:right;">            
            <button type="button" class="btn bg-transparent btn-outline-secondary">Print</button>
            <button type="button" class="btn bg-transparent btn-outline-primary" checked>PDF</button>
            <button type="button" class="btn bg-transparent btn-outline-secondary">CSV</button>         
          </div>  
        </div>
        <div class="card-body bg-light">
            <div class="float-container">
              <div style="width: 250px; float:left;">
                  <input type="text" id="docsearch" class="form-control" placeholder="Search">                                
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
            <h5 class="text-center">Documents Table</h5>        

            <table class="table table-light table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Revision</th>
                        <th>Stats</th>
                        <th>Date</th>
                        <th>ACTIONS</th>
                        
                    </tr>
                </thead>                        
                <tbody id="doctable">                   
                    <!-- Dummy Data :- not from database -->                    
                    <tr>
                    <td>4</td>
                    <td>paper1</td>
                    <td>paper1.pdf</td>
                    <td>1</td>
                    <td>Available</td>
                    <td>2021-11-17</td>
                    <td class="text-end">
                        <button type="button" class="btn btn-primary rounded-pill editbtn" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa fa-plus"></i></button>                         
                    </td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td>paper2</td>
                    <td>paper2.pdf</td>
                    <td>0</td>
                    <td>Available</td>
                    <td>2021-11-17</td>
                    <td class="text-end">
                        <button type="button" class="btn btn-primary rounded-pill editbtn" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa fa-plus"></i></button>                         
                    </td>
                    </tr>
                </tbody>
            </table>
            <?php
               // Dummy Data
              $limit = 10;
              $pagLink = "<ul class='pagination d-flex justify-content-center'>";  
              for ($i=1; $i<=1; $i++) {
                            $pagLink .= "<li class='page-item'><a class='page-link' href='archiveuser.php?page=".$i."'>".$i."</a></li>";	
              }
              echo $pagLink . "</ul>";
              
            ?>
            <br>
            <div class="float-container">
              <div style="width: 250px; float:left;">
                  <input type="text" id="assignsearch" class="form-control" placeholder="Search">                                
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
            <h5 class="text-center">Assign Table</h5>        

            <table class="table table-light table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Author's ID</th>
                        <th>Distributee's ID</th>
                        <th>Date</th>
                        <th>ACTIONS</th>
                        
                    </tr>
                </thead>                        
                <tbody id="assigntable">                   
                    <!-- Dummy Data :- not from database --> 
                    <tr>
                    <td>5</td>
                    <td>paper2</td>
                    <td>paper2.pdf</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2021-11-18</td>
                    <td class="text-end">
                        <button type="button" class="btn btn-primary rounded-pill editbtn" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa fa-plus"></i></button>                         
                    </td>
                    </tr>
                </tbody>
            </table>
            <?php
               // Dummy Data
              $limit = 10;
              $pagLink = "<ul class='pagination d-flex justify-content-center'>";  
              for ($i=1; $i<=1; $i++) {
                            $pagLink .= "<li class='page-item'><a class='page-link' href='archiveuser.php?page=".$i."'>".$i."</a></li>";	
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
  $("#docsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#doctable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function(){
  $("#assignsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#assigntable tr").filter(function() {
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
        $('#title').val(data[1]);
    });
});

</script>

</body>
</html>