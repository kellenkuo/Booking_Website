<!DOCTYPE html>
<html>
<head>
	<title>BOOK</title>
	<link rel="stylesheet" href="book_div.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	session_start();
	$table = (string)$_GET['table'];
	$number = (string)$_GET['number'];
	
	if ( $table != '' && $number != '' ){

		$table = preg_split("/[\s,]+/", $table);
		$table_num = count($table);
		$tmp = 1;
		$connect = mysqli_connect('localhost','user','password','own')
			or die('ERROR Connect to Database');
		for ( $tmp = 1;$tmp < $table_num; $tmp ++ ) {
			$sql = "UPDATE $table[$tmp] SET pay='1' WHERE number=$number";
			if ( mysqli_query($connect, $sql) ) {
				$_SESSION['add_message'] = 'ADD Successful';
			}else {
				$_SESSION['add_message'] = 'Fail to Update the Database';
			}
		}
		mysqli_close($connect);
	}else {
		$_SESSION['add_message'] = 'SYSTEM ERROR';
	}
?>	
</body>
</html>