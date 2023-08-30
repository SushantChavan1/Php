<html>
<body>
	
    <form>
	<input type="number" name = "number1" placeholder="Enter Number">
    <input type="submit"  value= "Check Prime or Not" >
</form>

<?php

$a=$_GET['number1'];
$c=0;
for($i=1;$i<=$a;$i++)
{
    if($a%$i==0)
    {
        $c++;
    }
}
    if($c==2)
    {
        echo "The $a is a Prime number";
    }
    else 
    {
        echo "The $a is not a Prime number";
    }

?>
</body>
</html>