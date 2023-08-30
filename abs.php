#The program demonstrate the scope of variable
<?php
function show()
{
	$a=10;
	echo "Value of a inside the function=";
	echo "$a";
}

show();
echo "</br>";
echo "Here is variable is outside the function: ";
echo "$a";#here we can access the local variable in outside function

?>