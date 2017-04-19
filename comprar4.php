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
    <table width="95%" >
      <tr>
        <td bgcolor="#0099FF"  align="center"><strong  align="center">Cantidad</strong></td>
        <td bgcolor="#0099FF"><strong>Nombre Libro</strong></td>
        <td bgcolor="#0099FF"><strong>Serie</strong></td>
       
      </tr>';
     
        //$consulta=mysql_query("SELECT * FROM venta ");
        //while($dato=mysql_fetch_array($consulta)){
         $consulta=mysql_query("SELECT venta.CantidadV,NombreLibro,Serie FROM proveedor INNER JOIN venta WHERE proveedor.Serie=venta.NoSerie");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
        <td> '.$dato['CantidadV'].'</td>
        <td >'.$dato['NombreLibro'].'</td>
        <td >'.$dato['Serie'].'</td>
     
        
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
$dompdf->stream("OrdenDeCompra.pdf");
?>