<!15. Input two integer values from user and print their sum. Unless the two
values are the same, then print double their sum.
e.g.
(1, 2) → 3
(3, 2) → 5
(2, 2) →88..!>
<?php
$a=(int)readline("Enter first no "); echo "\n";
$b=(int)readline("Enter second no "); echo "\n";
if($a==$b)
{
	echo "The addition multiplied by two is: ",($a+$b)*2;
}
else
{
  	echo "The addition is: ",$a+$b;
}