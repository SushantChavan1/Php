<?php
$a=10;
$p="Rohan";

function show()				
{							
	global $a ,$p;
	echo "<br>";
	echo "$a";
	 echo "<br>";
	echo "$p";

}

show();
?>