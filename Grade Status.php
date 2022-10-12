<html>
<body>
<?php
//Raw Grade Status
			echo "<br>";
			$first_student = "Laurea";
			$first_grade = 95;
			$second_student = "Sean";
			$second_grade = 66;

			if ($first_grade >= 70) 
			{
			echo "Name: ".$first_student . "<br>Grade: ". $first_grade . ", Passed <br>";
			} 
			elseif (($first_grade >=60) && ($first_grade <=69))
			{
				echo "Name: ".$first_student . "<br>Grade: ".$first_grade . ", Remedial <br>";
			}
			else
			{
				echo "Name: ".$first_student . "<br>Grade: ".$first_grade . ", Failed <br>";
			}

			if ($second_grade >= 70) 
			{
			echo "Name: ".$second_student . "<br>Grade: ". $second_grade . ", Passed <br>";
			} 
			elseif (($second_grade >=60) && ($second_grade <=69))
			{
				echo "Name: ".$second_student . "<br>Grade: ".$second_grade . ", Remedial <br>";
			}
			else
			{
				echo "Name: ".$second_student . "<br>Grade: ".$second_grade . ", Failed <br>";
			}

?>
</body>
</html>