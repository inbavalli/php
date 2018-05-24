<?php
//array slice function
$sum=array(10,20,30,40,50);
$s=array_slice($sum,1);
echo "<br>array slice:";
foreach($s as $a)
echo $a."<br>";
?>
<?php
//array splice function
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
?>
