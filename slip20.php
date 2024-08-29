<html> 
  <body>  
<form action="#" method="Post">  
Enter Your Choice:<br>  
 <input type="radio" name="ch" value=1> Split an array into chunks<br>
   <input type="radio" name="ch" value=2> Sort array by values without changing key values <br>   
<input type="radio" name="ch" value=3> Filter even elements from array <br>  
 <input type="submit" value="Submit"> 
  </form>   
</body>
  </html>

<?php   
$ch=$_POST['ch'];   
$arr=array('a'=>1,'b'=>20,'c'=>13,'d'=>5,'e'=>18,'f'=>12,'g'=>7,'h'=>8,'i'=>15,'j'=>10);  
   switch($ch)
   {  
 case 1:  
   print_r(array_chunk($arr,2));  
  break;    
  case 2:     asort($arr);  
   echo "Array in ascending order:<br>";     
    print_r($arr);   
  break;  
   case 3:     function even($var)   
  {   
   return $var%2==0; 
         }   
  $br=array_filter($arr,"even"); 
    print_r($br);    
break;   } 
 ?>
