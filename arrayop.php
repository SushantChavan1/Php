<?php
    
     $arr=array(1,2,3,4,5,6,7,8,9);
     print_r(array_reverse($arr));
      echo "The length of array=",sizeof($arr),"\n";

     $num=readline("Enter the number to search\n");
     
   
     $i=array_search($num,$arr);
     if($num>sizeof($arr)){

     	echo "The number is not present\n";
     }
     else{

     	echo "The number is present";
     }
?>