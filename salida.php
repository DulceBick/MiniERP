<?php
include('conexion1.php');

$matricula=$_POST['matricula'];
$select = "SELECT * FROM checadorsalida WHERE matricula='".$matricula."' AND fecha=CURRENT_DATE();";
$consulta = mysql_query($select);
if(mysql_num_rows($consulta)>0){
  echo false;
}else{
  $query="INSERT INTO checadorsalida VALUES (NULL, CURRENT_TIME() ,CURRENT_DATE() , '".$matricula."');";
  $consulta2=mysql_query($query);
  echo true;
}
?>