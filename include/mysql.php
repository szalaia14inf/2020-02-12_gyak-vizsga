<?php

	$con=mysql_connect("172.16.5.12","root","");
    
	mysql_set_charset('utf8',$con); 

    mysql_select_db("vevo",$con);
    
?>