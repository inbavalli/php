<?php
//implode function
echo "<br>before implode<br>";
$arr=array("tamil","english","maths","science");
var_dump($arr);

echo"<br>after implode<br>";
$res_arr=implode("#",$arr);
var_dump($res_arr);

echo"<br>after explode<br>";
var_dump($res_arr);
$res_op=explode("#",$res_arr);
var_dump($res_op);
?>
