<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
</head>

<body>
    <h1>Tienda de Ropa</h1>
    <h3>Lista de productos</h3>

    <button type="submit"><a href="./index.html">Index</a> </button>
    <button type="submit"><a href="./listar.php">Listar</a> </button>
    <button type="submit"><a href="./agregar.php">agregar</a> </button>
    <button type="submit"><a href="./borrar.php">borrar</a> </button>
    <button type="submit"><a href="./modificar.php">Modificar </a> </button>
    <table style="text-align: center" border="1" >
        <tr>
            <th>ID</th>
            <th>TIP DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
            <th>Imagen</th>
        </tr>


        <?php

        //Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");

        // conexion , nombre de la base de dato -- esto siemre es igual 
        mysqli_select_db($conexion, "tienda");

        // Preparar la orden SQL

        $consulta = "SELECT*FROM TiendaPotrero";


        //Ejecutar la orden y obtener datos

        $datos = mysqli_query($conexion, $consulta);
       

        // Ir Imprimiendo las filas resultantes



        while ($fila = mysqli_fetch_array($datos)) {
        ?>
            <tr>
                <td><?php echo $fila['id']; ?> </td>
                <td><?php echo $fila['ropa']; ?> </td>
                <td><?php echo $fila['marca']; ?> </td>
                <td><?php echo $fila['talle']; ?> </td>
                <td><?php echo $fila['precio']; ?> </td>
                
            </tr>
        <?php } ?>
    </table>


</body>

</html>