/*Que:-Write a PHP script to 
a)Find mod of the two number.
b)Find the powerof First number raised to the second.
c)Find the sum of first n number(consider 1stnumber as n).
d)Find the Factorial of second number.
Write the separate function for eac of the above operation...*/
<br>
<html>
   <body>
        <form method="post" action="#">
	  Enter Number_1:
<input type="text" name="t1"><br>
	  Enter Number_2:
<input type="text" name="t2"><br>
	<input type="submit" value="OK">
	</form>
   </body>
</html>
<?php
   $a=$_POST["t1"];
   $b=$_POST["t2"];
     MOD($a,$b);
     POWER($a,$b);
     sum($a);
     factorial($b);
  function MOD($a,$b)
{
  $c=$a%$b;
  echo("<br>Mod=".$c);
}

  function POWER($a,$b)
{
  $p=1;
  for($i=1;$i<=5;$i++)
    {
     $p=$p*$a;
    }
  echo("<br>Power=".$p);
}

  function sum($n)
{
  $s=0;
  for($i=1;$i<=$n;$i++)
  $s=$s+$i;
  echo("<br>Sum of first $n number=$s");
}
function factorial($n)
{
  $s=1;
  for($i=1;$i<=$n;$i++)
  $s=$s*$i;
  echo("<br>Factorial of $n number=$s");
}
?>
