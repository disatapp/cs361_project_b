<?php
session_start();
include_once (db_connect.php);

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM usr_db WHERE username='$username' AND pass ='$password'";
$result = mysqli_query($mysqli,$query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['user_name'] = $row['username'];
		}
		else {
			echo 'false';
		}
?>

<!--http://stackoverflow.com/questions/24007780/jquery-ajax-form-data-serialize-using-php -->
