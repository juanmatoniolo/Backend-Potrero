<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp4</title>
</head>

<body style="font-size: 23px;">


    <?php
    // direccion: http://localhost/backend-Potrero/tp4_backend.php/tp4.php

    //Consignas: 
    $consigna1 = "1. Mostrar los números del 1 al 100 <br>";
    $consigna2 = "2. Mostrar los números del 100 al 1.<br>";
    $consigna3 = "3. Mostrar los números pares del 1 al 100.<br>";
    $consigna4 = "4. Mostrar los números impares del 1 al 100.<br>";
    $consigna5 = "5. Mostrar la suma de los números de 1 a 20.<br>";
    $consigna6 = "6. Mostrar la suma de números pares de 1 a 20<br>";

    //Funciones 
    function enter($n)
    {
        //Funcion para poner x cantidad de saltos de linea//
        for ($i = 0; $i < $n; $i++) {
            print("<br>");
        }
    }

    function linea($n)
    {
        //pone una linea para separar una actividdad de la otra
        for ($i = 1; $i <= $n; $i++) {
            print("<strong><hr></strong>");
        }
    }
    // Actividad 1: 
    echo $consigna1;

    for ($i = 1; $i <= 100; $i++) {
        print("$i-");
    };

    echo enter(2), linea(1);

    //Actividad 2: 
    echo $consigna2;
    $i = 100;
    do {
        print("$i-");
        $i--;
    } while ($i > 0);

    echo enter(2), linea(1);


    //Actividad 3: 
    echo $consigna3;
    $n = 100;
    function pares($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            if (($i % 2) == 0) {
                echo $i, "-";
            }
        }
    }
    echo pares($n);
    echo enter(2), linea(1);

    //Actividad 4
    echo $consigna4;
    function impares($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            if (($i % 2) == 1) {
                echo $i, "-";
            }
        }
    }

    echo impares($n), enter(2), linea(1);

    echo $consigna5;
    $num = 20;
    $suma = 0;
    for ($i = 1; $i < $num; $i++) {
        echo $i;
        $suma = $suma + $i;
        echo " + ";
    }
    
    echo $num, " = ", $suma,  enter(2), linea(1), $consigna6;
    //Actividad 6
    $suma2 = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($i % 2 == 0) {
            echo $i;
            $suma2 = $suma2 + $i;
            echo " + ";
        }
    }
    echo $num, " = ", $suma2,  enter(2), linea(1);

    ?>

</body>

</html>