<?php
$a = 'reverse';

function Reve($a){
    $str = ' ';
   for($i=6;$i>0;$i--){
       $str = $str.$a[$i];   
   }
   return $str;
}

 echo Reve($a);

?>