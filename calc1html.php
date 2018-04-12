<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="calc2php.php" method="post" name="calc">
            <label>coloque los valores<label/> <br /><br /> 
            <input type="text" name="c1"/><br /><br />
            <input type="text" name="c2"/><br /><br />
            <input type="text" name="c3"/><br /><br />
            <label>seleccione la operacion<br /><br /><select name="lista">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">dividir</option>
                
                </select> 
                <br /><br />
                <input type="submit" values="Resolver" />
            <label/>
        </form>
    </body>
</html>
