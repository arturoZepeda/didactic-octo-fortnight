<?php
/**
 * PHP version 7
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

$nombre = "Juan";
$correo = "aaze92@gmail.com";
$edad = 31;
$accion = 777;
?>

<html>
  <head>
    <title>CRUD sencillo de pruebas - leer</title>
  </head>
  <body>
  <?php require "header.php" ?>
    <h1>Leer</h1>
    <table>
      <tr>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Edad</th>
      <th>Acciones</th>
      </tr>
      <tr>
        <td><?php echo $nombre ?></td>
        <td><?php echo $correo ?></td>
        <td><?php echo $edad ?></td>
        <td><?php echo $accion ?></td>
      </tr>
    </table>
  </body>
</html>
