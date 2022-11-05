<html>
	<head>
		<title>LONG QUIZ 2</title>
	</head>
	<body>
		<h1>Laurea, Sean Cryst Nicolo D.</h1>
		<h2>Student Number: 202014618</h2>
		<?php
				echo "Problem 1: <br>";
				$salary_rate = 600;
				$salary = 15 * $salary_rate;
				$taxable_amount = 0.30 * $salary;
				$net_pay = $salary - $taxable_amount;

				//output
				echo "Salary Rate: ".$salary_rate." /day <br>";
				echo "Salary: " .$salary."<br>";
				echo "Taxable amount: " .$taxable_amount."<br>";
				echo "Net pay: " .$net_pay."<br><br>";

				echo "Problem 2: <br><br>";
				$sum = 0;
				for($x=1; $x<=50; $x++)
				{
					$sum +=$x;
				}
				echo "The sum of all integers ranging from 1-50 is: ".$sum."<br>";
		?>
	</body>
</html>