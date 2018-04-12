<?php
//con una funcion vamos abrir un fichero. Primer parametro nombre del archivo
//la a lo crea si no esta y si esta escribe al final
$fi= fopen("archivo.txt", "a")
or die ("problemas al crear archivo");
//con la funcion fwrite permite escribir en el archivo

fwrite($fi, "Datos ");
fwrite($fi, "\n");
fwrite($fi, $_POST["t1"]);
fwrite($fi, "\n");
fwrite($fi, $_POST["comentario"]);
fclose($fi);
echo "Datos guardados";
?>