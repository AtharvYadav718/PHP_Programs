<html>
<title>Pattern of *</title>
<body>
<form method="post">
Enter a Number:
<input type="number" name="number">
<input type="submit" name="Submit">
</form>
</body>
</html>
<?php
   if($_POST)
    {
       $number=$_POST['number'];
          for($i=0;$i<=$number;$i++)
           {
              for($j=1;$j<=$i;$j++)
                  {
                       echo"*";
                   }
              echo"<br>";
           }
     }
?>


