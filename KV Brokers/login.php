<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KV Brokers System</title>

    <link href="include/style.css" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- Bootstrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</head>
<body class="bg-color">
<?php session_start(); ?>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-50 my-auto bg-light shadow">
                <div class="text-center text-info">
                    <img src="./assets/logo.png" width="150" height="150">
                    <h2>Sign In</h2>                    
                </div>
                <div class="card-body">
                    <form action="loginconn.php" method="post">
                    <?php
                    if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-danger" role="alert">
                    <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);                    
                    ?>
                    </div>
                    <?php endif ?>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user" placeholder="Username" name="username" required>
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div><br>
                        <button type="submit" class="btn btn-info rounded-pill text-light" name="login_btn" style="width: 80px;">Login</button>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <small>2021 &copy; KV Brokers</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>