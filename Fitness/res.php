<?php

echo "<h1>Your Weights:</h1>";
if (isset($_POST["mass"]))
{
	$Mass = $_POST["mass"];
	echo "<h2>Weight: ".$Mass."KG<br></h2>";

} 
else 
{
	$Mass = null;
	echo "Nothing supplied";
}

if (isset($_POST["len"]))
{
	$Length = $_POST["len"];
	echo "<h2>Height: ".$Length."Feet<br></h2>";

} 
else 
{
	$Length = null;
	echo "Nothing supplied";
}

?>

<?php

$ResB = $_POST["mass"]/(($_POST["len"]/3.28)^2);

echo "<h2>Your BMI(Body Mass Index) : ".round($ResB)."%<br></h2>";

?>


<?php

if (is_numeric($_POST["porm"])) {
	# code...
	$POw = $_POST["porm"]/100;


	if (is_numeric($_POST["Squat"]))
	{

		$Sw = round($_POST["Squat"]*1.1307+0.6998)*$POw;
		echo "<h2>Squat: ".$Sw."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["Bench"]))
	{
		$Bw = round($_POST["Bench"]*1.1307+0.6998)*$POw;
		echo "<h2>Bench: ".$Bw."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["OHP"]))
	{
		$Ow = round($_POST["OHP"]*1.1307+0.6998)*$POw;
		echo "<h2>OHP: ".$Ow."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["Deadlift"]))
	{
		$Dw = round($_POST["Deadlift"]*1.1307+0.6998)*$POw;
		echo "<h2>Deadlift: ".$Dw."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["PullUps"]))
	{
		$Pw = round($_POST["PullUps"]*1.1307+0.6998)*$POw;
		echo "<h2>PullUps: ".$Pw."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["Curls"]))
	{
		$Cw = round($_POST["Curls"]*1.1307+0.6998)*$POw;
		echo "<h2>Curls: ".$Cw."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["Rows"]))
	{
		$Rw = round($_POST["Rows"]*1.1307+0.6998)*$POw;
		echo "<h2>Rows: ".$Rw."KG<br></h2>";

	} 
	else 
	{
		
		echo "Nothing supplied";
	}

	if (is_numeric($_POST["TricepExt"]))
	{
		$Tw = round($_POST["TricepExt"]*1.1307+0.6998)*$POw;
		echo "<h2>TricepExt: ".$Tw."KG<br></h2>";

	} 
	else 
	{
		echo "Nothing supplied";
	}
}
else
{
	echo "Please Enter your desired % of One Rep Max";
}


?>



