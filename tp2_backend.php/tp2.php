<!DOCTYPE html>
<html lang="ee">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tp2_backend.php</title>

    <?php
    function enter($num)
    {  //Funcion para poner x cantidad de saltos de linea//
        for ($i = 0; $i < $num; $i++) {
            print("<br>");
        }
    }


    $consigna1 = "<strong>1- Crear una variable n y validar que sea un número positivo.</strong>";
    echo $consigna1;
    enter(1);
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    function par($number)
    {
        if ($number % 2 == 0) {

            echo "El numero ", $number,  " es <strong>PAR</strong>";
        } else {

            echo "El numero ", $number, " es <strong>IMPAR</strong>";
        }
    }
    echo par($number1), enter(2);

    $consigna2 = "<strong>2- Crear una variable n y validar que sea un número mayor a 1 y menor a 10</strong>";

    echo $consigna2, enter(1);

    function mayor($numero)
    {
        if ($numero > 0 && $numero < 10) {
            echo "El numero $numero es menor a 10 y mayor a 1", enter(1);
        } elseif ($numero == 10) {
            echo "El numero $numero es 10", enter(1);
        } elseif ($numero <= 0) {
            echo "El numero $numero es menor a 1", enter(1);
        } else {
            echo "El numero $numero es mayor a 10", enter(1);
        }
    }

    echo mayor($number1), enter(2);

    $consigna3 = "<strong>3- Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</strong>";
    echo $consigna3, enter(1);

    function menor($num)
    {
        if ($num > 10) {
            echo "El numero $num es mayor a 10!";
        } elseif ($num < 2) {
            echo "El numero $num es menor a 10!";
        } else echo "el numero $num es mayor a 2 y menor que 10 :( ";
    }

    echo menor($number1), enter(2);

    $consigna4 = "<strong>4- Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales.</strong>";
    echo $consigna4, enter(2);

    function comparar($n, $m)
    {
        if ($n > $m) {
            $resta = ($n - $m);
            $suma = $n + $m; {
                echo "El primer numero es mayor al segundo por lo tanto: ",enter(1),"La suma entre el numero $n y el numero $m es $suma", enter(1), "La resta entre el numero $n y el numero $m es $resta";
            }
        } elseif ($n < $m) {
            $multiplicacion =  $n * $m;
            $division = $m / $n;
            $resto = $m % $n;
            echo "El el segundo numero es mayor al primero por lo tanto: ",enter(1) ,"La division entre $m y $n es igual a $division y su resto es: $resto ", enter(1), "La multiplicacion entre $m y $n es igual a $multiplicacion";
        } else {
            echo "Lo numero son iguales! ";
        }
    }

    echo comparar($number1, $number2), enter(2);

    ?>




</head>

<body style="font-size: 24px;">

    <!-- Creo un for con  un boton para poder aplicarlo a los ejercicios -->

    <form action="tp2.php" method="post">


        <p>NUMERO 1: <input type="number" name="number1" maxlength="9" /></p>
        <p>NUMERO 2: <input type="number" name="number2" maxlength="9" /></p>
        <br>
        <input type="submit" name="enviar" value="enviar">

    </form>

    <!-- http://localhost/Backend-Potrero/tp2_backend.php/tp2.php -->


</body>

</html>