<?php
session_start();
	if ($_SESSION['already_login'] != TRUE) {
		header("location:index.php");
	}
?>
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
	<div class ="container">
		<div class ="form-group">
			<select class ="form-control" id ="table" onchange ="showHint()">
				<option value="empty">Please Select</option>
				<option value="one">機械材料</option>
				<option value="two">熱力學</option>
				<option value="three">工程數學</option>
				<option value="four">機械製造</option>
				<option value="five">動力學</option>
			</select>
		</div>
		<div class ="form-group">
		<form id ="a" action="">
			<div class ="form-group">

			<input type ="checkbox" name ="table" class="checkbox-inline checkbox" id ="one">
			<input type ="checkbox" name ="table" class="checkbox-inline checkbox" id ="two">
			<input type ="checkbox" name ="table" class="checkbox-inline checkbox" id ="three">
			<input type ="checkbox" name ="table" class="checkbox-inline checkbox" id ="four">
			<input type ="checkbox" name ="table" class="checkbox-inline checkbox" id ="five">
			
			</div>
			<div class ="form-group">
				<input type ="text" placeholder="繳錢座號" id ="NumberOfPay" class ="form-control">
				<div class ="form-group">
					<input type ="button" class ="btn btn-warning" onclick ="add()" value ="ADD">
					<input type ="button" class ="btn btn-default" onclick ="javascript:location.href='logout.php'" value ="LOGOUT">
				</div>	
			</div>
		</form>
		</div>
		<div style ="text-align:center;">
			<?php
				if (isset($_SESSION['add_message'])) {
					echo $_SESSION['add_message'];
				}
			?>
		</div>
		<div id ="resource">
	
		</div>
	</div>
</body>
<script>
function showHint() {
  var xhttp;
  var str = $('#table').val();
  if (str.length == 0) {
    document.getElementById("resource").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resource").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "catchdata.php?q="+str, true);
  xhttp.send();
}

function add() {
	
	var one = document.getElementById('one').checked;
	var two = document.getElementById('two').checked;
	var three = document.getElementById('three').checked;
	var four = document.getElementById('four').checked;
	var five = document.getElementById('five').checked;
	var number = document.getElementById('NumberOfPay').value;
	var table = '';

	if ( one == true ) {
		table = table + ' one';
	}
	if ( two == true ) {
		table = table + ' two';
	}
	if ( three == true ) {
		table = table + ' three';
	}
	if ( four == true ) {
		table = table + ' four';
	}
	if ( five == true ) {
		table = table + ' five';
	}
	if ( one == false && two == false && three == false && four == false && five == false ) {
		alert('Please Select one of category');
	}else {
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "add.php?table="+table+"&number="+number, true);
		xmlhttp.send();
	}
}

</script>
</html>