<?php
require 'conexion1.php';

$usuarios= $mysqli->query("SELECT * FROM acceso WHERE Usuario= '".$_POST['usuariolg']."'AND Contrasenia='".$_POST['passlg']."'");

if($usuarios ->num_rows == 1):
    $datos= $usuarios->fetch_assoc();
echo json_encode(array('error' => false,'tipo' =>$datos['Tipo_Usuario']));
else:
echo json_encode(array('error'=>true));
endif;

$mysqli->close();

?>