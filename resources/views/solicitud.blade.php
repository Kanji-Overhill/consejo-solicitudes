<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <title>Solicitudes | Comunicacion CCJP</title>
  </head>
  <body>
    <header></header>
    <main>
      <form action="" method="post">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">Solicitud</h1>
              <h2 class="text-center title">Diseño <span>- </span></h2>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" name="correo" class="form-control" placeholder="Correo">
              </div>
              <div class="form-group">
                <input type="text" name="area" class="form-control" placeholder="Área">
              </div>
              <div class="form-group">
                <select name="tipo_solicitud" id="tipo_solicitud" class="form-control">
                  <option value="" selected hidden>Tipo de solicitud</option>
                  <option value="Diseño">Diseño</option>
                  <option value="Video">Video</option>
                  <option value="Infografía">Infografía</option>
                  <option value="Documentos">Documentos</option>
                  <option value="Gif">Gif</option>
                </select>
              </div>
              <div class="form-group">
                <select name="diseño" id="diseño" class="form-control d-none">
                  <option value="" selected hidden>Tipo de Diseño</option>
                  <option value="Postal">Postal</option>
                  <option value="Diploma">Diploma</option>
                  <option value="Invitación">Invitación</option>
                  <option value="Infografía">Infografía</option>
                  <option value="Documentos">Documentos</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="fecha_entrega_estimada">Fecha estimada de entrega</label>
                <input type="date" class="form-control diseño" name="fecha_entrega_estimada" id="fecha_entrega_estimada">
              </div>
            </div>
          </div>
        </div>
      </form>
    </main>
    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url('js/main.js') }}"></script>
  </body>
</html>