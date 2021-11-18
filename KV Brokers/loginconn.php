<?php
session_start();


$db = mysqli_connect('localhost', 'root', '', 'kvbrokers');


if (isset($_POST['login_btn'])) {

	$username = $_POST['username'];
	$password = md5 ($_POST['password']);
		

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$logged_in_user = mysqli_fetch_assoc($results);

			            
            if ($logged_in_user['usertype'] == 'Admin') {

                $_SESSION['user'] = $logged_in_user;
                header('location: dashboard.php');

            }
            else if ($logged_in_user['usertype'] == 'Author'){
                $_SESSION['user'] = $logged_in_user;

                header('location: dashboard.php');
            }
            else if ($logged_in_user['usertype'] == 'Distributee'){
                $_SESSION['user'] = $logged_in_user;

                header('location: dashboard.php');
            }
			
		}
		else {
			$_SESSION['message'] = "Invalid Username or Password";

			header("location: login.php");
		}		
}

function Admin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['usertype'] == 'Admin' ) {
		return true;
	}else {
		return false;
	}
}

function Author()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['usertype'] == 'Author' ) {
		return true;
	}else {
		return false;
	}
}

function Distributee()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['usertype'] == 'Distributee' ) {
		return true;
	}else {
		return false;
	}
}

?>