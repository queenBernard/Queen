<?php
	// Start the session
		session_start();
?>

<html>
<head>
	<title> LOGIN</title>

<style>
.error {
    color:#FF0000;
	font-family: "Consolas";
	font-size: 12;
}

body {
	margin-top: 0px;
	margin-left: 0px;
}

table {
	font-size:13px;
	font-family:arial;
}

input{
	margin-left: 10px;
	margin-top: 3px;
	margin-bottom: 3px;
}

</style>

</head>

<body>

<?php
	//VARIABLES
	$inputErr = $default = "";
	$error = "Please enter USERNAME and/or PASSWORD";
	$username = $userpassword = "";

	$inputErr = $error;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST['Uname']) and ($_POST['Upassword'])){
			$inputErr = "USERNAME and PASSWORD does not match";
		}

		else if ((($_POST['Uname']) != "Queen") and (($_POST['Upassword']) != "12345")){
			$inputErr = "USERNAME and PASSWORD does not match";
		}

		else if ((($_POST['Uname']) == "Queen") and (($_POST['Upassword']) == "12345")){
			$inputErr = "PASSWORD Accepted..." ;
			$default = "<a href=LoanAmountPascualQueen.php>Loan Page</a>";
		}

		else{
			$inputErr = "Enter USERNAME and PASSWORD";
		}

		$_SESSION["USER"] = ($_POST['Uname']);
	}

	function testInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

	<br><br>

	<center>

		<b><font size=5>RICHARD GWAPO COOPERATIVE INCORPORATED</font></b><br>
		<font size=3> Forever Gwapo St., Mandaluyong City </font><br>
		<font size=3> Telephone #: 143-4456 </font><br>

	<br>
	<hr>
	<br>

	<form method="POST" action=" ">
	
	<b><font size=5>USER NAME & PASSWORD ENTRY:</font></b><br><br>

	<table>
		<tr>
			<td><b>User Name:<b></td>
			<td colspan=3><input type="text" name="Uname" maxlength=5 size=20 value="<?php echo $username; ?>">
			</td>
		</tr>

		<tr>
			<td><b>Password:<b></td>
			<td colspan=3><input type="password" name="Upassword"  maxlenght=5 size=20 value="<?php echo $userpassword; ?>"><br>
		</tr>

	</center>

	</table>

	<br>
	<input type="submit" value="Accept">
	<input type="reset" value="Clear">

	<br><br>
	<br>
	<span class = "error"> <?php echo "<b><i><font-size=3>". $inputErr ."</font></i></b>"; ?> </span>
	<br><br>
	<?php echo "<b><i><font-size=3>". $default ."</font></i></b>"; ?>

	<br>

</body>
</html>

