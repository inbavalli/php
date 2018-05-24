<?php
//array pop function
$subject=array("tamil","english","maths","science","social");
array_pop($subject);
echo "pop function:";
foreach($subject as $a)
{
	echo $a."<br>";
}
?>
<?php
//array push function
$subject=array("tamil","english","maths","science");
array_push($subject,"social");
echo "push function:";
foreach($subject as $a)
{
	echo $a."<br>";
}
?>
