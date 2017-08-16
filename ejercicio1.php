<!--crear un array para introducir los datos de una persona :
nombre:pedro torres, direccion:calle_20, telefono:1425698. Al terminal los debe mostrar en pantalla.-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos personales</title>
  </head>
  <body>
    <h3>Datos:</h3>
<?php

 $datos= array('pedro torres','calle_20', 1425698 );
list($nombre, $direccion,$telefono)=$datos;
echo "NOMBRE: $nombre </br> </br> DIRECCIÓN: $direccion </br></br> TELEFONO:$telefono";

 ?>
  </body>
</html>
