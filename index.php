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
    <title>FUEC</title>  
  </head>
  <body>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d H:i:s");
         ?>
     <!-- NAVIGATION  -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FUEC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
      </div>
    </nav>
     <!-- Body  -->
    <div style="height: 40px;"></div>
    <div class="container"  >
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header"  align="center">FORMATO ÚNICO DE EXTRACTO DE CONTROL DE SERVICIO PÚBLICO DE TRANSPORTE TERRESTRE AUTOMOTOR ESPECIAL</div>
        <div class="card-body">
        <form id="task-form" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                  <div class="container">
<hr class="my-4">
<div class="row mb-3">
  <div class="col-md-8 themed-grid-col">
    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">             
      <input type="text" id="fuec" placeholder="N° FUEC" class="form-control" required>
      <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Razón Social: 
        <input type="text" id="name" placeholder="Razón Social" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">NIT:
        <input type="number" id="apellido" placeholder=" Ingrese N° NIT" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Contrato Número:
      <input type="number" id="description" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Contratatante:
      <input type="text" id="contratante" placeholder=" Contratante" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Objeto Contrato:
      <input type="text" id="objetocontrato" placeholder=" Objeto de Contrato" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">CC/NIT:
      <input type="number" id="cc" placeholder=" Ingrese CC o NIT" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Origen:
      <input type="text" id="origen" placeholder=" Origen" class="form-control" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Descripción del Recorrido:
      <input type="text" id="recorrido" placeholder=" Descripción del Recorrido" class="form-control" required>
      <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Fecha Actual:
      <input type="datetime" id="fecha"  class="form-control" class="fecha" value="<?= $fecha?>"  disabled="disabled">
       
      </div>
    </div>
<br>
    <input type="hidden" id="taskId">
                  <button  type="submit" class="btn btn-secondary btn-block text-center  " width="50%">
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
                        <td>N° de FUEC</td>
                        <td>Razón Social</td>
                        <td>NIT</td>
                        <td>Número de Contrato</td>
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
                    <td>N° de FUEC</td>
                    <td>Razón Social</td>
                    <td>NIT</td>
                    <td>Número de Contrato</td>
                    <td>Contratante</td>
                    <td>Objeto de Contrato</td>
                    <td>CC/NIT</td>
                    <td>Origen</td>
                    <td>Recorrido</td>
                    <td>Fecha Solicitud</td>
                    <td>Estado</td>
                  </tr>
                </thead>
                <tbody id="tasks"></tbody>
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