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
		<div id ="test">

		</div>
		<div class ="form-group">
			<select class ="form-control" id ="table" onchange ="showHint(this.value)">
				<option value="empty">Please Select</option>
				<option value="one">機械材料</option>
				<option value="two">熱力學</option>
				<option value="three">工程數學</option>
				<option value="four">機械製造</option>
				<option value="five">動力學</option>
			</select>
		</div>
		<div id ="resource">
	
		</div>
	</div>
</body>
<script>
var tmp;
function showHint(str) {
  var xhttp;
  tmp = str;
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
</script>
</html>