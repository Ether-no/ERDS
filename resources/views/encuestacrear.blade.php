<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{asset('js/crearqr.js') }}"></script>
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
    <form action='{{url('/encuestas')}}' method='POST' enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('tempD')}}" name="tempD" id="tempD" placeholder="">
            @if ($errors->has('tempD'))
                <small class="form-text text-danger">{{ $errors->first('tempD') }}</small>
            @endif
        <label for="producto">TEMP D</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_3')}}" name="preg_3" id="preg_3" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_3'))
                <small class="form-text text-danger">{{ $errors->first('preg_3') }}</small>
            @endif
        <label for="producto">PREGUNTA 3</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_4')}}" name="preg_4" id="preg_4" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_4'))
                <small class="form-text text-danger">{{ $errors->first('preg_4') }}</small>
            @endif
        <label for="producto">PREGUNTA 4</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_5')}}" name="preg_5" id="preg_5" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_5'))
                <small class="form-text text-danger">{{ $errors->first('preg_5') }}</small>
            @endif
        <label for="producto">PREGUNTA 5</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_3')}}" name="preg_6" id="preg_6" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_6'))
                <small class="form-text text-danger">{{ $errors->first('preg_6') }}</small>
            @endif
        <label for="producto">PREGUNTA 6</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_7')}}" name="preg_7" id="preg_7" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_7'))
                <small class="form-text text-danger">{{ $errors->first('preg_7') }}</small>
            @endif
        <label for="producto">PREGUNTA 7</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_3')}}" name="preg_8" id="preg_8" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_8'))
                <small class="form-text text-danger">{{ $errors->first('preg_8') }}</small>
            @endif
        <label for="producto">PREGUNTA 8</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="validate" value="{{old('preg_9')}}" name="preg_9" id="preg_9" placeholder="Femenino o Masculino">
            @if ($errors->has('preg_9'))
                <small class="form-text text-danger">{{ $errors->first('preg_9') }}</small>
            @endif
        <label for="producto">PREGUNTA 9</label>
      </div>
      <div class="input-field col s12">
          @foreach ($detalles as $item)
             <input type="text" class="validate" value="{{$item->qr}}" name="qr" id="qr" placeholder="Femenino o Masculino">  
          @endforeach
            @if ($errors->has('qr'))
                <small class="form-text text-danger">{{ $errors->first('qr') }}</small>
            @endif
        <label for="producto">QR</label>
      </div>
      <div class="input-field col s12">
 
           <input type="text" class="validate" value="20/09/18" name="dia" id="dia" placeholder="Femenino o Masculino">  

          @if ($errors->has('dia'))
              <small class="form-text text-danger">{{ $errors->first('dia') }}</small>
          @endif
      <label for="producto">fecha</label>
    </div>
      <button class="btn btn-success btn-block">
          Guardar
      </button>
    </form>
  </div>
</div>
    </body>
    </html>