
Datos generados por php <Br>
<?php
 if (empty($_REQUEST['nombre'])||
     empty($_REQUEST['apellido'])||
     empty($_REQUEST['edad'])){
        echo ("Los camnpos tienen que estra llenos");
 }else{
     echo ('<h3>Nombre: '.$_REQUEST['nombre'].'</h3>');
     echo ('<h3>Apellido: '.$_REQUEST['apellido'].'</h3>');
     echo ('<h3>Edad: '.$_REQUEST['edad'].'</h3>');
 };

?>