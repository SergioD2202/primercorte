<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cedula = $_POST["cedula"];
    $sueldo = $_POST["sueldo"];
    $dep = $_POST["dep"];
    $lg = $_POST["lg"];
    $count = $_POST["count"];

   

    $form = [
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'cedula'=>$cedula,
        'sueldo'=>$sueldo,
        'departamento'=>$dep,
        'lugar de trabajo'=>$lg,
        'num'=>$count
    ];

    if(hasValues($form) && isPositive($form)) {

    echo '<div class="m"><h2>Empleado '.$form["num"].'</h2></div>';
    
    echo '<div class="m"><h4>Nombre: '.$form["nombre"].'</h4></div>';
    
    echo '<div class="m"><h4>Apellido: '.$form["apellido"].'</h4></div>';
    
    echo '<div class="m"><h4>Cedula: '.$form["cedula"].'</h4></div>';
    
    echo '<div class="m"><h4>Sueldo: '.$form["sueldo"].'</h4></div>';
    
    echo '<div class="m"><h4>Departamento: '.$form["departamento"].'</h4></div>';

    echo '<div class="m"><h4>Lugar de trabajo: '.$form["lugar de trabajo"].'</h4></div>';

    }

    else echo '<h1>ERROR: Los datos no fueron procesados correctamente, intente de nuevo</h1>';

    function hasValues($array){
        foreach($array as $value) {
            if(empty($value)) return false;
        }
        return true;
    }

    function isPositive($array){
        if($array["cedula"]<=0 || $array["sueldo"]<=0) return false;
        else return true;
    }
?>