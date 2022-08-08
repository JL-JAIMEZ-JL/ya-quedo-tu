<?php
include('db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Form</title>
</head>
<body>
  <div>
    <header class="enca">
      <div class="warp"></div>
<div class="logos">
  Hector Jaimez
</div>
<nav>
 <a href="mostar.php">Tabla</a>
</nav>
</header>


<div class="container">
     
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

<?php
$sql="SELECT * FROM usuarios";
$result = mysqli_query ($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){




?>


      <tr>
        <td><?php echo $mostrar['ID'] ?></td>
        <td><?php echo $mostrar ['Nombre'] ?></td>
        <td><?php echo $mostrar ['Apellido'] ?></td>
        <td><?php echo $mostrar ['Dirección'] ?></td>
        <td><?php echo $mostrar ['Correo'] ?></td>
        <td><?php echo $mostrar ['Contraseña'] ?></td>

        <td>
<a href="editar.php?id=<?php echo $mostrar['ID']?>">Editar</a>
</td>
   <td>
<form action="eliminar.php?id=<?php echo $mostrar['ID']?>" method="post">
  <input type="hidden" value="<?php  echo $mostrar ['ID']?>" name="txtID"readonly>
  <td><input  class="btn btn-danger"type="submit" value="Eliminar" name="btnEliminar"></td>
</form>
</td>


  
      </tr>
      
    </tbody>
    <?php
}
    ?>
  </table>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>