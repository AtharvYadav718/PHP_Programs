<html>
<title>Pattern of Letters</title>
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
         $alpha=range('A','Z');
          for($i=0;$i<$number;$i++)
           {
              for($j=0;$j<=$i;$j++)
                  {
                       echo $alpha[$i];
                   }
              echo"<br>";
           }
     }
?>
