<?php
    
/*    echo "<h2>This is Associative Array</h2>";
   $a=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"g"=>"sushant");
   for ($i="a";$i<="g";$i++){
 
         echo "<br>$a[$i]";
   }
?>

<?php
        
      echo "<br>";
      echo "<h2>This is Two diemensional Array</h2>";
      $arr = array(array(1,2,3),array(4,5,6));
      
      for ($i=0;$i<2;$i++){

      	for($j=0;$j<3;$j++){

      		echo $arr[$i][$j];
      	}

      	echo "<br>";
      }
?>*/

     $arr = array(array(1,2,3),array(4,5,6));
     foreach ($arr as $i) {
     	
     	foreach($i as $j){

     		echo "$j","  ";
     	}
     	echo "<br>";
     }       
?>