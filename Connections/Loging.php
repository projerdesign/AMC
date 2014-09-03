<?php // datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','storybox_lista');
define('DB_USER','storybox_admin');
define('DB_PASS','%202SSt*Z%kJ');

$conex = mysql_connect (DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$conex);
?>
