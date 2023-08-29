<h3>Lista generada desde php</h3>
<br>

<?php
$arreglo=["uno","dos","tres","cuatro"];
if (empty($_GET['cantidad'])) {$cantidad=count($arreglo);} else {$cantidad=$_GET['cantidad'];}

echo ("<ul>");
for ($i=0; $i< $cantidad ;$i++){
    echo ("<li>");
    echo ("$arreglo[$i]");
    echo ("</li>"); 
}
echo ("</ul>");
?>