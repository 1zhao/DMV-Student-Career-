<?php

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');//127.0.0.1
define('DB_NAME', 'dmv_c');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die('Cound not connect to sql'.mysqli_connect_error() );

?>
