
<?php
$str = 'abcdefdvcsdfclkoubbszfffffijklmnopqrstvwxyzg';
$arr = Array();
$abc = Array();
$count = 0;

for($i=0;$i<strlen($str);$i++){

    $arr[$i] = substr($str,$i,1);
    
	//echo $arr[$i];
    $val =  ord($arr[$i]);
    for($k=97;$k<=122;$k++){
    	if($val == $k){
          array_push($abc,$val);
    	}
    	
    }
}

//echo $count;
$a = array_unique($abc);
$count =  count($a);
if($count==26){
echo "all letter";
}else{ 

	echo "not all";
}
?>Microsoft Windows [Version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation.  All rights reserved.

C:\Users\Dell>cd\

C:\>Python27
'Python27' is not recognized as an internal or external command,
operable program or batch file.

C:\>Python27
'Python27' is not recognized as an internal or external command,
operable program or batch file.

C:\>Python27