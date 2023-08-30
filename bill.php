<?php
$a=(int)readline("Enter no of units consumed");

if($a>0 && $a<=100)
{
	echo "Your Bill Is: ",$a*10;
}
elseif ($a>100 && $a<=200)
{
    echo "Your Bill Is: ",$a*15;
}
elseif ($a>200 && $a<=300)
{
    echo "Your Bill Is: ",$a*20;
}
else
{
    echo "Your Bill Is: ",$a*25;
}
?>