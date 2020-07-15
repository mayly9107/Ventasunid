<?php
include_once("../conexion/bd.php");
session_start();
 if( $_SESSION['login']) {
  // echo "si estoy logueado";
 }else{
   echo "No estoy logueado";
  header('Location: ../index.php');
 }
 $usuario = $_SESSION["nombre"];
 //echo $usuario;
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <a href="index.php" class="btn btn-info float-right mb-5"> Artículos en venta </a>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <h1>Compras realizadas por: <?php echo $usuario; ?></h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Color</th>
              <th scope="col">Cantidad</th>
              <th scope="col">ELiminar</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $consulta = "select * 
            FROM compras_lgs
            where nombre = '$usuario'";
            $resultado = mysqli_query($mysqli, $consulta);
            while($fila = mysqli_fetch_array($resultado))            
            {
            ?>
            <tr>
                <th name="producto" id="producto"><?php echo $fila["producto"]; ?></th>
                <td name="color" id="color"><?php echo $fila["color"]; ?></td>
                <td name="cantidad" id="cantidad"><?php echo $fila["cantidad"]; ?></td>
                <td><a href="delete_lgs.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
            </tr>
            <?php }  ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>