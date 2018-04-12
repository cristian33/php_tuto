<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SWICHT</title>
    </head>
    <body>
        <?php
        // put your code here
        //Es una estructura que nos sirve para comprobar si una variable tiene distintos valores
        $var=4;
        switch ($var){
            case 4: echo "variables es 4";
                break;
            case 1: echo "variables es 1";
                break;
            default : echo "no es ninguna";
                break;
        
        }
        echo "<br/>". "<hr/>";
         // funciones
         function funcion($v1,$v2){
            $vari = $v1+$v2+4;
            echo "variable ".$vari;
            // return  $vari ;
             
         }
        echo  funcion(3, 1);
        ?>
        
    </body>
</html>
