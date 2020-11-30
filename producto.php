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
    /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
select option {
    background-color: white;
   
    color: red;
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
    
     <!-- NAVIGATION  -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">CRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuario.php">Registrar Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="marca.php">Registrar Marca</a>
      </li>
      <li class="nav-item active">
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
        <form id="task-form" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                  <div class="container">
<hr class="my-4">
<div class="row mb-3">
  <div class="col-md-8 themed-grid-col">
    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">             
      <h3 align="center"> Creando nuevo Producto </h3>    
                    </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Nombre del Producto:
        <input type="text" id="nombre" placeholder="Ingrese Nombre" class="form-control"  required>   
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group">Código del Producto:
        <input type="number" id="codigo" placeholder=" Ingrese Apellido" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Precio del Procto: 
        <input type="text" id="precio" placeholder="Ingrese Precio del Producto" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">IVA %:
        <input type="number" id="iva" placeholder=" Ingrese IVA%" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Cantidad de Producto:
      <input type="number" id="cantidad" placeholder=" Ingrese Cantidad del producto" class="form-control" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Categoria del Producto:
        <select id="categoria" class="form-control" class="gender" required>
              <option disabled selected value="-1">Opción</option>
              <option value="Hardware">Hardware</option>
              <option value="Software">Software</option>
            </select>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
    </div>

    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">          
                    </div>
    </div>


 
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Nombre del Proveedor:
      <input type="text" id="proveedor" placeholder=" Ingrese nombre del Proveedor" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>



    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">          
                    </div>
    </div>

    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Imagen del Producto:
        <input type="file" class="form-control" id="foto" required="">
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
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
                    <td>Gender</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Número Principal</td>
                    <td>Número Celular</td>
                    <td>Cargo</td>
                    <td>País</td>
                    <td>Departamentos</td>
                    <td>Ciudad</td>
                    <td>Página Web</td>
                    <td>Empresa</td>
                    <td>Industria</td>
                    <td>Dirección</td>
                    <td>Producto o Servicio</td>
                    <td>Marca</td>
                    <td>Asignado a:</td>
                    <td>Estado Pre-Contacto</td>
                    <td>Descripción</td>
                    <td>Fecha</td>
                    <td>Fecha de Modificación</td>
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