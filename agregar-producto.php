<?php
  include('database.php');


  if(isset($_POST['name'])) {
    $task_name = $_POST['name'];
    $task_codigo = $_POST['codigo'];
    $task_precio = $_POST['precio'];
    $task_iva = $_POST['iva'];
    $task_cantidad = $_POST['cantidad'];
    $task_categoria = $_POST['categoria'];
    $task_proveedor = $_POST['proveedor'];
    $task_imagen = $_FILES['imagen']['id'];

    $tipo = $_FILES['imagen']['type'];
    $tamagno = $_FILES['imagen']['size'];
 //   $dir_subida = 'imagenes/';
  //  $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
  //  move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);

      //Ruta de la carpeta destino en el servidor
      $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/FasePiGroup/CRM/imagenes/';

    if(file_exists($_FILES['imagen']['tmp_name'])|| is_uploaded_file($_FILES['imagen']['tmp_name']));
    {
      $ext = explode(".", $_FILES['imagen']);
      if($_FILES['imagen']['type'] == "imagen/jpg" || $_FILES['imagen']['type']  == "imagen/jpeg" || 
      $_FILES['imagen']['type'] == "imagen/png");
      {
    
        $task_imagen = round(microtime(true)) . '.' . end($ext);
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$task_imagen);
      }
    }
    


 //   if(isset($imagen) && $imagen != ""){
   //   $tipo = $_FILES['imagen']['type'];
     // $temp  = $_FILES['imagen']['tmp_name'];

//     if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'jpg')|| strpos($tipo,'png')))){
  //      $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, jpg, png';
    //    $_SESSION['tipo'] = 'danger';
      //  header('location:index.php');





 // $ruta = $_FILES['foto'].['tmp_name'];
//$destino="images/".$task_foto;
//copy($ruta,$destino);

 // if(isset($foto) && $foto != ""){
   // $tipo = $_FILES['foto']['type'];
  //  $temp  = $_FILES['foto']['tmp_name'];

 //  if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
    //  $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
   //   $_SESSION['tipo'] = 'danger';
  //    header('location:index.php');
  $query = "INSERT into producto   (name, 
                                    codigo, 
                                    precio, 
                                    iva, 
                                    cantidad, 
                                    categoria, 
                                    proveedor, 
                                    imagen) 
                                    VALUES 
                                    ('$task_name', 
                                    '$task_codigo', 
                                    '$task_precio', 
                                    '$task_iva', 
                                    '$task_cantidad', 
                                    '$task_categoria', 
                                    '$task_proveedor', 
                                    '$task_imagen')";
  $result = mysqli_query($connection, $query);
 // move_uploaded_file($temp,'imagenes/'.$imagen);
 // header('location:index.php');
  if (!$result) {
    die('Query Failed.');
  
            
  //  move_uploaded_file($temp,'images/'.$foto);   
   //          $_SESSION['mensaje'] = 'se ha subido correctamente';
    //         $_SESSION['tipo'] = 'success';
     //        header('location:/index.php');
      //      }else{
       //       $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        //      $_SESSION['tipo'] = 'danger';
  }
  echo "Registrado con Éxito";  

 // echo  $_FILES['imagen']['type'];
}


?>