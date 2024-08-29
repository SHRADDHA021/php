<html>
 <form action="#" method="post">
 Enter a Sentence
<input type=text name=t1><br> 
Enter a word
<input type=text name=t2><br> 
Enter position<input type=text name=t3><br>
 Enter number of characters to remove
<input type=text name=t4><br> 
<input type=submit value="Display Result"> 
</form>
 </html> 

 <?php  
$st=$_POST['t1'];
 $wd=$_POST['t2']; 
$pos=$_POST['t3']; 
$nr=$_POST['t4'];
 $dup_st=$st;   

$str=substr_replace($st,"",$pos,$nr);
 echo "<br>$str<br>";  
$str=substr_replace($st,$wd,$pos,0); 
echo "<br>$str<br>";  
$str=substr_replace($st,$wd,$pos,strlen($wd)); 
echo "<br>$str<br>";  
?>
