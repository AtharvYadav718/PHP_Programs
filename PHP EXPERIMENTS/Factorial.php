<html>
<head>
<title>Factorial Program Using loop in PHP</title>
</head>
<body>
<form method="POST">
   Enter a Number:
  <input type="number" name="number" id="number">
  <input type="Submit" name="Submit" value="Submit">
  </form>
  <?php
     if($_POST)
	 {
	   $fact=1;
	   $number=$_POST['number'];
	   echo"factorial of $number:<br><br>";
	   for($i=1;$i<=$number;$i++)
	   {
	    $fact=$fact*$i;
		
	   }
	   echo $fact,"<br>";
	 }
	 ?>
	</body>
	</html>	
