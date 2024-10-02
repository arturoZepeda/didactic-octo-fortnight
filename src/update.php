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
$arr = get_defined_vars();
print_r($arr);
?>

<html>
  <head>
    <title>Update</title>
  </head>
  <body>
    <h1>Update</h1>
    <form action="update.php" method="post">
      <input type="text" name="name" placeholder="Name" value="<?php echo $nombre?>">
      <input type="text" name="email" placeholder="Email" value="<?php echo $correo?>">
      <input type="text" name="age" placeholder="Age" value="<?php echo $edad?>">
      <input type="text" name="action" placeholder="Action" value="<?php echo $accion?>">
      <input type="submit" name="submit" value="Update">
    </form>
  </body>
