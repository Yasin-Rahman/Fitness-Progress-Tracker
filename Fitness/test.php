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

echo "".$uname;
echo "<br>";
echo "".$pass;

/*$sql = "INSERT INTO users(Name,Password) VALUES('robi','1111')";
$qry_name=mysqli_query($conn,$sql);
echo $qry_name;

$sql2 = "Select * from users";
$res = mysqli_query($conn,$sql2);
if (!$res) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo "<br>";
while($row = mysqli_fetch_array($res)) {
echo $row['Name']."<br>";
}*/

?>