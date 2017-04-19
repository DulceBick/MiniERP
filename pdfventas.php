<?php 
	require_once("dompdf/dompdf_config.inc.php");
	include('conexion1.php');


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div align="center">
	<img src="img/owl.png" width="100px" height="100px">
    <table width="95%">
      <tr>
        <td bgcolor="#0099FF"><strong>FechaSalidaPrV</strong></td>
        <td bgcolor="#0099FF"><strong>CostoVentaPrV</strong></td>
        <td bgcolor="#0099FF"><strong>NombrePrV</strong></td>
        <td bgcolor="#0099FF"><strong>CantidadPrV</strong></td>
        <td bgcolor="#0099FF"><strong>NoSeriePrV</strong></td>
        
       
      </tr>';

        $consulta=mysql_query("SELECT * FROM ventas");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
      
        <td>'.$dato['FechaSalidaPrV'].'</td>
        <td>'.$dato['CostoVentaPrV'].'</td>
        <td>'.$dato['NombrePrV'].'</td>
        <td>'.$dato['CantidadPrV'].'</td>
        <td>'.$dato['NoSeriePrV'].'</td>
        
      </tr>';
      } 
$codigoHTML.='
    </table>
	
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ListadoVentas.pdf");
?>
