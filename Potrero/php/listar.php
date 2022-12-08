<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <link
      rel="shortcut icon"
      href="./Imagenes/favicon/cerveza.png"
      type="image/x-icon"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>index tp final</title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
      <!--PARA CAMBIA EL COLOR REMPLAZAR  "navbar-dark bg-dark" POR OTRO-->
      <div class="container">
        <a class="navbar-brand" href="../index.php"
          ><strong>EL CAIRO </strong></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="../html/login.html"
                >INGRESAR</a
              >
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href=""
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                BEBIDAS
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="../pestanias/cervezas.php"
                    ><strong>CERVEZAS</strong></a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/tragos.php"><strong>TRAGOS</strong></a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/sin-alcohol.php"
                    ><strong>SIN ALCOHOL</strong></a
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                COMIDAS
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="../pestanias/hamburguesas.php"
                    ><strong>HAMBURGUESAS</strong></a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/sanguches.php"
                    ><strong>SANGUCHES</strong></a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/pizzas.php"><strong>PIZZAS</strong></a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/rebozados.php"
                    ><strong>REBOZADOS</strong></a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/tentempies.php"
                    ><strong>TENTEMPIES</strong></a
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                POSTRES
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="../pestanias/helados.php"><strong>HELADOS</strong></a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pestanias/tortas.php"><strong>TORTAS</strong></a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                NUETRAS REDES
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="https://www.instagram.com/juanmatoniolo/"
                    ><strong>Instagram</strong>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://www.facebook.com/juanmanuel.toniolo/"
                    ><strong>Facebook</strong></a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="https://wa.me/+5493412275598"
                    ><strong>WhatsApp</strong></a
                  >
                </li>
              </ul>
            </li>
          </ul>

          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Buscar"
            />
            <!-- Boton buscar -->
            <form action="" method="post">
              <button class="btn btn-outline-success" type="submit">
                Buscar
              </button>
            </form>
          </form>
        </div>
      </div>
    </nav>

  <button><a href="../php/listar.php">LISTAR</a></button>
  <button><a href="../html/agregar.html">AGREAGR</a></button>
  <button><a href="../index.php">INICIO</a></button>

     <!-- LISTAR LOS ELEMENTOS -->
     <table style="text-align: center" border="3px" class="table">
        <tr>
            <th>ID</th>
            <th>TIPO</th>
            <th>NOMBRE</th>
            <th>PRODUCTO</th>
            <th>DESCRIPCION</th>
            <th>FOTO</th>
            <th>PRECIO</th>
        </tr>


        <?php

        //Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");

        // conexion , nombre de la base de dato -- esto siemre es igual 
        mysqli_select_db($conexion, "tp_final");

        // Preparar la orden SQL

        $consulta = "SELECT*FROM nav";


        //Ejecutar la orden y obtener datos

        $datos = mysqli_query($conexion, $consulta);


        // Ir Imprimiendo las filas resultantes



        while ($fila = mysqli_fetch_array($datos)) {
        ?>
            <tr>
                <td><?php echo $fila['id']; ?> </td>
                <td><?php echo $fila['tipo']; ?> </td>
                <td><?php echo $fila['nombre']; ?> </td>
                <td><?php echo $fila['producto']; ?> </td>
                <td><?php echo $fila['descripcion']; ?> </td>
                <td><img src="data:image/jpg;base64, <?php echo base64_encode($fila['foto']) ?>" alt="" width="100px" height="100px"></td>
                <td><?php echo $fila['precio']; ?> </td>
                <td><a href="modificar.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
                <td><a href="borrar.php?id=<?php echo $fila['id']; ?>">Borrar</a></td>
                <td><a href="foto.php?id=<?php echo $fila['id']; ?>">Cambiar foto</a></td>
            </tr>
        <?php } ?>
    </table>

     
  </body>
</html>
