<?php include ("db.php"); ?>
<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fondo1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Ver Mensajes</title>
  </head>
  <body >
      <br><br>

    <div class="container">
        <div class="btn-group w-100" role="group" aria-label="Basic exaple">
        <button type="button" class="btn btn-outline-warning"><a href="index.html">Inicio</a></button>
        <button type="button" class="btn btn-outline-info"><a href="productos.php">Productos/Servicios</a></button>
        <button type="button" class="btn btn-outline-primary"><a href="contactenos.php">Contactenos</a></button>
    
    </div>
    <br>
<br><br>
<h2>Mensajes Recibidos</h2>

      <br><br>
      <center>
 <div class="container">
     <div class="col-12">
     <table class="table table-dark">
         <thead>
        <tr>
         <th scope="col">Nombre</th>
         <th scope="col">Telefono</th>
         <th scope="col">Correo</th>
         <th scope="col">Mensaje</th>
         </tr>
         </thead>
<br><br>
<tbody>
    <?php
    $query="SELECT * FROM mensajes";
    $resultat=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($resultat)){ ?>
    <tr> 
    <td><?php echo $row ['nombre'] ?> </td>
    <td><?php echo $row ['telefono'] ?> </td>
    <td><?php echo $row ['correo'] ?> </td>
    <td><?php echo $row ['mensaje'] ?> </td>
    <td>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
  </div>
  </center>
<br><br>
<div class="container">
    <table border="1" width="100%" >
      <tr>
        <td bgcolor="#05A0FF">
          ........PBX: 55968882.............Dirrecion: zona-12 colonia- La Reformita ..................................................................................Carnet:2017-40260 .........Nombre: Josue David Gomez Vasquez
        </td>
      </tr>
  </div>
  </table>
  <br>
  <br>
  
</body>
</html>