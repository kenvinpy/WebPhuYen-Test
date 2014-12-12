<?php
$db_host = "localhost"; //host
$db_name	= 'btl';// database
$db_username	= 'root';
$db_password	= '';
$con=mysql_connect("{$db_host}","{$db_username}","{$db_password}")or die("Không kết nối được");
$db=mysql_select_db("{$db_name}",$con) or die("KHông kết nối được CSDL cần");
//echo(" da chen dc file");
?>