<?php
if (empty($_GET['limite'])) 
    $lim=5;
else
    $lim=$_GET['limite'];


for ($i=1; $i<=$lim;$i++){
    $linea="";
    for ($j=1; $j<=$lim;$j++){
        $linea .=$i*$j.' ';    
    }
    echo ($linea);
    echo ("<br>");
}
echo ("")
echo "escribir en la direccion ?limite=x";
?>