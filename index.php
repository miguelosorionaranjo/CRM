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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>CRM</title>  
    <script>
			
      $(function(){
      // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
      $("#adicional").on('click', function(){
        $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
      });
     
      // Evento que selecciona la fila y la elimina 
      $(document).on("click",".eliminar",function(){
        var parent = $(this).parents().get(0);
        $(parent).remove();
      });
          });
    
      </script>
  </head>
  <body>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d ");
         ?>
<!-- NAVIGATION  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
      <a href="#exampleModal4" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Pre-Contacto</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal6" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nueva Oportunidad</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal7" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xe235;</i><span>Listar Oportunidades</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal8" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xe235;</i><span>Listar Campañas</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal9" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xe235;</i><span>Listar Productos</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal99" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xe235;</i><span>Listar Marcas</span></a>
      </li>
      </ul>
      
    </div>
  </div>
</nav>
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
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
      <a href="#exampleModal4" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Pre-Contacto</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal6" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nueva Oportunidad</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal7" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xe235;</i><span>Listar Oportunidades</span></a>
      </li>
      <li class="nav-item">
      <a href="#exampleModal8" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xe235;</i><span>Listar Campañas</span></a>
      </li>
      </ul>
      </div>
    </nav>
    -->
    <!-- Modal Selector -->
<div id="myModal_selector" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Lista de Contactos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" width="200px" class="container">
        <p> Seleccion </p>
        <select class="form-control" id="select_precontacto" onchange="select_precontacto();">
        <option value=""> Seleccione </option>
            <?php

              include('database.php');

              $sql = "SELECT * FROM precontacto ORDER BY nombre ASC";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {

                $id = $row['id'];
                $nombre = $row['nombre'];
                ?>
                <option value="<?php echo $id; ?>"> <?php echo "&nbsp;"; ?> <?php echo $nombre; ?></option>

                <?php
            }
            ?>
        </select>
      
      
        <div id="panel_selector"></div>
      </div>
      <div class="modal-footer">
        
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
      </div>
    </div>

  </div>
</div>
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
<table class="table" id="tabla">
  
  <tbody>
    <tr class="fila-fija">
      <td><input type="text" name="nombre3[]" id="nombre3" placeholder="Ingrese Nombre" class="form-control" required/></td>
	  <td><input type="text" name="apellido3[]" id="apellido3" placeholder=" Ingrese Apellido" class="form-control" required/></td>
      <td class="eliminar"><button  type="button" class="btn btn-warning"> - </button></td>
       </tr>
   
  </tbody>
</table>


<div class="modal-footer">
<button id="adicional" name="adicional" type="button" class="btn btn-warning"> + </button>
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit"  class="btn btn-primary" value="Guardar datos">
					</div>

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
      <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">          
                    </div>
    </div>
      <div class="col-md-12 themed-grid-col" class="form-group">Estado Marca: 
        <select id="estadom" class="form-control" class="gender" required>
              <option disabled selected value="-1">Opción</option>
              <option value="Activa">Activa</option>
              <option value="Inactiva">Inactiva</option>
            </select>
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
        <input type="text" id="name" placeholder="Ingrese Nombre del Producto" class="form-control"  required>   
        <div class="valid-feedback">¡Ok válido!</div>
         <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group">Código del Producto:
        <input type="number" id="codigo" placeholder=" Ingrese Código del Producto" class="form-control" required>
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
      <option value="Sr.">Sr.</option>
      <option value="Sra.">Sra.</option>
      <option Value="Srita.">Srita.</option>
      <option value="Dr.">Dr.</option>
      <option value="Prof.">Prof.</option>
      <option value="Ing.">Ing.</option>
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
      <div class="col-md-6 themed-grid-col"  class="form-group"> Número de Teléfono Principal:
      <input type="number" id="principal" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" for="celular" class="form-group"> Número de Celular:
      <input type="tel" id="celular" cols="30" rows="10" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="000-000-0000" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-12 themed-grid-col" class="form-group"> Correo Electrónico:
      <input type="text" id="correop" cols="30" rows="10" class="form-control" placeholder="Ingrese Correo Electrónico" required>
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
      <option value="Amazonas">Amazonas </option>
<option value="Antioquia">Antioquia </option>
<option value="Arauca">Arauca</option>
<option value="Atlántico">Atlántico</option>
<option value="Bogotá">Bogotá</option>
<option value="Bolívar">Bolívar </option>
<option value="Boyacá">Boyacá </option>
<option value="Caldas">Caldas</option>
<option value="Caquetá">Caquetá</option>
<option value="Casanare">Casanare</option>
<option value="Cauca">Cauca</option>
<option value="Cesar">Cesar</option>
<option value="Chocó">Chocó</option>
<option value="Córdoba">Córdoba</option>
<option value="Cundinamarca">Cundinamarca</option>
<option value="Guainía">Guainía</option>
<option value="Guaviare">Guaviare</option>
<option value="Huila">Huila</option>
<option value="La Guajira">La Guajira</option>
<option value="Magdalena">Magdalena</option>
<option value="Meta">Meta</option>
<option value="Nariño">Nariño</option>
<option value="Norte de Santander">Norte de Santander</option>
<option value="Putumayo">Putumayo</option>
<option value="Quindío">Quindío</option>
<option value="Risaralda">Risaralda</option>
<option value="San Andrés y Providencia">San Andrés y Providencia</option>
<option value="Santander">Santander </option>
<option value="Sucre">Sucre </option>
<option value="Tolima">Tolima</option>
<option value="Valle del Cauca">Valle del Cauca</option>
<option value="Vaupés">Vaupés</option>
<option value="Vichada">Vichada</option>
    </select> 
                    <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-4 themed-grid-col" class="form-group">Ciudad:
        <select class="form-control" id="ciudad" required>
      <option value="">Opciones</option>
      <option value="Armenia">Armenia</option>
<option value="Bogotá">Bogotá</option>
<option value="Medellín">Medellín</option>
<option value="Ibagué">Ibagué</option>
<option value="Cali">Cali</option>
<option value="Santa Marta">Santa Marta</option>
<option value="Barranquilla">Barranquilla</option>
<option value="Valledupar">Valledupar</option>
<option value="Cartagena">Cartagena</option>
<option value="Manizales">Manizales</option>
<option value="Soacha">Soacha</option>
<option value="Pereira">Pereira</option>
<option value="Cúcuta">Cúcuta</option>
<option value="Montería">Montería</option>
<option value="Soledad">Soledad</option>
<option value="Neiva">Neiva</option>
<option value="Bucaramanga">Bucaramanga</option>
<option value="San Juan de Pasto">San Juan de Pasto</option>
<option value="Bello">Bello</option>
<option value="Villavicencio">Villavicencio</option>
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
        <select class="form-control" id="buscadorp" required>
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
        <?php 
$min = new DateTime();
$min->modify("-1 days");
$max = new DateTime();
?>
      <input type="date" id="fechamod"  class="form-control" class="fecha" value="<?php echo date("Y-m-d");?>" min=<?=$min->format("Y-m-d")?> max=<?=$max->format("Y-m-d")?>  >
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

<!-- Modal Oportunidad -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Agregar Oportunidad</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="task-oportunidad" method="post" class="needs-validation" novalidate>
     <fieldset id="task-oportunidad" method="post" class="needs-validation" novalidate>
     <div class="modal-body" width="200px" class="container">
     <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Nombre Oportunidad:
        <input type="text" id="nombreopor" placeholder=" Ingrese Nombre Oportunidad" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Nombre de la Organización:
        <input type="text" id="nombreorg" placeholder=" Ingrese Nombre de la Organización" class="form-control" required>
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group">Nombre de Contacto:
        <select class="form-control" id="nombrecon" required>
        <?php
  include('database.php');

  $consulta7="SELECT gender, nombre, apellido FROM precontacto ORDER BY nombre ASC";
  $ejecutar= mysqli_query($connection,$consulta7) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo  $opciones['gender']."&nbsp;".$opciones['nombre']."&nbsp;".$opciones['apellido']?>"><?php echo $opciones['gender']."&nbsp;".$opciones['nombre']."&nbsp;".$opciones['apellido']?></option>
   <?php endforeach ?>
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
      <div class="col-md-6 themed-grid-col" class="form-group"> Importe $:
      <input type="number" id="importe" cols="30" rows="10" class="form-control" placeholder="Ingrese Número de Contrato" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Tipo Oportunidad:
        <select class="form-control" id="tipoopor" required>
      <option value="">Opciones</option>
      <option value="Negocio Existente">Negocio Existente</option>
      <option value="Nuevo Negocio">Nuevo Negocio</option>
    </select> 
                    <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Fecha Estimada de Cierre:
      <input type="date" id="fechac"  class="form-control" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Origen Pre-Contacto:
        <select class="form-control" id="origenpc" required>
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
      <div class="col-md-12 themed-grid-col" class="form-group">Campaña Origen:
      <input type="text" id="co" placeholder="Ingrese Origen de Campaña" class="form-control" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
    </div>
 

    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">           
                    </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group"> Fase de Venta:
        <select class="form-control" id="fv" required>
      <option value="">Opciones</option>
      <option value="Cotización">Cotización</option>
      <option value="Cerrada-Ganada">Cerrada-Ganada</option>
      <option value="Cerrada-Perdida">Cerrada-Perdida</option>
    </select> 
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Probabilidad %:
      <input type="number" id="pro" placeholder="Ingrese % de Probabilidad" class="form-control" required>
                   <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>


    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Asignado a:
        <select class="form-control" id="buscadorvivo2" required>
        <?php
  include('database.php');

  $consulta9="SELECT nombre3, apellido3 FROM usuario ORDER BY nombre3 ASC";
  $ejecutar= mysqli_query($connection,$consulta9) or die (mysqli_error($connection));
  ?>

<option value="">Opciones</option>
  <?php foreach ($ejecutar as $opciones): ?>

      <option value="<?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?>"><?php echo $opciones['nombre3']."&nbsp;".$opciones['apellido3']?></option>
   <?php endforeach ?>
    </select> 
 
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

      <div class="col-md-6 themed-grid-col" class="form-group"> Siguiente Paso:
  
        <select class="form-control" id="sp" required>
      <option value="">Opciones</option>
      <option value="Enviar Cotización">Enviar Cotización</option>
      <option value="Cerrar Compra">Cerrar Compra</option>
    </select> 
 
                   <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-12 themed-grid-col" class="form-group"> Descripción:
     
        <textarea class="form-control" onkeyup="dirr(this);" maxlength="201" id="descrip_o" placeholder="Ingrese descripción"></textarea>                 
        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>

    </div>
    
    <div class="pb-3">
    <div class="col-md-12 mb-3" class="form-group">           
                    </div>
    </div>

    <div class="row">
      <div class="col-md-6 themed-grid-col" class="form-group">Fecha de Creación Oportunidad:
      <input type="datetime" id="fechaco"  class="form-control" class="fecha" value="<?= $fecha?>"  disabled="disabled">
      </div>
      <div class="col-md-6 themed-grid-col" class="form-group">Estado Oportunidad:
        <select class="form-control" id="eo" required>
      <option value="">Opciones</option>
      <option value="Activa">Activa</option>
      <option value="Inactiva">Inactiva</option>
    </select> 
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
<!-- Modal Listar Oportunidades -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Lista de Oportunidades</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" width="200px" class="container">
      
      <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre Oportunidad</td>
                    <td>Nombre Organización</td>
                    
                  </tr>
                </thead>
                <tbody id="oportunidades"></tbody>
              </table> 

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
					</div>
      </div>
     
    </div>
  </div>
</div>   
<!-- Modal Listar Campañas -->
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Lista de Campañas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" width="200px" class="container">
      
      <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre Campaña</td>
                    <td> Descripción</td>
                    
                  </tr>
                </thead>
                <tbody id="campanas"></tbody>
              </table> 

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
					</div>
      </div>
     
    </div>
  </div>
</div>   
<!-- Modal Listar Productos -->
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Lista de Productos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" width="200px" class="container">
      
      <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre Producto</td>
                    <td> Código</td>
                    <td>Total</td>
                    <td>Cantidad</td>
                    <td>Proveedor</td>
                    <td>Imágen</td>
                    <td> Opción</td>
                  </tr>
                </thead>
                <tbody id="productost"></tbody>
              </table> 

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
					</div>
      </div>
     
    </div>
  </div>
</div> 
<!-- Modal Listar Marcas -->
<div class="modal fade" id="exampleModal99" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
      <h4 class="modal-title">Lista de Marcas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" width="200px" class="container">
      
      <table class="tabla" class="table table-bordered table-sm" id="customers" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre Marca</td>
                    <td> Estado</td>
                    <td> Opción</td>
                  </tr>
                </thead>
                <tbody id="marca"></tbody>
              </table> 

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
					</div>
      </div>
     
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
    Pre-Contactos
  </div>
      <div class="card-body">
    
              <table id="tablax" class="table table-striped table-bordered" style="width:100%">
              <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>#</td>
                    <td>Nombre </td>
                    <td>Apellido</td>
                    <td>Nombre Empresa</td>
                    <td>Estado</td>
                    <td>Fecha</td>
                  </tr>
                </thead>
                <tbody id="pre"></tbody>
    </table>
      </div>
    </div>
  </div>

   <!-- Modal Consulta Oportunidad-->
<div id="myModal_consultaro" class="modal fade"  id="editar<?php echo $row['id_opor'];?>" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header" >
      <h4 class="modal-title">Información Oportunidad</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body" width="200px" class="container">
     <table class="table table-bordered">
	<tr>
    <th> # </th>
		<th> Nombre Oportunidad </th>
		<th> Nombre de la Organización </th>
		<th> Importe $ </th>
	
  </tr>
  
<?php

include('database.php');

$query = "SELECT * from oportunidad WHERE id_opor ='$id_opor' ";
$result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
$i =0;
while($row = mysqli_fetch_array($result)) {
	$i++;
	$id_opor = $row['id_opor'];
	$nombreopor = $row['nombreopor'];
  $nombreorg = $row['nombreorg'];
  $importe = $row['importe'];
	?>
     <tr>
     	<td> <?php echo $i; ?></td>
     	<td> <?php echo $nombreopor; ?></td>
     	<td> <?php echo $nombreorg; ?></td>
     	<td> <?php echo $importe; ?></td>
     </tr>
	<?php
}

?>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
      </div>
    </div>

  </div>
</div>

<!-- Lista Oportunidades Index-->
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header" align="center">
    Oportunidades
  </div>
      <div class="card-body">

      <table class="tabla" class="table table-bordered table-sm" id="customers" id="tablax" align="left">
                <thead class="tabla">
                  <tr class="table-primary" class="tabla">
                    <td>Id</td>
                    <td>Nombre Oportunidad</td>
                    <td>Nombre Organización</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody id="opor"></tbody>
              </table> 
      </div>
    </div>
  </div>
</div>
<br>

<div class="col-sm-12">
    <div class="card">
    <div class="card-header" align="center">
    Productos Disponibles
  </div>
      <div class="card-body">


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

   
      </div>
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

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
 
    
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script>
  </body>
</html>
