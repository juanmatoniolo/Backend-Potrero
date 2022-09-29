<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad de array</title>
</head>

<body style="font-size: 24px;">
    <?php

    //FUNCIONES: 
    function br($a)
    {
        for ($i = 1; $i <= $a; $i++) {
            print("</br>");
        }
    }

    function hr($a)
    {
        for ($i = 1; $i <= $a; $i++) {
            print("<hr>");
        }
    }

    //Actividad 1: 
    $consigna1 = "1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro";
    echo $consigna1, br(2);

    $numeros_pares = [];

    for ($i = 0; $i <= 10; $i++) { {

            $numeros_pares[$i] = $i + $i;
            print(" $numeros_pares[$i] -");
        }
    }

    echo hr(1);

    //ACTIVIDAD 2:
    $consigna2 = "2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r().
    ";
    echo $consigna2, br(2);

    $arreglo = ["Pedro", "Ana", 34, 1];
    print_r($arreglo);
    hr(1);

    //ACTIVIDAD 3: 

    $consigna3 = "3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455";

    echo $consigna3, br(2);

    $arrelgo_asociativo = [
        'nombre' => "Pedro",
        'apellido' => "Torres",
        'direccion' => " Av. Mayor 3703",
        'telefono' => 1122334455
    ];

    print_r($arrelgo_asociativo);
    echo br(1), hr(1);

    //ACTIVIDAD 4: 
    $consigna4 = "4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.";
    echo $consigna4, br(2);

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];

    foreach ($ciudades as $indice => $valor) {
        print("<p>Laciudad en el $indice es: $valor</p> ");
   
    }
    hr(1);

    //ACTIVIDAD 5: 

$consigna5 = "5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD."; 
echo $consigna5, br(2);

$arreglo_con_indices = ['MD'=> "Madrid", 'BR' => "Barcelona", 'LON' => "Londres", 'NY'=>"New York",'LA'=> "Los Angeles", 'CCGC'=> "Chicago"];

foreach($arreglo_con_indices as $indice => $valor){
print("$indice es $valor <br>"); 
}




    ?>

</body>

</html>