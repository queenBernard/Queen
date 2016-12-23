<?php
	// Start the session
		session_start();
?>

<html>
<head>
	<title>Loan - PHP</title>

<style>
body {
	margin-top: 0px;
	margin-left: 0px;
}
</style>

</head>

<body>
	<form action =" " method="post">
	
	<br>
	<br>

	<center>

		<b><font size=5>RICHARD GWAPO COOPERATIVE INCORPORATED</font></b><br>
		<font size=3> Forever Gwapo St., Mandaluyong City </font><br>
		<font size=3> Telephone #: 143-4456 </font><br>

	<br>
	<hr>
	<br>
	<?php echo "<b>". $_SESSION["USER"]  ."</b>"; ?>
	<?php echo "<b>". round($_SESSION["LA"],2) ."</b><br>"; ?>
	<?php echo "<b>". round($_SESSION["I"],2)  ."</b><br>"; ?>
	<?php echo "<b>". round($_SESSION["M"],2)   ."</b><br>"; ?>
	<?php echo "<b>". round($_SESSION["MD"],2) ."</b><br>"; ?>
	

	<br>
	<br>
	<br>

	<input type="submit" value="Submit">
	<input type="button" value="Back" onClick="history.go(-1);">

	</center>

</body>
</html>