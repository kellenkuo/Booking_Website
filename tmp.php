<?php
/*
	$a = array(1, 2, 5, 7, 8, 10, 11, 12, 13, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 39, 40, 41, 42, 45, 46, 47, 49, 51, 52, 53, 54, 55, 70, 71, 10323113, 10323157);
	print_r($a);

	$connect = mysqli_connect('localhost','user','password','own')
		or die('ERROR Connect to Database');
	for($number =0;$number <49;$number ++){
		$sql = "INSERT INTO five VALUES($a[$number],0)";
		mysqli_query($connect, $sql);
	}
	mysqli_close($connect);
*/

	$NewString1 = preg_split("/[\s,]+/", " Welcome to Wibibi.Have a good day.");
	print_r($NewString1);
	$mun = count($NewString1);
	echo $mun;
	echo $NewString1[1];
?>