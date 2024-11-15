<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.png') }}" />
</head>


<body>
  <div class="container-scroller">
    @include('admin.partials.navbar')

    <div class="container-fluid page-body-wrapper">
      @include('admin.partials.settings-panel')
      @include('admin.partials.sidebar')

      <div class="col-10 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ingreso de datos</h4>
            <form class="form-sample" action="{{ route('store') }}" method="POST">
              @csrf
              <p class="card-description">
                Información personal
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" name="nombre" id="nombre" value="{{isset($registro->nombre)?$registro->nombre:old('nombre')}}">
                      {!!$errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Apellido</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('apellido')?'is-invalid':''}}" name="apellido" id="apellido" value="{{isset($registro->apellido)?$registro->apellido:old('apellido')}}">
                      {!!$errors->first('apellido','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Cedula</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('cedula')?'is-invalid':''}}" name="cedula" id="cedula" value="{{isset($registro->cedula)?$registro->cedula:old('cedula')}}">
                      {!!$errors->first('cedula','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Fecha de nacimiento</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control {{$errors->has('edad')?'is-invalid':''}}" name="edad" id="edad" value="{{isset($registro->edad)?$registro->edad:old('edad')}}">
                      {!!$errors->first('fecha de nacimiento','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" value="{{isset($registro->email)?$registro->email:old('email')}}">
                      {!!$errors->first('email','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Numero de teléfono</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('telefono')?'is-invalid':''}}" name="telefono" id="telefono" value="{{isset($registro->telefono)?$registro->telefono:old('telefono')}}">
                      {!!$errors->first('telefono','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ocupación</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('ocupacion')?'is-invalid':''}}" name="ocupacion" id="ocupacion" value="{{isset($registro->ocupacion)?$registro->ocupacion:old('ocupacion')}}">
                      {!!$errors->first('ocupacion','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Grado de instrucción</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('grado')?'is-invalid':''}}" name="grado" id="grado" value="{{isset($registro->grado)?$registro->nombre:old('grado')}}">
                      {!!$errors->first('grado de instruccion','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <p class="card-description">
                Dirección
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Municipio</label>
                    <div class="col-sm-9">
                      <select name="municipio" class="form-control {{$errors->has('municipio') ? 'is-invalid' : ''}}" value="{{isset($registro->municipio)?$registro->municipio:old('municipio')}}">
                        <option value="">Municipio</option>
                        <option value="almirante_padilla">Almirante Padilla</option>
                        <option value="baralt">Baralt</option>
                        <option value="cabimas">Cabimas</option>
                        <option value="catatumbo">Catatumbo</option>
                        <option value="colon">Colón</option>
                        <option value="francisco_javier_pulgar">Francisco Javier Pulgar</option>
                        <option value="guajira">Guajira</option>
                        <option value="jesus_enrique_lossada">Jesús Enrique Lossada</option>
                        <option value="jesus_maria_semprum">Jesús María Semprúm</option>
                        <option value="la_canada_de_urdaneta">La Cañada de Urdaneta</option>
                        <option value="lagunillas">Lagunillas</option>
                        <option value="machiques_de_perija">Machiques de Perijá</option>
                        <option value="mara">Mara</option>
                        <option value="maracaibo">Maracaibo</option>
                        <option value="miranda">Miranda</option>
                        <option value="rosario_de_perija">Rosario de Perijá</option>
                        <option value="san_francisco">San Francisco</option>
                        <option value="santa_rita">Santa Rita</option>
                        <option value="simon_bolivar">Simón Bolívar</option>
                        <option value="sucre">Sucre</option>
                        <option value="valmore_rodriguez">Valmore Rodríguez</option>
                      </select>
                      {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Parroquia</label>
                    <div class="col-sm-9">
                      <select name="parroquia" class="form-control {{$errors->has('parroquia') ? 'is-invalid' : ''}}" value="{{isset($registro->parroquia)?$registro->parroquia:old('parroquia')}}">
                        <option value="">Parroquia</option>
                        <option value="isla_de_toas">Isla de Toas</option>
                        <option value="monagas">Monagas</option>
                        <option value="san_timoteo">San Timoteo</option>
                        <option value="general_urdaneta">General Urdaneta</option>
                        <option value="libertador">Libertador</option>
                        <option value="marcelino_briceño">Marcelino Briceño</option>
                        <option value="nuevo">Nuevo</option>
                        <option value="manuel_guanipa_matos">Manuel Guanipa Matos</option>
                        <option value="ambrosio">Ambrosio</option>
                        <option value="carmen_herrera">Carmen Herrera</option>
                        <option value="la_rosa">La Rosa</option>
                        <option value="german_rios_linares">Germán Ríos Linares</option>
                        <option value="san_benito">San Benito</option>
                        <option value="romulo_betancourt">Rómulo Betancourt</option>
                        <option value="jorge_hernandez">Jorge Hernández</option>
                        <option value="punta_gorda">Punta Gorda</option>
                        <option value="aristides_calvani">Arístides Calvani</option>
                        <option value="encontrados">Encontrados</option>
                        <option value="udon_perez">Udón Pérez</option>
                        <option value="veritas">Veritas</option>
                        <option value="moralito">Moralito</option>
                        <option value="san_carlos_del_zulia">San Carlos del Zulia</option>
                        <option value="santa_cruz_del_zulia">Santa Cruz del Zulia</option>
                        <option value="santa_barbara">Santa Bárbara</option>
                        <option value="urribarri">Urribarrí</option>
                        <option value="agustin_codazzi">Agustín Codazzi</option>
                        <option value="carlos_quevedo">Carlos Quevedo</option>
                        <option value="francisco_javier_pulgar">Francisco Javier Pulgar</option>
                        <option value="simon_rodriguez">Simón Rodríguez</option>
                        <option value="la_concepcion">La Concepción</option>
                        <option value="san_jose">San José</option>
                        <option value="mariano_parra_leon">Mariano Parra León</option>
                        <option value="jose_ramon_yepes">José Ramón Yépez</option>
                        <option value="jesus_maria_semprun">Jesús María Semprún</option>
                        <option value="barí">Barí</option>
                        <option value="concepcion">Concepción</option>
                        <option value="andres_bello">Andrés Bello</option>
                        <option value="chiquinquirá">Chiquinquirá</option>
                        <option value="el_carmelo">El Carmelo</option>
                        <option value="potreritos">Potreritos</option>
                        <option value="libertad"> Libertad </option>
                        <option value="paraute"> Paraute </option>
                        <option value="eleazar_lopez_contreras"> Eleazar López Contreras </option>
                        <option value="campo_lara"> Campo Lara </option>
                        <option value="el_danto"> El Danto </option>
                        <option value="bartolome_de_las_casas"> Bartolomé de las Casas </option>
                        <option value="libertad"> Libertad </option>
                        <option value="rio_negro"> Río Negro </option>
                        <option value="san_jose_de_perija"> San José de Perijá </option>
                        <option value="san_rafael"> San Rafael </option>
                        <option value="la_sierrita"> La Sierrita </option>
                        <option value="las_parcelas"> Las Parcelas </option>
                        <option value="luis_de_vicente"> Luis De Vicente </option>
                        <option value="monseñor_marcos_sergio_godoy"> Monseñor Marcos Sergio Godoy </option>
                        <option value="ricaurte"> Ricaurte </option>
                        <option value="tamare"> Tamare </option>
                        <option value="antonio_borjas_romero"> Antonio Borjas Romero </option>
                        <option value="bolivar"> Bolívar </option>
                        <option value="cacique_mara"> Cacique Mara </option>
                        <option value="caracciolo_parra_perez"> Caracciolo Parra Pérez </option>
                        <option value="cecilio_acosta"> Cecilio Acosta </option>
                        <option value="cristo_de_aranza"> Cristo de Aranza </option>
                        <option value="coquivacoa"> Coquivacoa </option>
                        <option value="chiquinquirá"> Chiquinquirá </option>
                        <option value="francisco_eugenio_bustamante"> Francisco Eugenio Bustamante </option>
                        <option value="idelfonzo_vasquez"> Idelfonzo Vásquez </option>
                        <option value="juana_de_avila"> Juana de Ávila </option>
                        <option value="luis_hurtado_higuera"> Luis Hurtado Higuera </option>
                        <option value="manuel_dagnino"> Manuel Dagnino </option>
                        <option value="olegario_villalobos"> Olegario Villalobos </option>
                        <option value="raul_leoni"> Raúl Leoni </option>
                        <option value="santa_lucia"> Santa Lucía </option>
                        <option value="san_isidro"> San Isidro </option>
                        <option value="venancio_pulgar"> Venancio Pulgar </option>
                        <option value="altagracia "> Altagracia </ option>
                        <option value="faria">Faría</option>
                        <option value="ana_maria_campos">Ana María Campos</option>
                        <option value="san_antonio">San Antonio</option>
                        <option value="san_jose">San José</option>
                        <option value="sinamaica">Sinamaica</option>
                        <option value="alta_guajira">Alta Guajira</option>
                        <option value="elias_sanchez_rubio">Elías Sánchez Rubio</option>
                        <option value="guajira">Guajira</option>
                        <option value="donaldo_garcia">Donaldo García</option>
                        <option value="el_rosario">El Rosario</option>
                        <option value="sixto_zambrano">Sixto Zambrano</option>
                        <option value="san_francisco">San Francisco</option>
                        <option value="el_bajo">El Bajo</option>
                        <option value="domitila_flores">Domitila Flores</option>
                        <option value="francisco_ochoa">Francisco Ochoa</option>
                        <option value="los_cortijos">Los Cortijos</option>
                        <option value="marcial_hernandez">Marcial Hernández</option>
                        <option value="jose_domingos_rus">José Domingo Rus</option>
                        <option value="santa_rita">Santa Rita</option>
                        <option value="el_mene">El Mene</option>
                        <option value="pedro_lucas_urribarri">Pedro Lucas Urribarrí</option>
                        <option value="jose_cenobio_urribarri">José Cenobio Urribarrí</option>
                        <option value="rafael_maria_baralt">Rafael María Baralt</option>
                        <option value="manuel_manrique">Manuel Manrique</option>
                        <option value="rafael_urdaneta">Rafael Urdaneta</option>
                        <option value="bobures">Bobures</option>
                        <option value="gibraltar">Gibraltar</option>
                        <option value="heras">Heras</option>
                        <option value="monseñor_arturo_alvarez">Monseñor Arturo Álvarez</option>
                        <option value="romulo_gallegos">Rómulo Gallegos</option>
                        <option value="el_batey">El Batey</option>
                        <option value="rafael_urdaneta_valmore_rodriguez">Rafael Urdaneta (Valmore Rodríguez)</option>
                        <option value="la_victoria"> La Victoria </option>
                        <option value="raul_cuenca"> Raúl Cuenca </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <p class="card-description">
                Detalles de el Proyecto
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Categoria</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('categoria_p')?'is-invalid':''}}" name="categoria_p" id="categoria_p" value="{{isset($registro->categoria_p)?$registro->categoria_p:old('categoria_p')}}">
                      {!!$errors->first('categoria','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Descripcion</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control {{$errors->has('descripcion_p')?'is-invalid':''}}" name="descripcion_p" id="descripcion_p" value="{{isset($registro->descripcion_p)?$registro->descripcion_p:old('descripcion_p')}}">
                      {!!$errors->first('descripcion','<div class="invalid-feedback">:message</div>')!!}
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-icon-text">
                  <i class="ti-file btn-icon-prepend"></i>
                  Enviar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('build/assets/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('build/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('build/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('build/assets/js/template.js') }}"></script>
  <script src="{{ asset('build/assets/js/settings.js') }}"></script>
  <script src="{{ asset('build/assets/js/todolist.js') }}"></script>
  <script src="{{ asset('build/assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('build/assets/js/Chart.roundedBarCharts.js') }}"></script>

</body>

</html>