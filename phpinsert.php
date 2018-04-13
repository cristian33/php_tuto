<?php
 include ('conex.php');
if (isset($_POST['nombre'] )&& !empty($_POST['nombre']) && isset($_POST ['pw'] )&& !empty( $_POST['pw']) ){
   $con= mysql_connect($host, $user, $pw) or die ("problemas al conectar");
   mysql_select_db("tuto", $con) or die("problema al conectar la data base");
   echo ' ejecuto'."<br/> $_POST[nombre]',' $_POST[pw]";
   mysql_query("insert into pasw (nombre, password ) values('$_POST[nombre]', '$_POST[pw]')", $con);
} else {
    echo 'no se ejecuto esto loco';    
}
?>