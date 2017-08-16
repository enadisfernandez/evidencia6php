<!--Cree un array con los nombres:mirna,paula,maira,jose,sebastian,carlos.Muestre el numero de elementos que contiene en una lista no ordenada.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nombres</title>
  </head>
  <body>
    <?php
$p[0]="mirna";
$p[1]="paula";
$p[2]="maira";
$p[3]="jose";
$p[4]="sebastian";
$p[5]="carlos";
$resultado=count($p);
shuffle($p);

echo "los nombres ingresados son:</br></br>";

echo "$p[0]</br>";
echo "$p[1]</br>";
echo "$p[2]</br>";
echo "$p[3]</br>";
echo "$p[4]</br>";
echo "$p[5]</br></br>";

echo "Los elementos que se encuentran en la lista son: $resultado";




     ?>

  </body>
</html>
