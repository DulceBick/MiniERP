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
    <div align="left">
    <img src="img/owl.png" width="100px" height="100px">
    </div>

    <h1>Inventario de Productos</h1>
    <table width="90%" class="table table-bordered" >
  
      <tr>
        <td bgcolor="#0099FF" align="center"><strong>Nombre Producto</strong></td>
        <td bgcolor="#0099FF" align="center"><strong>NoSerie</strong></td>
        <td bgcolor="#0099FF" align="center"><strong>Cantidad</strong></td>
       
      </tr>';

        $consulta=mysql_query("SELECT * FROM productos");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
      
        <td align="center">'.$dato['NombreP'].'</td>
        <td align="center" >'.$dato['NoSerieP'].'</td>
        <td align="center">'.$dato['CantidadP'].'</td>
        
      </tr>';
      } 
$codigoHTML.='
    </table>
	
</div>
<div align="center">
<h1>Inventario de Ventas</h1>
    <table width="90%">
  
      <tr>
        <td bgcolor="#0099FF" align="center"><strong>Serie</strong></td>
        <td bgcolor="#0099FF" align="center"><strong>Nombre Producto</strong></td>
        <td bgcolor="#0099FF" align="center"><strong>Costo de Venta</strong></td>
        <td bgcolor="#0099FF" align="center"><strong>Cantidad</strong></td>
        <td bgcolor="#0099FF" align="center"><strong>Fecha de Salida</strong></td>
       
      </tr>';
    
        $consulta=mysql_query("SELECT * FROM ventas");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
      
        <td align="center">'.$dato['NoSeriePrV'].'</td>
        <td align="center">'.$dato['NombrePrV'].'</td>
        <td align="center" >'.$dato['CostoVentaPrV'].'</td>
        <td align="center">'.$dato['CantidadPrV'].'</td>
        <td align="center">'.$dato['FechaSalidaPrV'].'</td>
        
      </tr>';
      } 
$codigoHTML.='
    </table>
    </div>
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
$dompdf->stream("Inventario.pdf");
?>
