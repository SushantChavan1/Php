<--1. Write a PHP menu driven program using switch case to perform all
Arithmetic operations on two Integers-->
<html>
<body>
	<form>
	First no: <input type="number" name = "number1" placeholder="Enter any no">
    <input type="submit"  value= "result" >
   Second no: <input type="number" name = "number2" placeholder="Enter any no">
    <input type="submit" value= "result">
    
    <p><u>*Choose<br>1 for Addition</br> 2 for Subtraction </br>3 for Multiplication <br>4 for Division</u> </p>
   Choice : <input type="number" name="ch" placeholder="Enter your choice">
   

</form>

<?php
#echo "The no is",$_GET['number'];
$a=$_GET['number1'];
#echo "The 1st no : $a";
echo "</br>";
	$b=$_GET['number2'];
#echo "The 2st no : $b";
$ch=$_GET['ch'];
echo "</br>";echo "</br>";

echo "</br>";

switch ($ch) {
	case '1':
		add();
		break;
	
	case '2':
		sub();
		break;

	case '3':
	    multi();
	    break;

	case '4':
		div();
		break;

	default:
	    echo "Enter correct choise";
	    break;
}

function add()
{    global $a,$b;
     echo "The addition is:" ,$a+$b;
}
    echo "</br>";

 function sub()
{    global $a,$b;
     echo "The subtraction is:" ,$a-$b;
}
    echo "</br>";

 function multi()
{    global $a,$b;
     echo "The multiplication is:" ,$a*$b;
}
    echo "</br>";

 function div()
{    global $a,$b;
     echo "The division is:" ,$a/$b;
}
    echo "</br>";

?>
</body>
</html>