<!DOCTYPE html>
<html>
<body>
<?php
$x = 5; // global scope
 		function myTest() 
{
  				echo "<p>Variable x inside function is: $x</p>";
				// using x inside this function will generate an error 
} 
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>
</body>
</html>
