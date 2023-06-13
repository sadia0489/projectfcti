
<?php
$admin_dbcon=mysqli_connect("localhost","root","","projectfcti");
if(isset($_POST['submit'])){
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	
	$query=mysqli_query($admin_dbcon,"INSERT INTO `userproject`(`sname`, `fname`, `mname`) VALUES ('$sname','$fname','$mname')");

  if($query){
	  echo"
	  <script>
		alert('Successfully Data Inserted');
		</script>
		
		";
	}
	
}


?>











<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<form method="POST">
 <input type="text" placeholder="name" name="sname"/><br/>
 <input type="text" placeholder="fathers name" name="fname"/><br/>
 <input type="text" placeholder="mothers name" name="mname"/><br/>
 <input type="submit" value="submit" name="submit"/>
	</form>
</body>
</html>