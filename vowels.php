#this program demonstrete the  vowels in string
<?php
$a=readline("Enter Your sting ");
echo "YOUR VOWELS IN STRING";
echo "\n";
for($i=0;$i<strlen($a);$i++)
{
	if($a[$i]=='a' || $a[$i]=='e' || $a[$i]=='i' || $a[$i]=='o' || $a[$i]=='u' || $a[$i]=='A' || $a[$i]=='E' || $a[$i]=='I' || $a[$i]=='O' || $a[$i]=='U')
	{
		echo "$a[$i]";
		echo "\n";
	}
}