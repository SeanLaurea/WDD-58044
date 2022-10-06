<html>
	<head>
		<title>My First Web page</title>
	</head>
	<body>
		<?php
			$content = "Welcome to PHP Programming";
			$a = 5;
			$x = 8;
			$y = 2;
			$b = "Hi";
			$c = "again";
			$_msg = 'Hello Again';
			$res = $b = $c;
			define ("value", 100);
				echo value;
			echo "<br>";
			
			echo $content;
			echo "<br>". $a;
			echo "<br>". $_msg;

			echo "<br><br>";
			echo $x+$y. "\n";
			echo "<br>";
			echo $x/$y. "\n";
			echo "<br>";
			
			echo $x**$y. "\n";
			echo "<br>";
			echo $x%$y. "\n";
			echo "<br>";
			if ($x===$y)
			{
				echo "They are identical". "\n";
			}
			else
			{
				echo "They are not identical". "\n";
			}
			
			echo "<br><br>";
			echo $b.= $c;
			
			echo "<br><br>";
			for ($a = 5; $a>=1; $a--)
			{
				echo $a. "\n";
			}

			echo "<br><br>";
			$n=1;    
			while($n<=5)
			{    
				echo $n. "\n";    
				$n++;    
			}    		

			echo "<br><br>";
			$p = 1;
			do
			{
				$p++;
				echo "The number is " . $p . "<br>";
			}
			while($p <= 4);			
		?>
	</body>
</html>