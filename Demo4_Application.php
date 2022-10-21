<html>
<body>
<?php

			//Spamming hello
			for ($x = 0; $x < 15; $x ++)
			{
				if($x==11)
				{
				break;
				}
				echo " Hello; $x <br>";
			}
			echo "<br><br>";
			
			//Less than 10 but not less than 3
			for ($x = 3; $x < 10; $x ++)
			{
				if($x==11)
				{
				break;
				}
				echo "Spamming; $x <br>";
			}
?>
</body>
</html>