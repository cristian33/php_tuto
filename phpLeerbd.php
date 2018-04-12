<?php
include 'conex.php';

$con= mysql_connect($host, $user, $password, $database) or die("problemas conectar con servidor");

mysql_select_db ($database,$con) or die("problemas al conectar bd");

$registro=mysql_query( "select * from pasw where nombre='$_POST[nombre]' ")or die("no consulto". mysql_error());

while ($reg = mysql_fetch_array($registro)) {
    echo $reg['nombre']. "<br/>";
    echo $reg['password'];
}
?>