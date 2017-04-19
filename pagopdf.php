<?php 
	require_once("dompdf/dompdf_config.inc.php");
	include('conexion1.php');
        $id=$_POST['id'];
        $consulta=mysql_query("SELECT 
Id_Empleado,NombreE,DepartamentoE,PuestoE,((SueldoDiarioE*5)-(SueldoDiarioE*faltas.numero)) as 'Sueldo_Semanal',SueldoDiarioE
FROM empleados
INNER JOIN checadorentrada ON empleados.Id_Empleado=checadorentrada.matricula
INNER JOIN checadorsalida ON empleados.Id_Empleado=checadorsalida.matricula 
INNER JOIN retardos ON empleados.Id_Empleado=retardos.matricula 
INNER JOIN faltas ON empleados.Id_Empleado=faltas.matricula WHERE id_Empleado='".$id."'and (Status ='Activo')");
if(mysql_num_rows($consulta)>0){
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div align="center">
	<img src="img/owl.png" width="100px" height="100px">
    <table width="95%">
      <tr>
        <td bgcolor="#FACC2E"><strong>NombreE</strong></td>
        <td bgcolor="#FACC2E"><strong>PuestoE</strong></td>
        <td bgcolor="#FACC2E"><strong>SueldoDiarioE</strong></td>
        <td bgcolor="#FACC2E"><strong>DepartamentoE</strong></td>
        <td bgcolor="#FACC2E"><strong>Sueldo Semanal</strong></td>
       
      </tr>';
    


while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
      
        <td>'.$dato['NombreE'].'</td>
        <td>'.$dato['PuestoE'].'</td>
        <td>'.$dato['SueldoDiarioE'].'</td>
        <td>'.$dato['DepartamentoE'].'</td>
        <td>'.$dato['Sueldo_Semanal'].'</td>

       
        
        
      </tr>';
      }
$codigoHTML.='
    </table>
	
     <div align="center">
    <p align="center">Autorizado por:</p>
    <img src="img/JaneAusten.jpg" width="100px" height="100px"></div>
</div>

</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Pago.pdf");
}else{
   ?>
<SCRIPT TYPE = "text/javascript">
    alert("El usuario esta dado de baja");
    window.location = "empleado.php";
</SCRIPT>
<?php
}
?>

