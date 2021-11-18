<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'kvbrokers');
$username = "";

if (isset($_POST['save'])) {
    $fname = $_POST ['fname'];
    $lname = $_POST ['lname'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $cmpassword = $_POST ['cmpassword'];
    $usertype = $_POST ['usertype'];
    $password = md5($password);
    $status = "Active";

  	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$res_u = mysqli_query($db, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
  	    $_SESSION['message'] = "Username Already Taken!";
        $_SESSION['msg_type'] = "danger";
        header('location: adduser.php');	
  	}
    else{
           $query = "INSERT INTO users (fname, lname, username, password, usertype) 
      	    	  VALUES ('$fname','$lname','$username','$password','$usertype')";
           $results = mysqli_query($db, $query);
            $_SESSION['message'] = "Record has been saved!";
            $_SESSION['msg_type'] = "success";
            header('location: adduser.php');
  	}
}

?>