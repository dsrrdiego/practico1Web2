<?php
// peso [kg] / altura [m]2
if (!empty($_GET['altura']&& !empty($_GET['peso']))){

    $altura=$_GET['altura'];
    $peso=$_GET['peso'];
    
    $resultado=$peso/($altura*$altura);
    if ($resultado<18.5){
        echo ("BAJO PESO");
    }
    elseif ($resultado<25) {
        echo ("NORMAL");
    }
    elseif ($resultado<30){
        echo ("SOBREPESO");
    }
    else {
        echo ("OBESIDAD!!!!");
    }
}else{
    echo ("completa los campos");
}
?>
