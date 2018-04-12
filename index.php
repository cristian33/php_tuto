<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>INDEX</title>
    </head>
    <body>
        <?php
        // put your code here
        //while repetir una accion mientras sea vedadera, si es verdadera va a entrar
        $suma=9;
        while($suma <= 13){
            echo  $suma. "<br/>";
              $suma++;
        }
        
        
        //do while. Este permite ingresar una vez al codigo y no se cumple la condicion no 
        //entra mas, si es verd va seguir
        $sumas=9;
        do{
            $sumas++;
            echo "correcto ".$sumas;
             
        }while ( $sumas<9);
        echo "<hr>";
        
        $pred= array("elem1","elem2");
        foreach ($pred as $elem){
            echo $elem."<br/>";
        }
        ?>
    </body>
</html>
