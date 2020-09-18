<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="col-md-4 offset-md-2">
  <div class="card-body">
    <form>
      <div class="form-group">
        <input type="url" name="foto" placeholder="http://server.com/tu-imagen.jpg" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="nombre"  placeholder="Jhon Doe" class="form-control" autofocus>
      </div>
      <div class="form-group">
        <input type="text" name="sexo"  placeholder="Femenino o Masculino" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="puesto"  placeholder="Gerente Producción" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="edad" placeholder="29" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="qr"  value="CODIGO"  class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="pulsera"  placeholder="Color"  class="form-control">
      </div>
      <button class="btn btn-success btn-block">
          Guardar
      </button>
    </form>
  </div>
</div>
<div class="col-md-5" #screen>
  <div class="card-header d-flex justify-content-between align-items-center mx-auto">
    <div class="mx-auto"><div>Azul</div>  
  </div>
  </div>
  <div class="card card-body text-center" style="font-family: 'Quicksand';">
    <div class='row justify-content-center'>
      <div class="col-md-6" style="padding-top: 3%; padding-bottom: 3%;">
        <div class="img-round ">
          <img  src="http://erdsweb.xyz/appc19/assets/no-photo.jpg">
        </div>
      </div>
    </div>

    <h2>Nombre</h2>
    <h5>Cargo: Gaffer</h5>
    <h5>Edad: 29 Años</h5>
    <div class='row justify-content-center'>
      <div class="col-md-6" style="padding-top: 3%; padding-bottom: 3%;">
          <img src="https://chart.apis.google.com/chart?cht=qr&chs=200x200&chl= + http://erdsweb.xyz/appc19/%23/users/consulta/codigo&chld=M|1" imageObject.crossOrigin='anonymous'>
      </div>
    </div>
  </div> 
  <img #canvas>
  <a #downloadLink></a>
</div>
  <button class="btn btn-success btn-block">
    Descargar Credencial
</button>
<div id="download">
  </div>
    </body>
    </html>