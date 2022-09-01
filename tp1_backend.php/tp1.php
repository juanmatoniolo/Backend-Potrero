<!-- Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios: -->
<!-- http://localhost/tp1_backend.php/tp1.php   -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1_backend.php</title>
</head>

<body style="font-size: 22px;">

<!--1. Imprima por pantalla: “Hola mundo”.  -->
<?php 
print "<p>1 -Imprima por pantalla: “Hola mundo”</p>";
print "<br>";
echo "Hola Mundo";
print "<br>";
print "<hr>";

//2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
$consigna1= "2- Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.”.";
$saludo  = "Hola mundo";
print "<p>$consigna1</p> <br>";
print "<h3>$saludo</h3>" ;
print"<hr>";

//3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera
$consigna3 = "3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera";
print "$consigna3";
$variable1 = 20;
$variable2 = 2; 
$resta= $variable1 - $variable2;
$division= $variable1 / $variable2;
$resto= 20 % 2; 

print "<p>La Variable 1 es $variable1 <br>La Variable 2 es $variable2</p> <br>" ;
print"La <strong>suma</strong> de 20 + 2 es igual a: ";
echo $variable1 + $variable2;
print "<p>La <strong>resta</strong> entre la V1 y la V2 es: $resta </p>";
print "<p>La <strong>division</strong> entre la Variable 1 y la Variable 2 es: $division </p>";
print "<p>El <strong>resto</strong> de la disivision entre la V1 y la V2 es: $resto </p>";
print"<hr>";

//4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla. 
$consigna4 ="4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.";
print "$consigna4";

function GaF($grados){
    $resultado= ($grados * ( 9/ 5)) +32;
    print("$grados grados °C son $resultado grados °F"); 
}
echo "<br/>";
echo GaF(20);
print("<br> <hr>");


//5. Implementar algoritmos que permitan: a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm. b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm. 
function enter($num) {  //Funcion para poner x cantidad de saltos de linea//
    for($i = 0; $i < $num; $i++)
    {
        print("<br>");
    }
}

$consigan5= "5. Implementar algoritmos que permitan: a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm. b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm. ";

echo $consigan5, enter(2);
print("A- Dado un rectangulo de baso 18cm y altura 12 cm. Calcular su <strong>Area</strong> y su <strong> Perimetro</strong>");
enter(2);
print("B -Calcular el <strong>perímetro</strong> y el <strong>área</strong> de un círculo dado que su radio es de 30cm.");
enter(2);

function per_rectangulo($lado1, $lado2){
    $resultado= ($lado1*2)+($lado2*2);
    print("El perimetro de un rectangulo de base $lado1 cm y de altura $lado2 cm es de: $resultado cm");
}
function per_Circunferencia($radio){
    $resultado= 2 * 3.14 * $radio;
     print("El perimetro de un circulo de  $radio cm de radio es de: $resultado");
}
function area_rectangulo($base, $altura){
    $resultado= ($base * $altura);
    print("El area de un rectangulo de base $base cm y de altura $altura cm es de: $resultado cm"); 
}
function area_circunferencia($radio){
    $resultado = 3.14 * $radio *$radio;
    print("El area de un circulo de $radio cm  de radio es de: $resultado cm");
}

echo "A- ", per_rectangulo(18,12), enter(1), area_rectangulo(18,12), enter(2), "B-", per_Circunferencia(30), enter(1) , area_circunferencia(30);
?>
</body>

</html>