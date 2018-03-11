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
<?php
	$q = $_REQUEST['q'];
	$connect = mysqli_connect('localhost','user','password','own')
		or die('ERROR Connect to Database');
	$sql = "SELECT * FROM $q";

	$result = mysqli_query($connect, $sql);
	$_SESSION['search_match'] = mysqli_num_rows($result);

	?>
<body>
	<table class ="table">
	<thead>
      <tr>
        <th>座號</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_array($result)){ ?>
		<tr>
		<td><?php
			if ( $row[0] == 100 ){
				echo '外籍生';
			}else {
				echo $row[0];
			}
		?></td>
		<td>
			<?php 
			if($row[1] == 1){
				echo '<p style ="color:green;">已繳錢</p>';
			}else {
				echo '<p style ="color:red;">未繳錢</p>';
			}
			?>
		</td>	
		</tr>
	<?php }
	mysqli_free_result($connect);
	mysqli_close($connect);
	?>
	</tbody>
	</table>
</body>
</html>