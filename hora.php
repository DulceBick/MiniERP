
<?php

foreach ($_POST as $n=>$v)
echo "<br>$n=$v";

include("index.php"); 
$nick=$_POST["nick"]; 

if(isset($_POST["entrada"]))
$entrada=date("Y-m-d")." ".date("H:i:s");
$salida=$_POST["salida"];
ponerAsistencia($nick,$entrada$salida);
function ponerAsistencia($nick,$entrada,$salida) 
{
$index=conexion();
$sq1= "select Id_A from acceso where Usuario='$nick'";

$result=mysql_query($sq1);
if($result!=false){

if(mysql_numrows($result)>0){
$row=mysql_fetch_array($result);
$idUsuario=$row['id'];
$sql= "INSERT INTO checador values ($NombreUsuario,'$hora_entrada',null,,null)";
$result=mysql_query($sql);
if($result==false)
echo "<br>hubo un error al hacer la inserción de asistencia";
else
echo "<br>Datos Guardados";
cerrarconexion($index);
}
else
echo "<br>no se encuentra el Usuario";
}
else{
echo "<br>hubo un error al hacer la consulta :".mysql_error();

}

} 

function conexion () 
{ 
$dbConex = mysql_connect("localhost","root","erp"); 
if (! $dbConex) 
{ 
echo "Imposible Conectar"; 
exit; 
} 
if(!mysql_select_db("acceso", $dbConex))
echo "Imposible Conectar con la base"; 


return $dbConex; 
} 

function cerrarconexion ($dbConex) { 
mysql_close($dbConex); 
} 
?>