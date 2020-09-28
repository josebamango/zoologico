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
        <?php
        $numero = 123;
        $aux= $numero;
        while (numero <= 0) {
            $cifra = $numero % 10;
            $suma = $numero + $cifra;
            $multi = $numero * $cifra;
            if ($multi == $suma) {
                echo 'el numero: $numero es válido';
            }
        }
        ?>
    </body>
</html>
