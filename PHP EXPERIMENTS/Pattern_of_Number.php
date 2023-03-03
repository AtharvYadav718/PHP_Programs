<html>
<title>Pattern of Number</title>
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
         $k=1;
          for($i=0;$i<$number;$i++)
           {
              for($j=0;$j<=$i;$j++)
                  {
                       echo $k."";
                       $k++;
                   }
              echo"<br>";
           }
     }
?>
