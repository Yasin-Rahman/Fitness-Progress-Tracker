<!DOCTYPE html>
<html>
<head>
	<title>My fitness records</title>
	<link rel="stylesheet" type="text/css" href="logintheme.css">
</head>
<body>
	<h2>Input your Weight,Height & lifted weight Below:</h2>
	<form id="frm" method="POST" action="res.php">
		Weight: <input type="text" name="mass"><br>
		Lenght: <input type="text" name="len"><br>
		Squat: <input type="text" name="Squat"><br>
		Bench: <input type="text" name="Bench"><br>
		OHP: <input type="text" name="OHP"><br>
		Deadlift: <input type="text" name="Deadlift"><br>
		PullUps: <input type="text" name="PullUps"><br>
		Curls: <input type="text" name="Curls"><br>
		Rows: <input type="text" name="Rows"><br>
		TricepExt: <input type="text" name="TricepExt"><br>
		% of ORM: <input type="text" name="porm"><br>
		<input type="submit">
	</form><br>

	<p id="show">ORM Formula : (4.6RM X 1.1307) + 0.6998</p><br>
	<p id="bmifor">BMI Formula = kg/m2</p>
</body>
</html>