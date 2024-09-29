<?php ?>
<html>
  <head>
    <title>CRUD sencillo de pruebas - crear</title>
  </head>
  <body>
<?php require "header.php" ?>
    <h1>Crear</h1>
    <form action="create.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre">
      <label for="correo">Correo:</label>
      <input type="email" name="correo" id="correo">
      <label for="edad">Edad:</label>
      <input type="number" name="edad" id="edad">
      <input type="submit" value="Crear">
      <input type="reset" value="Limpiar">
    </form>
      
  </body>
  </html>
