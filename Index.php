<!doctype html>
<html lang="en">

<head>
  <title>Inicio </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/Posiciones.css" rel="stylesheet" type="text/css">

</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link active" href="#">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">nosostros</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">contactos</a>
      </li>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">Sub_Menu</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Inicio</a></li>
        <li><a class="dropdown-item" href="#">Registro de alumno</a></li>
        <li><a class="dropdown-item" href="#">Gracias</a></li>
      </ul>
    </li> 


    <lu class="navbar-nav"  id ="derecha">

    <li class="nav-item ">
        <a class="nav-link active ml-auto" href="#">Iniciar</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active ml-auto" href="#">cerrar</a>
      </li>
</lu>
  </div>
</nav>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Nuevo
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Datos Estudiantes</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="mb-3">
           <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="0" required>
             </div>

          <div class="mb-3">
            <input type="text" name="txt_carnet" id="txt_carnet" class="form-control" placeholder="carnet" required>
              </div>

          <div class="mb-3">
            <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombres" required>
             </div>

          <div class="mb-3">
            <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellidos" required>
             </div>

          <div class="mb-3">
            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Direccion" required>
             </div>

           <div class="mb-3">
             <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="Telefono" required>
               </div>
        
           <div class="mb-3">
             <input type="text" name="txt_corre" id="txt_correo" class="form-control" placeholder="Correo Electronico" required>
               </div>

          <div class="mb-3">
             <select class="form-select" name="drop_sangre" id="drop_sangre">
               <option value=0> ---Tipo de Sangre -- </option>




          <div class="mb-3">
           <label for="" class="lbl_fn"><b>Su fecha de Nacimiento</b></label>
            <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="aaaa-mm-dd" required>

        </div>

           <div class="btn-group">
               <div class="mb-3">
                 <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar" >
                   </div>

           <div class="mb-3">
              <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar" >
                </div>

            <div class="mb-3">
              <input type="submit" name="btn_eliminar" id="btn_eliminar" class="btn btn-primary" value="Eliminar" >
                </div>
        </div>
        
    </div>
        
 </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>