<html> 
<title>Given number is Odd </title> 
<body> 
<form method="POST"> 
Enter a number: 
From:<input type="number" name="num1"> 
To:<input type="number" name="num2"> 
<input type="submit" value="submit"> 
</form> 
<?php 
         if($_POST) 
        { 
        $num1=$_POST['num1']; 
        $num2=$_POST['num2']; 
        echo "Range from $num1 to $num2:<br><br>"; 
       for($i=$num1;$i<$num2;$i++) 
      { 
           if($i%2!=0) 
     { 
     echo $i." "; 
     } 
     } 
} 
?>
