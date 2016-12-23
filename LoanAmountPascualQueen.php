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

table, th, td{
	font-size:13px;
	font-family:arial;
	border-style: solid;
    border-width: 1px;
    border-color: "gray";
}

th, td {
    padding: 10px;
    padding-left: 10px;
}

input{
	margin-left: 20px;
	margin-top: 5px;
	margin-bottom: 5px;
}

table {
	font-size:13px;
	font-family:arial;
	width: 300px;
}

</style>

</head>

<body>
	<form action ="LoanInformationPascualQueen.php" method="post">
	
	<?php
		//VARIABLES
		$loan = $interest = $total = $monthly = $due = "";
		$coop = "coop";
		$LoanAmount = $percent = "";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$loan = $_POST['loan'];
			$monthly = $_POST['month'];

			//OFFICER

			//5,0000
			if ($loan == "5")
			{
				$percent = ".05";
				$LoanAmount = "5,000.00";
				$coop = "Y";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "875.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "437.50";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "218.75";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//10,0000
			else if ($loan == "10")
			{
				$percent = ".05";
				$LoanAmount = "10,000.00";
				$coop = "Y";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,750.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "875.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "437.50";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//15,0000
			else if ($loan == "15")
			{
				$percent = ".05";
				$LoanAmount = "15,000.00";
				$coop = "Y";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "2,625.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,312.50";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "656.25";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//20,0000
			else if ($loan == "20")
			{
				$percent = ".05";
				$LoanAmount = "20,000.00";
				$coop = "Y";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "3,500.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,750.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "875.00";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//25,0000
			else if ($loan == "25")
			{
				$percent = ".05";
				$LoanAmount = "25,000.00";
				$coop = "Y";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "4,375.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "2,187.50";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,093.75";
					$total = round(($LoanAmount + $interest),2);
				}
			}

		//NOT OFFICER

			//5,0000
			if ($loan == "5")
			{
				$percent = ".10";
				$LoanAmount = "5,000.00";
				$coop = "N";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "875.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "437.50";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "218.75";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//10,0000
			else if ($loan == "10")
			{
				$percent = ".10";
				$LoanAmount = "10,000.00";
				$coop = "N";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,750.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "875.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "437.50";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//15,0000
			else if ($loan == "15")
			{
				$percent = ".10";
				$LoanAmount = "15,000.00";
				$coop = "N";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "2,625.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,312.50";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "656.25";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//20,0000
			else if ($loan == "20")
			{
				$percent = ".10";
				$LoanAmount = "20,000.00";
				$coop = "N";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "3,500.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,750.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "875.00";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			//25,0000
			else if ($loan == "25")
			{
				$percent = ".10";
				$LoanAmount = "25,000.00";
				$coop = "N";

				if ($monthly == "6"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "4,375.00";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "12"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "2,187.50";
					$total = round(($LoanAmount + $interest),2);
				}
				else if ($monthly == "24"){
					$interest = round(($LoanAmount * $percent),2);
					$due = "1,093.75";
					$total = round(($LoanAmount + $interest),2);
				}
			}

			$_SESSION["LA"] = $LoanAmount;
			$_SESSION["I"] = $interest;
			$_SESSION["M"] = $monthly;
			$_SESSION["MD"] = $due;
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

	<h2><b>LOAN AMOUNT</b></h2>

	
	<table>
		<tr>
			<td>
				<b>Select Loan Amount:</b>
			</td>
		</tr>

		<tr>
			<td>
				<input type="radio" name="loan" value="5">Php 5,000.00<br>
				<input type="radio" name="loan" value="10">Php 10,000.00<br>
				<input type="radio" name="loan" value="15">Php 15,000.00<br>
				<input type="radio" name="loan" value="20">Php 20,000.00<br>
				<input type="radio" name="loan" value="25">Php 25,000.00<br>
			</td>
		</tr>

		<tr>
			<td>
				<b>Terms of Payment:</b>
			</td>
		</tr>

		<tr>
			<td>
				<input type="radio" name="month" value="6">6 mos.
				<input type="radio" name="month" value="12">12 mos.
				<input type="radio" name="month" value="24">24 mos.
			</td>
		</tr>

		<tr>
			<td>
				<b>Cooperative Officer?</b>
			</td>
		</tr>

		<tr>
			<td>
				<input type="checkbox" name="coop" value="Y">Yes
			</td>
		</tr>
	</table>

	<br>

	<input type="submit" value="Confirm Loan">
	<input type="reset" value="Clear All">

	</center>

</body>
</html>