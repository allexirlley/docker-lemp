<?php

$cn = mysql_connect(getenv('MYSQL_PORT_3306_TCP_ADDR'), 'root', getenv('MYSQL_ENV_MYSQL_ROOT_PASSWORD'));

if (!$cn)
  die('Not connected : ' . mysql_error());

$db_selected = mysql_select_db(getenv('MYSQL_DATABASE'), $cn);
if (!$db_selected)
    die ('Can\'t use foo : ' . mysql_error());

echo "Hello, Docker!"; 

?>
