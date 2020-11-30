<!doctype html>
<html lang="en">
  <head>
    <style>
      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 10px;
      }
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      
      #customers tr:hover {background-color: #ddd;}
      
      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	<link rel="stylesheet" href="estilos.css">
    <title>CRM</title>  
  </head>
  <body>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d H:i:s");
         ?>
     <!-- NAVIGATION  -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">CRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="usuario.php">Registrar Usuario <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="marca.php">Registrar Marca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producto.php">Registrar Producto</a>
      </li>
     
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
          </ul>
      </div>
    </nav>
     <!-- Body  -->
    <div style="height: 40px;"></div>
    <div class="container"  >
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
       
        <div class="card-body">
        <form id="agregar-usuario" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                  <div class="container">
<hr class="my-4">
<div class="row mb-3">
  <div class="col-md-8 themed-grid-col">
    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">             
     <h3 align="center"> Ingrese los Datos </h3>
       
                    </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Nombre: 
        <input type="text" id="nombre" placeholder="Ingrese Nombre" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Apellido:
        <input type="text" id="apellido" placeholder=" Ingrese Apellido" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>  
<br>
    <input type="hidden" id="taskId">
                  <button  type="submit" class="btn btn-secondary btn-block text-center" width="50%">
                  Aceptar
                  </button>
    <!-- Fin Tabla  -->
  </div>
</div>
<hr class="my-4">
</div>      
              </form>
        </div>  
    </div>
            <!-- TABLE  -->
            <div class="col-md-7" align="left">
              <div class="card my-3" id="task-result">
                <div  class="card-body" id="customers">
                  <!-- SEARCH -->
                  <h1 align="center">Resultados de la Búsqueda</h1>
                  <table  class="container" class="table table-bordered table-sm" id="customers" align="left">
                    <thead >
                      <tr class="table-primary" >
                        <td>Nombre</td>
                        <td>Apellido</td>
                      </tr>
                    </thead>
                    <tbody id="container"></tbody>
                  </table>
                  <ul id="container" style="line-height:250%" class="tabla table-bordered table-sm" > </ul>
                </div>
              </div>
             <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                  </tr>
                </thead>
                <tbody id="usuario"></tbody>
              </table> 
            </div>  
            </div> 
        </div>                  
    </div>
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="codigo.js"></script> 	  	
  </body>
</html>