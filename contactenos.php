<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fondo1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Contactenos</title>
  </head>
  <body>
      <br><br>

    <div class="container">
        <div class="btn-group w-100" role="group" aria-label="Basic exaple">
        <button type="button" class="btn btn-outline-warning"><a href="index.html">Inicio</a></button>
        <button type="button" class="btn btn-outline-info"><a href="productos.php">Productos/Servicios</a></button>
        <button type="button" class="btn btn-outline-primary"><a href="contactenos.php">Contactenos</a></button>
        <button type="button" class="btn btn-outline-info"><a href="usuario.php">Ver Mensajes</a></button>
    </div>
    </div>
    <br>
    <div class="container">
    <h1>Contáctenos</h1>
  </div>
  <<div class="container">
    <form action="conexion.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombres *</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre y Apellidos">
            <small id="nombre" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="telefono">Telefono / Celular</label>
            <input type="text" name="telefono" class="form-control" placeholder="Ingresa tu Numero de celular" >
            <small id="numero" class="form-text text-muted"></small>
          </div>
        <div class="form-group">
          <label for="correo">Correo Electronico *</label>
          <input type="email" name="correo" class="form-control"   placeholder="Ingresa tu Correo Electronico">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje *</label>
          <input type="text"  name="mensaje" class="form-control"  placeholder="Ingrese su mensaje" >
        </div>
        <br>
       <center> <input type="submit" class="btn btn-primary" value="Enviar Mensaje" name="enviar"></center>
      </form>
</div>

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
  
  </body>
</html> 