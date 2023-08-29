<?php
$plata=$_GET['plata'];
define ("porcentaje",10); //constante

$miString = "<link rel='stylesheet' href='style.css'>";
$miString .="<table>";

for ($i=1;$i<13;$i++){
    $miString .="<tr>";
    $miString .="<td>";
    $miString .=$i;
    $miString .=' mes: ';
    $miString .="</td>";
    $miString .="<td>";
    $plata =$plata + ($plata * porcentaje/100);
    $miString .=$plata;
    $miString .="</td>";
    $miString .="</tr>";
}
$miString .="</table>";
echo ($miString);

echo "poner en la direccion ?plata= {monto inicial}";


?>