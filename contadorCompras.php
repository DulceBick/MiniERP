<?php
include('conexion1.php');

if($checbox == "on"){
echo $checbox;    
}else{
    echo "ADIOS";
}

try {
    $checbox_0=$_POST['checkbox_0'];
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

if($checbox == "on"){
echo $checbox;    
}else{
    echo "ADIOS";
}

?>