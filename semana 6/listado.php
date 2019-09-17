<?php
$miarchivo = fopen("usuarios.txt", "r");
while(!feof($miArchivo)) {

$objeto =json_decode(fgets($miArchivo));

echo $objeto->nombre;
}
fclose($miArchivo);
?>
<!DOCTYPE html>
<html>
<body>

<h2>listado de usuarios</h2>


<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol> 

</body>
</html>