<!--Algoritmo rellene un array con los 10 primeros números enteros y los muestre en pantalla en orden ascendente.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Números enteros</title>
  </head>
  <body>
    <h3>Los numeros en forma ascendente son:</h3>
<?php
foreach (range(0,10) as $numero) {
echo "$numero </br>";}
 ?>
  </body>
</html>
