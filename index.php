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
      h1 {
  color: #6c2eb9;
  font-weight: normal;
  font-size: 40px;
  font-family: Arial;
  text-transform: uppercase;
}
h2 {
  color: #3c1b66;
  font-weight: normal;
  font-size: 35px;
  font-family: Arial;
  text-transform: uppercase;
}
h3 {
  color: #443963;
  font-weight: normal;
  font-size: 30px;
  font-family: Arial;
  text-transform: lowercase;
}
h4 {
  color: #4f4866;
  font-weight: normal;
  font-size: 25px;
  font-family: Arial;
  text-transform: lowercase;
}
h5 {
  color: #656172;
  font-weight: normal;
  font-size: 20px;
  font-family: Arial;
  text-transform: lowercase;
}
h6 {
  color: #747377;
  font-weight: normal;
  font-size: 18px;
  font-family: Arial;
  text-transform: lowercase;
}
.imagen {
    width:70%;
    text-align: center;
}
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="estilos.css">
    <title>CRM</title>  
  </head>
  <body>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d ");
         ?>
<!-- NAVIGATION  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">CRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio </a>
      </li>
      <li class="nav-item ">
      <a href="#exampleModal"  class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Usuario</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal2" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nueva Marca</span></a>
      </li>
      
      <li class="nav-item">
      <a href="#exampleModal3" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Producto</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal5" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nueva Campaña</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal6" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Contacto</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal4" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Pre-Contacto</span></a>
      </li>
      </div>
    </nav>

 <!-- Modal Nueva Campaña -->
 <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Campaña</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="agregar-campana" method="post" class="needs-validation" novalidate>
      <fieldset id="agregar-campana" method="post" class="needs-validation" novalidate>
      <div class="modal-body" width="200px" class="container">
      <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Nombre de la Campaña: 
        <input type="text" id="nombrec" placeholder="Ingrese Nombre de Campaña" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
     
    </div>  


    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Asignado a:
        <select class="form-control" id="buscadorvivo" required>
        <?php
  include('database.php');

  $consulta2="SELECT nombre3, apellido3 FROM usuario ORDER BY nombre3 ASC";
  $ejecutar= mysqli_query($connection,$consulta2) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?>"><?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?></option>
   <?php endforeach ?>
    </select> 
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Tipo de Campaña:
        <select id="tipoc" class="form-control" class="gender" required>
              <option disabled selected value="-1">Opción</option>
              <option value="Conferencia">Conferencia</option>
              <option value="Webinar">Webinar</option>
              <option value="Feria">Feria</option>
              <option value="Relaciones Publicas">Relaciones Públicas</option>
              <option value="Partners">Partners</option>
              <option value="Programas de Referidos">Programas de Referidos</option>
              <option value="Publicidad">Publicidad</option>
              <option value="Banners">Banners</option>
              <option value="Mailing">Mailing</option>
              <option value="Email Trabajo">Email Trabajo</option>
              <option value="Telemarketing">Telemarketing</option>
              <option value="Otros">Otros</option>
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
      <div class="col-md-12 themed-grid-col" class="form-group">Página Web:
      <input type="text" id="webc" placeholder=" Ingrese nombre del Proveedor" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      </div>
      <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">          
                    </div>
      <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Estado de la Campaña:
        <select id="estadoc" class="form-control" class="gender" required>
              <option disabled selected value="-1">Opción</option>
              <option value="Activa">Activa</option>
              <option value="Inactiva">Inactiva</option>
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
      <div class="col-md-12 themed-grid-col" class="form-group">Descripción:
      <input type="text" id="descripcionc" placeholder=" Ingrese nombre del Proveedor" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar datos">
					</div>
      </div>
      </fieldset>
      </form>
    </div>
  </div>
</div>    
  
<!-- Modal de Usuario -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="agregar-usuario" method="post" class="needs-validation" novalidate>
      <fieldset id="agregar-usuario" method="post" class="needs-validation" novalidate>
      <div class="modal-body" width="200px" class="container">
      <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Nombre: 
        <input type="text" id="nombre3" placeholder="Ingrese Nombre" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Apellido:
        <input type="text" id="apellido3" placeholder=" Ingrese Apellido" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>  
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar datos">
					</div>
      </div>
      </fieldset>
      </form>
    </div>
  </div>
</div>    
<!-- Modal de Marca -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Marca</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="agregar-marca" method="post" class="needs-validation" novalidate>
      <fieldset id="agregar-marca" method="post" class="needs-validation" novalidate>
      <div class="modal-body" width="200px" class="container">
      <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Nombre de Marca: 
        <input type="text" id="nombre2" placeholder="Ingrese Nombre de Marca" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar datos">
					</div>
      </div>
      </fieldset>
      </form>
    </div>
  </div>
</div>    
<!-- Modal de Producto -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="task-producto" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
     <!-- <form   id="task-form" method="post" action="." oninput="range_control_value.value = range_control.valueAsNumber" class="ventanas" name="formValidation"> -->
     <fieldset id="task-producto" method="post" class="needs-validation" novalidate>
      <div class="modal-body" width="200px" class="container">
      <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Nombre del Producto:
        <input type="text" id="name" placeholder="Ingrese Nombre" class="form-control"  required>   
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
      <div class="col-md-4 themed-grid-col" class="form-group">Precio del Producto: 
        <input type="number" id="precio" placeholder="Ingrese Precio " class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">IVA %:
        <input type="number" id="iva" placeholder=" Ingrese IVA%" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Total:
        <input type="number" id="total"  class="form-control" disabled="disabled">
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
        <input type="file" class="form-control"  id="imagen" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
     
    </div>
    
					<div class="modal-footer">
        
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar datos">
					</div>
      </div>
      </fieldset>
      </form>
    </div>
  </div>
</div>    
   
<!-- Modal de Pre-Contacto -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Pre-Contacto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="task-form" method="post" class="needs-validation" novalidate>
     <fieldset id="task-form" method="post" class="needs-validation" novalidate>
     <div class="modal-body" width="200px" class="container">
     <div class="row">
      <div class="col-md-4 themed-grid-col" class="form-group"><br> 
        <select class="form-control" id="gender" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
    </select>        
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Nombre:
        <input type="text" id="nombre" placeholder=" Ingrese Nombre" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group"> Apellido: 
        <input type="text" id="apellido" placeholder="Ingrese Apellido" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group"> Número de Teléfono Principal:
      <input type="number" id="principal" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Número de Celular:
      <input type="number" id="celular" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 themed-grid-col" class="form-group">Cargo:
      <input type="text" id="cargo" placeholder=" Contratante" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Origen Pre-Contacto:
        <select class="form-control" id="origen" required>
      <option value="">Opciones</option>
      <option value="Pagina Web">Página Web</option>
      <option value="Sitio Web">Sitio Web</option>
      <option Value="Base de Datos">Base de Datos</option>
      <option value="Referido">Referido</option>
      <option value="E-mail Marketing">E-mail Marketing</option>
      <option value="Facebook">Facebook</option>
      <option value="Instagram">Instagram</option>
      <option value="Twitter">Twitter</option>
      <option value="Llamada">Llamada</option>
      <option value="Relaciones Públicas">Relaciones Públicas</option>
      <option value="Conferencia">Conferencia</option>
      <option value="Llamada Google">Llamada Google</option>
      <option value="Mercadeo Google">Mercadeo Google</option>
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
      <div class="col-md-4 themed-grid-col" class="form-group">Pais:
        <select class="form-control" id="pais" required>
      <option value="">Opciones</option>
      <option value="Colombia">Colombia.</option>
      <option value="Mexico">México.</option>
      <option Value="Peru">Perú.</option>
      <option value="Rusia">Rusia.</option>
    </select> 
    <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Departamento:
        <select class="form-control" id="departamento" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
    </select> 
                    <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Ciudad:
        <select class="form-control" id="ciudad" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
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
      <div class="col-md-12 themed-grid-col" class="form-group">Página:
      <input type="text" id="pagina" placeholder="Ingrese URL de Página" class="form-control" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Nombre de la Empresa:
      <input type="text" id="empresa" placeholder=" Descripción del Recorrido" class="form-control" required>
      <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Industria:
        <select class="form-control" id="industria" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
    </select> 
   
    <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-12 themed-grid-col" class="form-group">Dirección:
        <textarea class="form-control" onkeyup="dirr(this);" maxlength="201" id="direccion" placeholder="Ingrese Dirección"></textarea>
      <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">           
                    </div>
    </div>



    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group"> Producto o Servicio:
      <input type="text" id="ps" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Marca:
  
        <select class="form-control" id="buscadormarca" required>
        <?php
  include('database.php');

  $consulta="SELECT * FROM marca ORDER BY nombre2 ASC";
  $ejecutar= mysqli_query($connection,$consulta) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo $opciones['nombre2']?>"><?php echo $opciones['nombre2']?></option>
   <?php endforeach ?>
    </select> 
 
                   <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>


    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Asignado a:
        <select class="form-control" id="buscadorvivo" required>
        <?php
  include('database.php');

  $consulta2="SELECT nombre3, apellido3 FROM usuario ORDER BY nombre3 ASC";
  $ejecutar= mysqli_query($connection,$consulta2) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?>"><?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?></option>
   <?php endforeach ?>
    </select> 
 
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Pre-Contacto:
  
        <select class="form-control" id="precontacto" required>
      <option value="">Opciones</option>
      <option value="Nuevo">Nuevo.</option>
      <option value="No Interesado">No Interesado.</option>
      <option Value="Contactados Chat">Contactados Chat.</option>
      <option value="Intentando Contactar">Intentando Contactar.</option>
      <option value="Verificar Datos">Verificar Datos.</option>
      <option value="Descargato">Descartado.</option>
    </select> 
 
                   <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group"> Descripción:
     
        <textarea class="form-control" onkeyup="dirr(this);" maxlength="201" id="descripcion" placeholder="Ingrese descripción"></textarea>                 
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

    </div>
    
    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">           
                    </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Fecha de Creación:
      <input type="datetime" id="fecha"  class="form-control" class="fecha" value="<?= $fecha?>"  disabled="disabled">
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group">Fecha de Modificación:
      <input type="datetime" id="fechamod"  class="form-control" class="fecha" value="<?= $fecha?>"  disabled="disabled">
      </div>
    </div>
<br>
					<div class="modal-footer">
          <input type="hidden" id="taskId">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar datos">
					</div>

      </div>
      </fieldset>
      </form>
    </div>
  </div>
</div>    

<!-- Modal Contacto -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Contacto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="task-form" method="post" class="needs-validation" novalidate>
     <fieldset id="task-form" method="post" class="needs-validation" novalidate>
     <div class="modal-body" width="200px" class="container">
     <div class="row">
      <div class="col-md-4 themed-grid-col" class="form-group"><br> 
        <select class="form-control" id="gender" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
    </select>        
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Nombre:
        <input type="text" id="nombre" placeholder=" Ingrese Nombre" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group"> Apellido: 
        <input type="text" id="apellido" placeholder="Ingrese Apellido" class="form-control" required>            
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group"> Número de Teléfono Principal:
      <input type="number" id="principal" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Número de Celular:
      <input type="number" id="celular" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 themed-grid-col" class="form-group">Cargo:
      <input type="text" id="cargo" placeholder=" Contratante" class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Origen Pre-Contacto:
        <select class="form-control" id="origen" required>
      <option value="">Opciones</option>
      <option value="Pagina Web">Página Web</option>
      <option value="Sitio Web">Sitio Web</option>
      <option Value="Base de Datos">Base de Datos</option>
      <option value="Referido">Referido</option>
      <option value="E-mail Marketing">E-mail Marketing</option>
      <option value="Facebook">Facebook</option>
      <option value="Instagram">Instagram</option>
      <option value="Twitter">Twitter</option>
      <option value="Llamada">Llamada</option>
      <option value="Relaciones Públicas">Relaciones Públicas</option>
      <option value="Conferencia">Conferencia</option>
      <option value="Llamada Google">Llamada Google</option>
      <option value="Mercadeo Google">Mercadeo Google</option>
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
      <div class="col-md-4 themed-grid-col" class="form-group">Pais:
        <select class="form-control" id="pais" required>
      <option value="">Opciones</option>
      <option value="Colombia">Colombia.</option>
      <option value="Mexico">México.</option>
      <option Value="Peru">Perú.</option>
      <option value="Rusia">Rusia.</option>
    </select> 
    <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Departamento:
        <select class="form-control" id="departamento" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
    </select> 
                    <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Ciudad:
        <select class="form-control" id="ciudad" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
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
      <div class="col-md-12 themed-grid-col" class="form-group">Página:
      <input type="text" id="pagina" placeholder="Ingrese URL de Página" class="form-control" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Nombre de la Empresa:
      <input type="text" id="empresa" placeholder=" Descripción del Recorrido" class="form-control" required>
      <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Industria:
        <select class="form-control" id="industria" required>
      <option value="">Opciones</option>
      <option value="Sr">Sr.</option>
      <option value="Sra">Sra.</option>
      <option Value="Srita">Srita.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
      <option value="Ing">Ing.</option>
    </select> 
   
    <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-12 themed-grid-col" class="form-group">Dirección:
        <textarea class="form-control" onkeyup="dirr(this);" maxlength="201" id="direccion" placeholder="Ingrese Dirección"></textarea>
      <div class="valid-feedback">¡Ok válido!</div>
      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">           
                    </div>
    </div>



    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group"> Producto o Servicio:
      <input type="text" id="ps" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Marca:
  
        <select class="form-control" id="buscadormarca" required>
        <?php
  include('database.php');

  $consulta="SELECT * FROM marca ORDER BY nombre2 ASC";
  $ejecutar= mysqli_query($connection,$consulta) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo $opciones['nombre2']?>"><?php echo $opciones['nombre2']?></option>
   <?php endforeach ?>
    </select> 
 
                   <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>


    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Asignado a:
        <select class="form-control" id="buscadorvivo" required>
        <?php
  include('database.php');

  $consulta2="SELECT nombre3, apellido3 FROM usuario ORDER BY nombre3 ASC";
  $ejecutar= mysqli_query($connection,$consulta2) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?>"><?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?></option>
   <?php endforeach ?>
    </select> 
 
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Pre-Contacto:
  
        <select class="form-control" id="precontacto" required>
      <option value="">Opciones</option>
      <option value="Nuevo">Nuevo.</option>
      <option value="No Interesado">No Interesado.</option>
      <option Value="Contactados Chat">Contactados Chat.</option>
      <option value="Intentando Contactar">Intentando Contactar.</option>
      <option value="Verificar Datos">Verificar Datos.</option>
      <option value="Descargato">Descartado.</option>
    </select> 
 
                   <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group"> Descripción:
     
        <textarea class="form-control" onkeyup="dirr(this);" maxlength="201" id="descripcion" placeholder="Ingrese descripción"></textarea>                 
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

    </div>
    
    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">           
                    </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Fecha de Creación:
      <input type="datetime" id="fecha"  class="form-control" class="fecha" value="<?= $fecha?>"  disabled="disabled">
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group">Fecha de Modificación:
      <input type="datetime" id="fechamod"  class="form-control" class="fecha" value="<?= $fecha?>"  disabled="disabled">
      </div>
    </div>
<br>
					<div class="modal-footer">
          <input type="hidden" id="taskId">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar datos">
					</div>

      </div>
      </fieldset>
      </form>
    </div>
  </div>
</div>    
     <!-- Body  -->
     <div style="height: 20px;"></div>
    <div class="container"  >
        <div class="row">
            <div class="col-lg-12">

            <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div align="right">
        <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
          </div>
        <div class="card-body">

        <h1 class="display-1" align="center">Bienvenidos</h1>

     <!--    <h1 class="h2">Encabezado h1 con estilo h2</h1> -->


 <!--
<div class="col-md-7" align="left">
             
             <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Código</td>
                    <td>Cantidad</td>
                    <td>Foto</td>
                  </tr>
                </thead>
                <tbody id="producto"></tbody>
              </table> 
            </div>  
-->


<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header" align="center">
    Oportunidades
  </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header" align="center">
    Campañas
  </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>


<br>
<div class="card-deck">
  <div class="card">
    <img class="imagen" class="card-img-top" src="imagenes/Logo1.jpg" alt="Card image cap" >
    <div class="card-body">
  <!--    <h5 class="card-title">Card title</h5> -->
      <button type="button" class="btn btn-primary">Ir a...</button>
       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="imagen" class="card-img-top" src="imagenes/Logo2.png" alt="Card image cap">
    <div class="card-body">
   <!--   <h5 class="card-title">Card title</h5> -->
      <button type="button" class="btn btn-primary">Ir a...</button>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="imagen" class="card-img-top" src="imagenes/Logo3.png" alt="Card image cap">
    <div class="card-body">
   <!--   <h5 class="card-title">Card title</h5> -->
      <button type="button" class="btn btn-primary">Ir a...</button>
       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>



<!-- Final Div  -->
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
                        <td></td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Cargo</td>
                      </tr>
                    </thead>
                    <tbody id="container"></tbody>
                  </table>
                  <ul id="container" style="line-height:250%" class="tabla table-bordered table-sm" > </ul>
                </div>
              </div>
              <!--
              <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>--</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Número Principal</td>
                    <td>Número Celular</td>
                    <td>Cargo</td>
                    <td>Origen</td>
                    <td>País</td>
                    <td>Departamento</td>
                    <td>Ciudad</td>
                    <td>Página Web</td>
                    <td>Empresa</td>
                    <td>Industria</td>
                    <td>Dirección</td>
                    <td>Producto o Servicio</td>
                    <td>Marca</td>
                    <td>Asignado a:</td>
                    <td>Estado</td>
                    <td>Descripción</td>
                    <td>Fecha Solicitud</td>
                    <td>Fecha Modificación</td>
                  </tr>
                </thead>
                <tbody id="tasks"></tbody>
              </table> -->
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