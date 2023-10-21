// Even Odd Program in PHP
<?php  
 $number=1233456;  
 $result='';
 
 // this conditional structure may be replaced by:  $result = $number % 2 == 0 ? 'Even' : 'Odd';
 if($number % 2 == 0)  
 {  
   $result = 'Even';   
 }  
 else  
 {  
   $result = 'Odd';
 }
 
 echo "$number is $result Number";  
?>
