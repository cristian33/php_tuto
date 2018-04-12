<?php

$archi= fopen("archivo.txt", "r") or die ("problemas al abrir");

//feof — Comprueba si el puntero a un archivo está al final del archivo
while (!feof($archi)){//mientras el puntero no llegue al final repetir
  $traer= fgets($archi) ;//traer archivo 
  $sallinea= nl2br($traer);//me hace un salto de linea, sin este estaria todo en una sola linea
  echo "$sallinea";//para mostrar todo
}
?>
