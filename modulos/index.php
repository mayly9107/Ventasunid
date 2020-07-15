<?php
include_once("../conexion/bd.php");
session_start();
 if( $_SESSION['login']) {
  // echo "si estoy logueado";
 }else{
   echo "No estoy logueado";
  header('Location: ../index.php');
 }
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
        <a href="compras_lgs.php" class="btn btn-info float-right mb-5">Compras realizadas</a> 
      </div>
      
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Color</th>
              <th scope="col">Stock</th>
              <th scope="col">Precio</th>
              <th scope="col">Agregar artículo</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $consulta = "select cp.id, cp.precio, p.nombre, c.nombre as color, cp.stock
            FROM cproductos_usr cp
            INNER JOIN productos_usr p on cp.id_producto=p.id
            INNER JOIN colores_prd c on cp.id_color=c.id";
            $resultado = mysqli_query($mysqli, $consulta);
            while($fila = mysqli_fetch_array($resultado))            
            {
            ?>
            <tr>
                <th name="nombre" id="nombre"><?php echo $fila["nombre"]; ?></th>
                <td name="color" id="color"><?php echo $fila["color"]; ?></td>
                <td name="stock" id="stock"><?php echo $fila["stock"]; ?></td>
                <td name="precio" id="precio">$<?php echo $fila["precio"]; ?></td>
                <td><a href="form_cmp.php?id=<?php echo $fila['id']; ?>">Agregar</a></td>
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