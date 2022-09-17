<?php  


$mystr = "23,8,5,34,6";
$sum=0;


  foreach (explode(',',$mystr) as $val )  
 {  
    $sum = $sum + $intval(&val);
  
  }  
 echo "Sum  =" .$sum;  
 ?>