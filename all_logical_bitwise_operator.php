<?php
$a=2; 
$b=1;
$c=5;
		echo "BITWISE_OPERATORS";  echo "<br>";
echo "The O/P of Bitwise_and(&) ",$a&$b; echo "<br>";
echo "The O/P of Bitwise_or(|) ",$a|$b;  echo "<br>";
echo "The O/P of Bitwise_xor(^) ",$a^$b; echo "<br>";
echo "The O/P of Bitwise_not(~) ",$a&$b; echo "<br>";
echo "The O/P of Bitwise_leftshift(<<) ",$a<<$b; echo "<br>";
echo "The O/P of Bitwise_Rightshift(>>) ",$a>>$b; echo "<br>";

?>
<html>
<body>
	<form>
		<br> <p><b>THE LOGICAL OPERATORS</b></p>
   First no: <input type="number" name = "number1" placeholder="Enter any no"> <br>
    
   Second no: <input type="number" name = "number2" placeholder="Enter any no"> <br>
   
   Third no: <input type="number" name = "number3" placeholder="Enter any no"> 
    
    
    <p><u>*Choose<br>1 for Logical_and</br> 2 for Logical_or </br>3 for Logical_xor <br>4 for Logical_not</u> </p>
   Choice : <input type="number" name="ch" placeholder="Enter your choice">
    <input type="submit" value= "result"> </br>
   

</form>

<?php

$a=$_GET['number1'];echo "</br>";
$b=$_GET['number2'];
$c=$_GET['number3'];

$ch=$_GET['ch'];
echo "</br>";echo "</br>";echo "</br>";

switch ($ch) {
	case '1':
		Logical_and();
		break;
	
	case '2':
		Logical_or();
		break;

	case '3':
	    Logical_xor();
	    break;

	case '4':
		Logical_not();
		break;

	default:
	    echo "Enter correct choise";
	    break;
}

function Logical_and()
{    global $a,$b,$c;
     echo "The O/P of Logical and(&&): ";
     if($a==$b && $a<$c)
     {
     	echo "Codition satistfied";
     }
     else
     {
     	echo "Condition not Satisfied";
     }
}
    echo "</br>";

function Logical_or()
{    global $a,$b,$c;
     echo "The O/P of Logical or(||): ";
     if($a==$b || $a<$c)
     {
     	echo "Codition satistfied";
     }
     else
     {
     	echo "Condition not Satisfied";
     }
}
    echo "</br>";
 
function Logical_xor()
{    global $a,$b,$c;
     echo "The O/P of Logical xor: ";
     if($a==$b xor $a<$c)
     {
     	echo "Codition satistfied";
     }
     else
     {
     	echo "Condition not Satisfied";
     }
}
    echo "</br>";

function Logical_not()
{    global $a,$b,$c;
     echo "The O/P of Logical not(!): ";
     if(!($a==$b))
     {
     	echo "Codition satistfied";
     }
     else
     {
     	echo "Condition not Satisfied";
     }
}
    echo "</br>";



?>
</body>
</html>