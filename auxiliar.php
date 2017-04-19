<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Auxiliar</title>
           <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
           <link rel="shortcut icon" href="img/favicon.ico">
           <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
           <link rel="stylesheet" href="css/style.css">
           <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
           <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
           <script src="dist/sweetalert.min.js"></script>      
           <script type="text/javascript" src="angular/angular.min.js"></script>
    
  
</head>

<body>
  <body>
<div id="menu-overlay"></div>
<div id="menu-toggle" class="closed" data-title="Menu">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
  </div>
<header id="main-header">
  <nav id="sidenav">
    <div id="sidenav-header">
      <div id="profile-picture">
      	<img src="img/owl.png"/>
      </div>
      <a href="#" id="profile-link"> Auxiliar</a>
    </div>
    <div id="account-actions">
      <a href="#" data-title="Home"><i class="fa fa-home"></i></a>
    
    </div>
    <ul id="main-nav">
      <li>
        <a href="inventarioAuxiliar.php">
          <i class="fa fa-file-text"></i>
        Inventario
        </a>
      </li>
      
        <li>
        <a href="productosAuxiliar.php">
       <i class="fa fa-book"></i>
        Productos
        </a>
      </li>      
       
    </ul>
  </nav>
  <form id="admin-search">
    <input type="text" id="search-field" placeholder="Search"/>
    <label for="search-field" id="search-label" title="Search"><i class="fa fa-search"></i></label>
  </form>
  <div id="header_logo">
    <a href=""></a>
  </div>
</header>
<section id="content">
</section>

<footer></footer>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
