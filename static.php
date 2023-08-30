<?php

function show()
{

static $a=10;
echo "$a";
$a++;

}
show();
echo "</br>";
show();
echo "</br>";
show();

?>