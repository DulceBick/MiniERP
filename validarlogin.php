
<?php
   include "conexion1.php";
 
			   $NombreUsuario = $_POST['Usuario'];
			   $PasswordUs = $_POST['Contrasenia'];		
			   //TESTEANDO
			   //ECHO "El usuario tecleado fue ".$NombreUsuario."</BR>";
			  // ECHO "La contraseña tecleada fue ".$PasswordUs."</BR>";
			   
				   $queryUsuario = "SELECT * FROM acceso WHERE Usuario = '".$NombreUsuario."' AND Contrasenia = '".$PasswordUs."' AND Tipo_Usuario='gerente'";
					  //EJECUTANDO CONSULTA
				   $consulta = mysql_query($queryUsuario);
				   //ECHO "".$queryUsuario."</BR>";
				   //VALIDAR QUE HAYA ENCONTRADO ALGUNR ESULTADO
				   if(mysql_num_rows($consulta)>0){
					   //SI ENCONTRO ALGO, INICIARMOS SESION
		   
					  // ECHO "Usuario y contraseña correcta.< Iniciando sesión </BR>";
					   session_start();
					   $_SESSION['Usuario'] = $NombreUsuario;
				 ?> 
					   <!-- INCRUSTANDO JAVASCRIP !-->
					  
					   <SCRIPT TYPE = "text/javascript">
					        window.location = "gerente.php";
					   </SCRIPT>
					   
					   
					   <?php
				   }else{
                       
                       $queryUsuario2 = "SELECT * FROM acceso WHERE Usuario = '".$NombreUsuario."' AND Contrasenia = '".$PasswordUs."' AND Tipo_Usuario='coordinador'";
                       $consulta = mysql_query($queryUsuario2);
                       if(mysql_num_rows($consulta)>0){
                         session_start();
                           $_SESSION['Usuario'] = $NombreUsuario;
                            ?>
                        <SCRIPT TYPE = "text/javascript">
					        window.location = "coordinador.php";
					   </SCRIPT>
                            <?php
                       }else{
                            $queryUsuario3 = "SELECT * FROM acceso WHERE Usuario = '".$NombreUsuario."' AND Contrasenia = '".$PasswordUs."' AND Tipo_Usuario='auxiliar'";
                       $consulta = mysql_query($queryUsuario3);
                       if(mysql_num_rows($consulta)>0){
                         session_start();
                           $_SESSION['Usuario'] = $NombreUsuario;
                            ?>
                        <SCRIPT TYPE = "text/javascript">
					        window.location = "auxiliar.php";
					   </SCRIPT>
                            <?php
                            } 
                           else{
                            $queryUsuario4 = "SELECT * FROM acceso WHERE Usuario = '".$NombreUsuario."' AND Contrasenia = '".$PasswordUs."' AND Tipo_Usuario='proveedor'";
                       $consulta = mysql_query($queryUsuario4);
                       if(mysql_num_rows($consulta)>0){
                         session_start();
                           $_SESSION['Usuario'] = $NombreUsuario;
                            ?>
                        <SCRIPT TYPE = "text/javascript">
					        window.location = "proveedor.php";
					   </SCRIPT>
                            <?php
                            }  
                       }}
                       
                       ?>
					   <SCRIPT TYPE = "text/javascript" > 
                        
					        window.confirm("Datos Erroneos!!!");
                           
					   </SCRIPT>
                      <?php HEADER("refresh:0; url=index.php");	

				   }
		       
		   
?>