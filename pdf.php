<?php 
	require_once("dompdf/dompdf_config.inc.php");
	include('conexion1.php');


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
    <table width="95%" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>NombrePrC</strong></td>
        <td bgcolor="#0099FF"><strong>CostoVentaPrC</strong></td>
        <td bgcolor="#0099FF"><strong>CantidadPrC</strong></td>
       
      </tr>';

        $consulta=mysql_query("SELECT * FROM compras");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
      
        <td>'.$dato['NombrePrC'].'</td>
        <td>'.$dato['CostoVentaPrC'].'</td>
        <td>'.$dato['CantidadPrC'].'</td>
        
      </tr>';
      } 
$codigoHTML.='
    </table>
	<img src="img/owl.png" width="100px" height="100px">
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
$dompdf->stream("OrdenDeCompra.pdf");
?>
