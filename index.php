<?php
  # Iniciando la variable de control que permitirá mostrar o no el modal
$exibirModal = false;
  # Verificando si existe o no la cookie
if(!isset($_COOKIE["mostrarModal"]))
{
    # Caso no exista la cookie entra aquí
    # Creamos la cookie con la duración que queramos

    $expirar = 0; // muestra cada 0 minutos
    //$expirar = 112.5; // muestra cada 1.87500 minutos
    //$expirar = 225; // muestra cada 3.75 minutos
    //$expirar = 450; // muestra cada 7.5 minutos
    //$expirar = 900; // muestra cada 15 minutos
    //$expirar = 1800; // muestra cada 30 minutos
    //$expirar = 3600; // muestra cada 1 hora
    //$expirar = 10800; // muestra cada 3 horas
    //$expirar = 21600; //muestra cada 6 horas
    //$expirar = 43200; //muestra cada 12 horas
    //$expirar = 86400;  // muestra cada 24 horas
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
    # Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
    $exibirModal = true;
  }
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <title>Ejemplo Modal - Ventana Emergente</title>
    <meta charset="utf-8">
    <meta name="author" content="Aldair Morales Cuellar">
    <meta name="description" content="Modal con Ventana Emergente con Manejo de Tiempos.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2 align="center">Ejemplo Modal</h2>

      <p align="center">
        Este es un Modal escrito en <strong>PHP</strong> en donde puedes controlar el Modal para que se ejecute por tiempo debido al manejo de Cookies. Este ejemplo de Modal es muy utilizado de Bienvenida en las páginas web profesionales, así que puedes tomar el código y adaptarlo a tu web.
      </p>
      <!-- Modal -->
      <div class="modal fade" id="modalInicio" role="dialog">
        <div class="modal-dialog">
          <!-- Contenido del Modal -->
          <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title" align="center">Este es el Título del Modal</h2>
          </div>
          <div class="modal-body" align="center">
            <p align="center" class="h4">
              Aquí va el contenido del Modal, es decir, este es el Body (cuerpo) del Modal.
            </p>
            <h1>
              <a href="#" class="btn btn-success">BOTÓN!</a>
            </h1>
            <p align="center" class="h4">
              En este espacio pueden agregar cualquier cosa, desde etiquetas hasta bonotes e incluso formularios.
            </p>
            <form>
              <div class="form-group">
                <label>Etiqueta</label>
                <input type="text" class="form-control" name="campo" placeholder="Esto es Un Campo" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h3 align="center">
            Visita mi Página Web
          </h3>
          <p align="center">
            <a href="http://ingmorales.com/" target="_blank">Ing. Aldair Morales Cuéllar</a>
          </p>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </div>

  <?php 

  if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario. 

  ?>
  
  <script>
    $(document).ready(function()
    {
    // id de nuestro modal
    $("#modalInicio").modal("show");
  });
</script>
<?php endif; ?>
</body>
</html>