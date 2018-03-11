<?php
	session_start();

	$username = 'one';
	$password = 'two';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$connect = mysqli_connect('localhost', 'user', 'password', 'own')
		or die('ERROR Connect to Database');

	$sql = "SELECT password FROM id WHERE username='$username'";
	$result = mysqli_query( $connect, $sql);
	$row = mysqli_fetch_assoc($result);

	if ($password == $row['password'] && $username != '' && $password != '') {
		$_SESSION['already_login'] = TRUE;
		header("location:book.php");
	}else {
		$_SESSION['login_message'] = TRUE;
		header("location:index.php");
	}

	mysqli_close($connect);
?>