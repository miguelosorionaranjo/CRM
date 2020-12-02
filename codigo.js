// Validaciones function Required
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})(); //
// Funciones
$(document).ready(function() {
  // Global Settings
  let edit = false;
  // Testing Jquery
  console.log('jquery is working!');
  fetchTasks();
  marca();
  usuario();
  producto();
  $('#task-result').hide();
  // Buscador
  $('#search').keyup(function() {
    if($('#search').val()) {
      let search = $('#search').val();
      $.ajax({
        url: 'buscar.php',
        data: {search},
        type: 'POST',
        success: function (response) {
          if(!response.error) {
            let tasks = JSON.parse(response);
            let template = '';
            tasks.forEach(task => {
              template += `
              <tr  >
              <td>${task.gender}</td>
              <td  >
              ${task.nombre}
              </td>
              <td>
                ${task.apellido} 
              </td>
              <td>
                ${task.cargo} 
              </td>
              
              </tr>
                    ` 
            });
            $('#task-result').show();
            $('#container').html(template);
          }
        } 
      })
    }
  });

  //Agregar Marca
  $('#agregar-marca').submit(e => {
    e.preventDefault();
    const postData = {
      nombre2: $('#nombre2').val(),
      estadom: $('#estadom').val(),
      id: $('#taskId').val()
    };
    const url = 'agregar-marca.php'  ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#agregar-marca').trigger('reset');
      fetchTasks();
      marca();
      usuario();
      producto();
    });
  });
  // Lista de mARCA
  function marca() {
    $.ajax({
      url: 'lista-marca.php',
      type: 'GET',
      success: function(response) {
        const marca = JSON.parse(response);
        let template = '';
        marca.forEach(task => {
          template += `
                  <tr taskId="${task.id}">
                  <td>${task.id}</td>
                  <td  >
                  ${task.nombre}
                  </td>
                  <td  >
                  ${task.estadom}
                  </td>
                  <td>
                    <button class="task-delete btn btn-danger">
                     Eliminar 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#marca').html(template);
      }
    });
  }
  
  //Agregar Usuario
  $('#agregar-usuario').submit(e => {
    e.preventDefault();
    const postData = {
      nombre3: $('#nombre3').val(),
      apellido3: $('#apellido3').val(),
      id: $('#taskId').val()
    };
    const url = 'agregar-usuario.php'  ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#agregar-usuario').trigger('reset');
      fetchTasks();
      marca();
      usuario();
      producto();
    });
  });

  // Lista de Usuario
  function usuario() {
    $.ajax({
      url: 'lista-usuario.php',
      type: 'GET',
      success: function(response) {
        const usuario = JSON.parse(response);
        let template = '';
        usuario.forEach(task => {
          template += `
                  <tr taskId="${task.id}">
                  <td>${task.id}</td>
                  <td  >
                  ${task.nombre3}
                  </td>
                  
                  <td  >
                  ${task.apellido3}
                  </td>
                  <td>
                    <button class="task-eliminar btn btn-danger">
                     Eliminar 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#usuario').html(template);
      }
    });
  }
//Agregar Pre-Contacto
  $('#task-form').submit(e => {
    e.preventDefault();
    const postData = {
      gender: $('#gender').val(),
      nombre: $('#nombre').val(),
      apellido: $('#apellido').val(),
      principal: $('#principal').val(),
      celular: $('#celular').val(),
      cargo: $('#cargo').val(),
      origen: $('#origen').val(),
      pais: $('#pais').val(),
      departamento: $('#departamento').val(),
      ciudad: $('#ciudad').val(),
      pagina: $('#pagina').val(),
      empresa: $('#empresa').val(),
      industria: $('#industria').val(),
      direccion: $('#direccion').val(),
      ps: $('#ps').val(),
      buscadormarca: $('#buscadormarca').val(),
      buscadorvivo: $('#buscadorvivo').val(),
      precontacto: $('#precontacto').val(),
      descripcion: $('#descripcion').val(),
      fecha: $('#fecha').val(),
      fechamod: $('#fechamod').val(),
      id: $('#taskId').val()
    };
    const url = edit === false ? 'agregar.php' : 'editar.php' ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#task-form').trigger('reset');
      fetchTasks();
    });
  });
  // Fetching Tasks
  function fetchTasks() {
    $.ajax({
      url: 'lista.php',
      type: 'GET',
      success: function(response) {
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.id}">
                  <td>${task.id}</td>
                  <td  >
                  ${task.gender}
                  </td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.nombre} 
                  </a>
                  </td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.apellido} 
                  </a>
                  </td>
                  <td>${task.principal}</td>
                  <td  >
                  ${task.celular}
                  </td>
                  <td  >
                  ${task.cargo}
                  </td>
                  <td  >
                  ${task.origen}
                  </td>
                  <td>
                  ${task.pais}
                  </td>
                  <td   >
                  ${task.departamento}
                  </td>
                  <td >
                  ${task.ciudad}
                  </td>
                  
                  <td>
                  ${task.pagina}
                  </td>
                  
                  <td>
                  ${task.empresa}
                  </td>
                  
                  <td>
                  ${task.industria}
                  </td>
                  
                  <td>
                  ${task.direccion}
                  </td>
                  
                  <td>
                  ${task.ps}
                  </td>
                  
                  <td>
                  ${task.buscadormarca}
                  </td>
                  
                  <td>
                  ${task.buscadorvivo}
                  </td>
                  
                  <td>
                  ${task.precontacto}
                  </td>
                  
                  <td>
                  ${task.descripcion}
                  </td>
                  
                  <td >
                  ${task.fecha}
                  </td>
                  
                  <td>
                  ${task.fechamod}
                  </td>
                  <td>
                    <button class="task-delete btn btn-danger">
                     Eliminar 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#tasks').html(template);
      }
    });
  }
  // Get a Single Task by Id 
  $(document).on('click', '.task-item', (e) => {
    const element = $(this)[0].activeElement.parentElement.parentElement;
    const id = $(element).attr('taskId');
    $.post('busqueda-simple.php', {id}, (response) => {
      const task = JSON.parse(response);
      $('#gender').val(task.gender);
      $('#nombre').val(task.nombre);
      $('#apellido').val(task.apellido);
      $('#principal').val(task.principal);
      $('#celular').val(task.celular);
      $('#cargo').val(task.cargo);
      $('#origen').val(task.origen);
      $('#pais').val(task.pais);
      $('#departamento').val(task.departamento);
      $('#ciudad').val(task.ciudad);
      $('#pagina').val(task.pagina);
      $('#empresa').val(task.empresa);
      $('#industria').val(task.industria);
      $('#direccion').val(task.direccion);
      $('#ps').val(task.ps);
      $('#buscadormarca').val(task.buscadormarca);
      $('#buscadorvivo').val(task.buscadorvivo);
      $('#precontacto').val(task.precontacto);
      $('#descripcion').val(task.descripcion);
      $('#fecha').val(task.fecha);
      $('#fechamod').val(task.fechamod);
      $('#taskId').val(task.id);
      edit = true;
    });
    e.preventDefault();
  });
  // Eliminar Pre-Contacto
  $(document).on('click', '.task-delete', (e) => {
    if(confirm('¿Estás seguro de que quieres eliminarlo?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      $.post('eliminar.php', {id}, (response) => {
        fetchTasks();
      });
    }
  });
    // Eliminar Usuario
    $(document).on('click', '.task-eliminar', (e) => {
      if(confirm('¿Estás seguro de que quieres eliminarlo?')) {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr('taskId');
        $.post('eliminar-usuario.php', {id}, (response) => {
          fetchTasks();
        });
      }
    });

  // Eliminar Marca
  $(document).on('click', '.task-delete', (e) => {
    if(confirm('¿Estás seguro de que quieres eliminarlo?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      $.post('eliminar-marca.php', {id}, (response) => {
        fetchTasks();
      });
    }
  });
//Agregar Producto
$('#task-producto').submit(e => {
  e.preventDefault();
  const postData = {
    name: $('#name').val(),
    codigo: $('#codigo').val(),
    precio: $('#precio').val(),
    iva: $('#iva').val(),
    cantidad: $('#cantidad').val(),
    categoria: $('#categoria').val(),
    proveedor: $('#proveedor').val(),
    imagen: $('#imagen').val(),
    id: $('#taskId').val()
  };
  const url =  'agregar-producto.php'  ;
  console.log(postData, url);
  $.post(url, postData, (response) => {
    console.log(response);
    $('#task-producto').trigger('reset');
    fetchTasks();
  });
});
// Lista de Producto
function producto() {
  $.ajax({
    url: 'lista-producto.php',
    type: 'GET',
    success: function(response) {
      const producto = JSON.parse(response);
      let template = '';
      producto.forEach(task => {
        template += `
                <tr taskId="${task.id}">
                <td>${task.id}</td>
                <td  >
                ${task.name}
                </td>
                <td  >
                ${task.codigo}
                </td>
               
                <td  >
                ${task.cantidad}
                </td>
                <td  >
                ${task.imagen}
                </td>
                <td>
                  <button class="task-eliminar btn btn-danger">
                   Eliminar 
                  </button>
                </td>
                </tr>
              `
      });
      $('#producto').html(template);
    }
  });
}
  //Agregar Campaña
  $('#agregar-campana').submit(e => {
    e.preventDefault();
    const postData = {
      nombrec: $('#nombrec').val(),
      buscadorvivo: $('#buscadorvivo').val(),
      tipoc: $('#tipoc').val(),
      webc: $('#webc').val(),
      estadoc: $('#estadoc').val(),
      descripcionc: $('#descripcionc').val(),
      id: $('#taskId').val()
    };
    const url = 'agregar-campana.php'  ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#agregar-campana').trigger('reset');
      fetchTasks();
      marca();
      usuario();
      producto();
    });
  });
 // Fin del Código
});