<?php 
	require_once("dompdf/dompdf_config.inc.php");
	include('conexion1.php');
   $id=$_POST['id'];
$cantidad=$_POST['cantidad'];
$consulta=mysql_query("SELECT productos.CantidadP FROM productos WHERE productos.CantidadP <= 5 AND productos.NoSerieP='".$id."';");
if(mysql_num_rows($consulta)>0){
   ?>
<SCRIPT TYPE = "text/javascript">
    alert("No hay suficiente producto");
    window.location = "ventas.php";
</SCRIPT>
<?php
}else{
  

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
        <td bgcolor="#0099FF"><strong>NombrePrC</strong></td>
        <td bgcolor="#0099FF"><strong>CantidadPrC</strong></td>
       
      </tr>';


        $id=$_POST['id'];
        $cantidad=$_POST['cantidad'];     
        $consulta=mysql_query("UPDATE productos SET CantidadP=CantidadP-'".$cantidad."', FechaSalidaP = CURRENT_DATE() WHERE NoSerieP='".$id."'");
        $consulta=mysql_query("INSERT INTO vendidos VALUES(NULL,'".$cantidad."',CURRENT_DATE(),'".$id."')");    
        $consulta=mysql_query("SELECT * FROM productos WHERE NoSerieP='".$id."'");
        
        
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
      
        <td>'.$dato['NombreP'].'</td>
       <td>'.$cantidad.'</td>
        
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
$dompdf->stream("OrdenDeVenta.pdf");
}
?>
