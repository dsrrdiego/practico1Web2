<?php
if ($_GET['mostrar']=="pi"){
    echo (pi());
}
if ( $_GET['developer']=="about"){
    echo ("echo por patatin y patatan");
    
}elseif ( $_GET['developer']=="patatin"){
echo (" patatin gomez 15443344");
}
elseif ( $_GET['developer']=="patatan"){
    echo (" patatan chaves 13241412");
    }

if ($_GET['check1']=="on"){
    echo ("el check1 esta prendido");
}
if ($_GET['check2']=='on'){
    echo ("el check2 esta prendido");
}


if (!empty($_GET['num1']) && 
!empty($_GET['num2']) &&
!empty($_GET['signo'])
){
    switch ($_GET['signo']){
        case '+':
            $resultado=$_GET['num1']+$_GET['num2'];
            break;
        case '-':
            $resultado=$_GET['num1']-$_GET['num2'];

            break;
        case '*':
            $resultado=$_GET['num1']*$_GET['num2'];

            break;
        default:
        $resultado=$_GET['num1']/$_GET['num2'];

    }
    
    echo ("<Br> El resultado de ".$_GET['num1']." ". $_GET['signo'] ." ". $_GET['num2'] ." es $resultado");


}

?>