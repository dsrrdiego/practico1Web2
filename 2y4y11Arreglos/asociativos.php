<?php

$arreglo=array(
    "uno"=>1,
    "dos"=>2,
    "tres"=>3,
    "cuatro"=>4
);
// $arreglo=["uno"=>1,"dos"=>2, "tres"=>3,"cuatro"=>4];

echo ("<ul>");
foreach ($arreglo as $clave => $valor) {
    echo ("<li>$valor</li>");
}
echo ("</ul>");

?>