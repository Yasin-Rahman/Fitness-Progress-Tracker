<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = "Fitness";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
	header("Location:login.php?id=Cant connect");
}

$uname = $_POST['uname'];
$pass  = $_POST['psw'];
//echo "".$uname."".$pass;
$qry   = mysqli_query( $conn,"SELECT * FROM users WHERE Name='$uname'");
if(!$qry) {
	header("Location:login.php?id=Query Failed");
} else {
	$row=mysqli_fetch_array($qry);

	if($uname==$row['Name'] && $pass==$row['Password']) {
		header("Location:input.php?id=$uname&$pass");
	} else if($uname===$row['Name'] && $pass!==$row['Password']){
		header("Location:login.php?id=Wrong Password");
	}
	else {
		$sql = "INSERT INTO users(Name,Password) VALUES('$uname','$pass')";
		$qry_name=mysqli_query($conn,$sql);
		header("Location:login.php?id=New User Created");
	}
}

?>

