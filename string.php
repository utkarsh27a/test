<?php
$str = 'abcdefdfvcsdfclkoubbsdsasafmkjnkwq';
$arr = Array();

for($i=0;$i<strlen($str);$i++){

    $arr[$i] = substr($str,$i,1);
    
	echo $arr[$i]."<br>";


}





?>