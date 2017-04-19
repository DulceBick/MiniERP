<?php
$mysqli= new mysqli('localhost','root','','erp');
if($mysqli->connect_errno):
echo"Error al conectarse con la BD".$mysqli->connect_error;
endif;
?>
<?php
