/*Slip9: Write a PHP script for the following: Design a form having a text box and a drop down list containing any 3 separators(e.g. #, |, %, @, ! or comma) accept a strings
 from the user and also a separator. 
a. Split the string into separate words using the given separator. 
b. Replace all the occurrences of separator in the given string with some other separator. 
c. Find the last word in the given string. */


<html>
 <body>
 <form action="#"method="post"> 
Enter a string:<input type="text" name="t1"><br> 
choose a label <select name="sep" id="sep"> 
<option value="#">#</option>
 <option value="!">!</option> 
<option value="@">@</option> 
</select><br> 
<input type="radio" name="r1" value="a">Split The String Using The Seperator<br>  
<input type="radio" name="r1" value="b">Replace The Occurences Of The Seperator With Another Seperator<br>  
<input type="radio" name="r1" value="c">Find The Last Word Of The String<br> <input type="submit"value="submit"> 
</form> </body> </html> 
<?php
 $t1=$_POST['t1'];
 $sep=$_POST['sep'];
 $r1=$_POST['r1']; 
 
switch($r1)  
{  
 case 'a':$m=explode($sep,$t1);  
  foreach($m as $a)
{    
 echo( "$a<br>");  
  }    
break;   
 case 'b':   $cnt=substr_count($t1,$sep); 
  $n=str_replace($sep,"!",$t1,$cnt);   
 echo("After changing separators<br>");    
echo $n;   
break;  
 case 'c':$ar=explode(" ",$t1);
   $cnt=count($ar); 
  echo("This is the last word : ".$ar[$cnt-1]);   
 break; 
} 
?>
