<?php
require_once("dompdf/dompdf_config.inc.php");
include('conexion1.php');
$ids = $_POST["ids"];
$values = $_POST["values"];
$contador =0;
for ($i=0; $i < sizeof($ids) ; $i++) {
  $query = "UPDATE proveedor SET cantidadLib = cantidadLib-".$values[$i]." WHERE Serie='".$ids[$i]."';";
  $consulta = mysql_query($query);
}
?>
