<?php

define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_NAME','testing');
define('DB_USER','root');
define('DB_PASS','');
 
try
{ 
	$connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
	$db = new PDO($connect_str,DB_USER,DB_PASS);
 
	if($db->errorCode() != 0000) {
		$error_array = $db->errorInfo();
	    echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
	}
}
catch(PDOException $e)
{
	die("Error: ".$e->getMessage());
}