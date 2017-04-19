<html>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="UTF-8">
    <title>-Face +Book</title>
          <link rel="stylesheet" href="css/buho.css">
           <link rel="stylesheet" href="css/style2.css">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scle=1">
                <link rel='stylesheet prefetch' href='http://daneden.github.io/animate.css/animate.min.css'>
                 <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
              <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
           <link rel="shortcut icon" href="img/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.cs">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
      <script src="js/clock.js"></script>
      <script src="js/sweetalert.min.js"></script>
       <script src="js/main.js"></script> 
       <script src="js/jquery-3.1.1.min.js"></script> 
      <script src="js/index.js"></script>       
    <body>
        
        
      
<style>
.clock {
position: absolute;
text-align: left 0;
color: #eee;
top: auto;
    
}
    .owl{
        
     
    right: 768px;
    position: absolute;

    }   
        </style>
        

<div class="form animated flipInX">

  <h2>Login</h2>
 
   
  <form action="validarlogin.php" method="POST">
    <input type="text"  placeholder="Usuario" name="Usuario"  autofocus="true" required="true" >
    <input type="password" placeholder="Contraseña" name="Contrasenia" required="true"  required>
     <button type="submit"  >Go!</button>
    

 </form>
        </div>
    <script>
    
    swal({
  title: "Checar hora de Entrada",
  text: "Escribe tu Usuario para poder checar",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Usuario"
},
function(inputValue){
  if (inputValue === false) return false;
  
  if (inputValue === "") {
    swal.showInputError("Necesitas escribir");
    return false;
  }
  
  swal("Entrada Registrada");
});
    
    
    </script>
 
<a href=""> <div id="clock" class="clock"  type="submit" name="entrada" >Loading...</div></a>
 
  <div class='owl' class="col-xs-12 col-sm-4">
  <div class='body' >
    <div class='wing' ></div>
    <div class='wing' ></div>
    <div class='feet'></div>
    <div class='feet right' ></div>
    <div class='feather'></div>
  </div>
  <div class='head'>
    <div class='eyes'>
      <div class='beak'></div>
      <div class='eye'>
        <div class='pupil'></div>
          
      </div>
      <div class='eye'>
        <div class='pupil'></div>
           <div class='pupil2'></div>
          <div class='pupil3'></div>
      </div>
    </div>
  </div>
</div>
        </div>
    

    
    </body>