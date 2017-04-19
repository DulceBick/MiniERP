<?php if ($busqueda<>''){ 
   //CUENTA EL NUMERO DE PALABRAS 
   $trozos=explode(" ",$busqueda); 
   $numero=count($trozos); 
  if ($numero==1) { 
   //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE 
   $cadbusca="SELECT REFERENCIA, TITULO FROM ARTICULOS WHERE VISIBLE =1 AND DESARROLLO LIKE '%$busqueda%' OR TITULO LIKE '%$busqueda%' LIMIT 50"; 
  } elseif ($numero>1) { 
  //SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST 
  //busqueda de frases con mas de una palabra y un algoritmo especializado 
  $cadbusca="SELECT REFERENCIA, TITULO , MATCH ( TITULO, DESARROLLO ) AGAINST ( '$busqueda' ) AS Score FROM ARTICULOS WHERE MATCH ( TITULO, DESARROLLO ) AGAINST ( '$busqueda' ) ORDER BY Score DESC LIMIT 50"; 
} 
$result=mysql("erp", $cadbusca); 
While($row=mysql_fetch_object($result)) 
{ 
   //Mostramos los titulos de los articulos o lo que deseemos... 
  $referencia=$row->REFERENCIA; 
   $titulo=$row->TITULO; 
   echo $referencia." - ".$titulo."<br>";; 
} 
?>
