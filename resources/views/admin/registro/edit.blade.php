@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card-body">
            <h4 class="card-title">Ingreso de datos</h4>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form class="form-sample" action="{{ route('registro.update', ['id' => $registro->id]) }}" method="POST">
                @csrf
                @method('PATCH')
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
                        <select class="form-control {{$errors->has('grado')?'is-invalid':''}}" name="grado" id="grado">
                            <option value="">Seleccione</option>
                            <option value="Bachiller" {{ (isset($registro->grado) && $registro->grado == 'Bachiller') ? 'selected' : '' }}>Bachiller</option>
                            <option value="Estudiante" {{ (isset($registro->grado) && $registro->grado == 'Estudiante') ? 'selected' : '' }}>Estudiante</option>
                            <option value="Egresado" {{ (isset($registro->grado) && $registro->grado == 'Egresado') ? 'selected' : '' }}>Egresado</option>
                            <option value="No Estudia" {{ (isset($registro->grado) && $registro->grado == 'No Estudia') ? 'selected' : '' }}>No Estudia</option>
                        </select>
                        {!!$errors->first('grado','<div class="invalid-feedback">:message</div>')!!}
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
                        <select name="municipio" class="form-control {{$errors->has('municipio') ? 'is-invalid' : ''}}">
                        <option value="">Municipio</option>
                        <option value="almirante_padilla" {{ (isset($registro->municipio) && $registro->municipio == 'almirante_padilla') ? 'selected' : '' }}>Almirante Padilla</option>
                        <option value="baralt" {{ (isset($registro->municipio) && $registro->municipio == 'baralt') ? 'selected' : '' }}>Baralt</option>
                        <option value="cabimas" {{ (isset($registro->municipio) && $registro->municipio == 'cabimas') ? 'selected' : '' }}>Cabimas</option>
                        <option value="catatumbo" {{ (isset($registro->municipio) && $registro->municipio == 'catatumbo') ? 'selected' : '' }}>Catatumbo</option>
                        <option value="colon" {{ (isset($registro->municipio) && $registro->municipio == 'colon') ? 'selected' : '' }}>Colón</option>
                        <option value="francisco_javier_pulgar" {{ (isset($registro->municipio) && $registro->municipio == 'francisco_javier_pulgar') ? 'selected' : '' }}>Francisco Javier Pulgar</option>
                        <option value="guajira" {{ (isset($registro->municipio) && $registro->municipio == 'guajira') ? 'selected' : '' }}>Guajira</option>
                        <option value="jesus_enrique_lossada" {{ (isset($registro->municipio) && $registro->municipio == 'jesus_enrique_lossada') ? 'selected' : '' }}>Jesús Enrique Lossada</option>
                        <option value="jesus_maria_semprum" {{ (isset($registro->municipio) && $registro->municipio == 'jesus_maria_semprum') ? 'selected' : '' }}>Jesús María Semprúm</option>
                        <option value="la_canada_de_urdaneta" {{ (isset($registro->municipio) && $registro->municipio == 'la_canada_de_urdaneta') ? 'selected' : '' }}>La Cañada de Urdaneta</option>
                        <option value="lagunillas" {{ (isset($registro->municipio) && $registro->municipio == 'lagunillas') ? 'selected' : '' }}>Lagunillas</option>
                        <option value="machiques_de_perija" {{ (isset($registro->municipio) && $registro->municipio == 'machiques_de_perija') ? 'selected' : '' }}>Machiques de Perijá</option>
                        <option value="mara" {{ (isset($registro->municipio) && $registro->municipio == 'mara') ? 'selected' : '' }}>Mara</option>
                        <option value="maracaibo" {{ (isset($registro->municipio) && $registro->municipio == 'maracaibo') ? 'selected' : '' }}>Maracaibo</option>
                        <option value="miranda" {{ (isset($registro->municipio) && $registro->municipio == 'miranda') ? 'selected' : '' }}>Miranda</option>
                        <option value="rosario_de_perija" {{ (isset($registro->municipio) && $registro->municipio == 'rosario_de_perija') ? 'selected' : '' }}>Rosario de Perijá</option>
                        <option value="san_francisco" {{ (isset($registro->municipio) && $registro->municipio == 'san_francisco') ? 'selected' : '' }}>San Francisco</option>
                        <option value="santa_rita" {{ (isset($registro->municipio) && $registro->municipio == 'santa_rita') ? 'selected' : '' }}>Santa Rita</option>
                        <option value="simon_bolivar" {{ (isset($registro->municipio) && $registro->municipio == 'simon_bolivar') ? 'selected' : '' }}>Simón Bolívar</option>
                        <option value="sucre" {{ (isset($registro->municipio) && $registro->municipio == 'sucre') ? 'selected' : '' }}>Sucre</option>
                        <option value="valmore_rodriguez" {{ (isset($registro->municipio) && $registro->municipio == 'valmore_rodriguez') ? 'selected' : '' }}>Valmore Rodríguez</option>
                        </select>
                        {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Parroquia</label>
                    <div class="col-sm-9">
                        <select name="parroquia" class="form-control {{$errors->has('parroquia') ? 'is-invalid' : ''}}" value="{{isset($registro->parroquia)?$registro->parroquia:old('parroquia')}}">
                        <option value="">Parroquia</option>
                        <option value="isla_de_toas" {{ (isset($registro->parroquia) && $registro->parroquia == 'isla_de_toas') ? 'selected' : '' }}>Isla de Toas</option>
                        <option value="monagas" {{ (isset($registro->parroquia) && $registro->parroquia == 'monagas') ? 'selected' : '' }}>Monagas</option>
                        <option value="san_timoteo" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_timoteo') ? 'selected' : '' }}>San Timoteo</option>
                        <option value="general_urdaneta" {{ (isset($registro->parroquia) && $registro->parroquia == 'general_urdaneta') ? 'selected' : '' }}>General Urdaneta</option>
                        <option value="libertador" {{ (isset($registro->parroquia) && $registro->parroquia == 'libertador') ? 'selected' : '' }}>Libertador</option>
                        <option value="marcelino_briceño" {{ (isset($registro->parroquia) && $registro->parroquia == 'marcelino_briceño') ? 'selected' : '' }}>Marcelino Briceño</option>
                        <option value="nuevo" {{ (isset($registro->parroquia) && $registro->parroquia == 'nuevo') ? 'selected' : '' }}>Nuevo</option>
                        <option value="manuel_guanipa_matos" {{ (isset($registro->parroquia) && $registro->parroquia == 'manuel_guanipa_matos') ? 'selected' : '' }}>Manuel Guanipa Matos</option>
                        <option value="ambrosio" {{ (isset($registro->parroquia) && $registro->parroquia == 'ambrosio') ? 'selected' : '' }}>Ambrosio</option>
                        <option value="carmen_herrera" {{ (isset($registro->parroquia) && $registro->parroquia == 'carmen_herrera') ? 'selected' : '' }}>Carmen Herrera</option>
                        <option value="la_rosa" {{ (isset($registro->parroquia) && $registro->parroquia == 'la_rosa') ? 'selected' : '' }}>La Rosa</option>
                        <option value="german_rios_linares" {{ (isset($registro->parroquia) && $registro->parroquia == 'german_rios_linares') ? 'selected' : '' }}>Germán Ríos Linares</option>
                        <option value="san_benito" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_benito') ? 'selected' : '' }}>San Benito</option>
                        <option value="romulo_betancourt" {{ (isset($registro->parroquia) && $registro->parroquia == 'romulo_betancourt') ? 'selected' : '' }}>Rómulo Betancourt</option>
                        <option value="jorge_hernandez" {{ (isset($registro->parroquia) && $registro->parroquia == 'jorge_hernandez') ? 'selected' : '' }}>Jorge Hernández</option>
                        <option value="punta_gorda" {{ (isset($registro->parroquia) && $registro->parroquia == 'punta_gorda') ? 'selected' : '' }}>Punta Gorda</option>
                        <option value="aristides_calvani" {{ (isset($registro->parroquia) && $registro->parroquia == 'aristides_calvani') ? 'selected' : '' }}>Arístides Calvani</option>
                        <option value="encontrados" {{ (isset($registro->parroquia) && $registro->parroquia == 'encontrados') ? 'selected' : '' }}>Encontrados</option>
                        <option value="udon_perez" {{ (isset($registro->parroquia) && $registro->parroquia == 'udon_perez') ? 'selected' : '' }}>Udón Pérez</option>
                        <option value="veritas" {{ (isset($registro->parroquia) && $registro->parroquia == 'veritas') ? 'selected' : '' }}>Veritas</option>
                        <option value="moralito" {{ (isset($registro->parroquia) && $registro->parroquia == 'moralito') ? 'selected' : '' }}>Moralito</option>
                        <option value="san_carlos_del_zulia" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_carlos_del_zulia') ? 'selected' : '' }}>San Carlos del Zulia</option>
                        <option value="santa_cruz_del_zulia" {{ (isset($registro->parroquia) && $registro->parroquia == 'santa_cruz_del_zulia') ? 'selected' : '' }}>Santa Cruz del Zulia</option>
                        <option value="santa_barbara" {{ (isset($registro->parroquia) && $registro->parroquia == 'santa_barbara') ? 'selected' : '' }}>Santa Bárbara</option>
                        <option value="urribarri" {{ (isset($registro->parroquia) && $registro->parroquia == 'urribarri') ? 'selected' : '' }}>Urribarrí</option>
                        <option value="agustin_codazzi" {{ (isset($registro->parroquia) && $registro->parroquia == 'agustin_codazzi') ? 'selected' : '' }}>Agustín Codazzi</option>
                        <option value="carlos_quevedo" {{ (isset($registro->parroquia) && $registro->parroquia == 'carlos_quevedo') ? 'selected' : '' }}>Carlos Quevedo</option>
                        <option value="francisco_javier_pulgar" {{ (isset($registro->parroquia) && $registro->parroquia == 'francisco_javier_pulgar') ? 'selected' : '' }}>Francisco Javier Pulgar</option>
                        <option value="simon_rodriguez" {{ (isset($registro->parroquia) && $registro->parroquia == 'simon_rodriguez') ? 'selected' : '' }}>Simón Rodríguez</option>
                        <option value="la_concepcion" {{ (isset($registro->parroquia) && $registro->parroquia == 'la_concepcion') ? 'selected' : '' }}>La Concepción</option>
                        <option value="san_jose" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_jose') ? 'selected' : '' }}>San José</option>
                        <option value="mariano_parra_leon" {{ (isset($registro->parroquia) && $registro->parroquia == 'mariano_parra_leon') ? 'selected' : '' }}>Mariano Parra León</option>
                        <option value="jose_ramon_yepes" {{ (isset($registro->parroquia) && $registro->parroquia == 'jose_ramon_yepes') ? 'selected' : '' }}>José Ramón Yépez</option>
                        <option value="jesus_maria_semprun" {{ (isset($registro->parroquia) && $registro->parroquia == 'jesus_maria_semprun') ? 'selected' : '' }}>Jesús María Semprún</option>
                        <option value="barí" {{ (isset($registro->parroquia) && $registro->parroquia == 'barí') ? 'selected' : '' }}>Barí</option>
                        <option value="concepcion" {{ (isset($registro->parroquia) && $registro->parroquia == 'concepcion') ? 'selected' : '' }}>Concepción</option>
                        <option value="andres_bello" {{ (isset($registro->parroquia) && $registro->parroquia == 'andres_bello') ? 'selected' : '' }}>Andrés Bello</option>
                        <option value="chiquinquirá" {{ (isset($registro->parroquia) && $registro->parroquia == 'chiquinquira') ? 'selected' : '' }}>Chiquinquirá</option>
                        <option value="el_carmelo" {{ (isset($registro->parroquia) && $registro->parroquia == 'el_carmelo') ? 'selected' : '' }}>El Carmelo</option>
                        <option value="potreritos" {{ (isset($registro->parroquia) && $registro->parroquia == 'potreritos') ? 'selected' : '' }}>Potreritos</option>
                        <option value="libertad" {{ (isset($registro->parroquia) && $registro->parroquia == 'libertad') ? 'selected' : '' }}> Libertad </option>
                        <option value="paraute" {{ (isset($registro->parroquia) && $registro->parroquia == 'paraute') ? 'selected' : '' }}> Paraute </option>
                        <option value="eleazar_lopez_contreras" {{ (isset($registro->parroquia) && $registro->parroquia == 'eleazar_lopez_contreras') ? 'selected' : '' }}> Eleazar López Contreras </option>
                        <option value="campo_lara" {{ (isset($registro->parroquia) && $registro->parroquia == 'campo_lara') ? 'selected' : '' }}> Campo Lara </option>
                        <option value="el_danto" {{ (isset($registro->parroquia) && $registro->parroquia == 'el_danto') ? 'selected' : '' }}> El Danto </option>
                        <option value="bartolome_de_las_casas" {{ (isset($registro->parroquia) && $registro->parroquia == 'bartolome_de_las_casas') ? 'selected' : '' }}> Bartolomé de las Casas </option>
                        <option value="libertad" {{ (isset($registro->parroquia) && $registro->parroquia == 'libertad') ? 'selected' : '' }}> Libertad </option>
                        <option value="rio_negro" {{ (isset($registro->parroquia) && $registro->parroquia == 'rio_negro') ? 'selected' : '' }}> Río Negro </option>
                        <option value="san_jose_de_perija" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_jose_de_perija') ? 'selected' : '' }}> San José de Perijá </option>
                        <option value="san_rafael" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_rafael') ? 'selected' : '' }}> San Rafael </option>
                        <option value="la_sierrita" {{ (isset($registro->parroquia) && $registro->parroquia == 'la_sierrita') ? 'selected' : '' }}> La Sierrita </option>
                        <option value="las_parcelas" {{ (isset($registro->parroquia) && $registro->parroquia == 'las_parcelas') ? 'selected' : '' }}> Las Parcelas </option>
                        <option value="luis_de_vicente" {{ (isset($registro->parroquia) && $registro->parroquia == 'luis_de_vicente') ? 'selected' : '' }}> Luis De Vicente </option>
                        <option value="monseñor_marcos_sergio_godoy" {{ (isset($registro->parroquia) && $registro->parroquia == 'monseñor_marcos_sergio_godoy') ? 'selected' : '' }}> Monseñor Marcos Sergio Godoy </option>
                        <option value="ricaurte" {{ (isset($registro->parroquia) && $registro->parroquia == 'ricaurte') ? 'selected' : '' }}> Ricaurte </option>
                        <option value="tamare" {{ (isset($registro->parroquia) && $registro->parroquia == 'tamare') ? 'selected' : '' }}> Tamare </option>
                        <option value="antonio_borjas_romero" {{ (isset($registro->parroquia) && $registro->parroquia == 'antonio_borjas_romero') ? 'selected' : '' }}> Antonio Borjas Romero </option>
                        <option value="bolivar" {{ (isset($registro->parroquia) && $registro->parroquia == 'bolivar') ? 'selected' : '' }}> Bolívar </option>
                        <option value="cacique_mara" {{ (isset($registro->parroquia) && $registro->parroquia == 'cacique_mara') ? 'selected' : '' }}> Cacique Mara </option>
                        <option value="caracciolo_parra_perez" {{ (isset($registro->parroquia) && $registro->parroquia == 'caracciolo_parra_perez') ? 'selected' : '' }}> Caracciolo Parra Pérez </option>
                        <option value="cecilio_acosta" {{ (isset($registro->parroquia) && $registro->parroquia == 'cecilio_acosta') ? 'selected' : '' }}> Cecilio Acosta </option>
                        <option value="cristo_de_aranza" {{ (isset($registro->parroquia) && $registro->parroquia == 'cristo_de_aranza') ? 'selected' : '' }}> Cristo de Aranza </option>
                        <option value="coquivacoa" {{ (isset($registro->parroquia) && $registro->parroquia == 'coquivacoa') ? 'selected' : '' }}> Coquivacoa </option>
                        <option value="chiquinquirá" {{ (isset($registro->parroquia) && $registro->parroquia == 'chiquinquira') ? 'selected' : '' }}> Chiquinquirá </option>
                        <option value="francisco_eugenio_bustamante" {{ (isset($registro->parroquia) && $registro->parroquia == 'francisco_eugenio_bustamante') ? 'selected' : '' }}> Francisco Eugenio Bustamante </option>
                        <option value="idelfonzo_vasquez" {{ (isset($registro->parroquia) && $registro->parroquia == 'idelfonzo_vasquez') ? 'selected' : '' }}> Idelfonzo Vásquez </option>
                        <option value="juana_de_avila" {{ (isset($registro->parroquia) && $registro->parroquia == 'juana_de_avila') ? 'selected' : '' }}> Juana de Ávila </option>
                        <option value="luis_hurtado_higuera" {{ (isset($registro->parroquia) && $registro->parroquia == 'luis_hurtado_higuera') ? 'selected' : '' }}> Luis Hurtado Higuera </option>
                        <option value="manuel_dagnino" {{ (isset($registro->parroquia) && $registro->parroquia == 'manuel_dagnino') ? 'selected' : '' }}> Manuel Dagnino </option>
                        <option value="olegario_villalobos" {{ (isset($registro->parroquia) && $registro->parroquia == 'olegario_villalobos') ? 'selected' : '' }}> Olegario Villalobos </option>
                        <option value="raul_leoni" {{ (isset($registro->parroquia) && $registro->parroquia == 'raul_leoni') ? 'selected' : '' }}> Raúl Leoni </option>
                        <option value="santa_lucia" {{ (isset($registro->parroquia) && $registro->parroquia == 'santa_lucia') ? 'selected' : '' }}> Santa Lucía </option>
                        <option value="san_isidro" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_isidro') ? 'selected' : '' }}> San Isidro </option>
                        <option value="venancio_pulgar" {{ (isset($registro->parroquia) && $registro->parroquia == 'venancio_pulgar') ? 'selected' : '' }}> Venancio Pulgar </option>
                        <option value="altagracia" {{ (isset($registro->parroquia) && $registro->parroquia == 'altagracia') ? 'selected' : '' }}> Altagracia </option>
                        <option value="faria" {{ (isset($registro->parroquia) && $registro->parroquia == 'faria') ? 'selected' : '' }}>Faría</option>
                        <option value="ana_maria_campos" {{ (isset($registro->parroquia) && $registro->parroquia == 'ana_maria_campos') ? 'selected' : '' }}>Ana María Campos</option>
                        <option value="san_antonio" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_antonio') ? 'selected' : '' }}>San Antonio</option>
                        <option value="san_jose" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_jose') ? 'selected' : '' }}>San José</option>
                        <option value="sinamaica" {{ (isset($registro->parroquia) && $registro->parroquia == 'sinamaica') ? 'selected' : '' }}>Sinamaica</option>
                        <option value="alta_guajira" {{ (isset($registro->parroquia) && $registro->parroquia == 'alta_guajira') ? 'selected' : '' }}>Alta Guajira</option>
                        <option value="elias_sanchez_rubio" {{ (isset($registro->parroquia) && $registro->parroquia == 'elias_sanchez_rubio') ? 'selected' : '' }}>Elías Sánchez Rubio</option>
                        <option value="guajira" {{ (isset($registro->parroquia) && $registro->parroquia == 'guajira') ? 'selected' : '' }}>Guajira</option>
                        <option value="donaldo_garcia" {{ (isset($registro->parroquia) && $registro->parroquia == 'donaldo_garcia') ? 'selected' : '' }}>Donaldo García</option>
                        <option value="el_rosario" {{ (isset($registro->parroquia) && $registro->parroquia == 'el_rosario') ? 'selected' : '' }}>El Rosario</option>
                        <option value="sixto_zambrano" {{ (isset($registro->parroquia) && $registro->parroquia == 'sixto_zambrano') ? 'selected' : '' }}>Sixto Zambrano</option>
                        <option value="san_francisco" {{ (isset($registro->parroquia) && $registro->parroquia == 'san_francisco') ? 'selected' : '' }}>San Francisco</option>
                        <option value="el_bajo" {{ (isset($registro->parroquia) && $registro->parroquia == 'el_bajo') ? 'selected' : '' }}>El Bajo</option>
                        <option value="domitila_flores" {{ (isset($registro->parroquia) && $registro->parroquia == 'domitila_flores') ? 'selected' : '' }}>Domitila Flores</option>
                        <option value="francisco_ochoa" {{ (isset($registro->parroquia) && $registro->parroquia == 'francisco_ochoa') ? 'selected' : '' }}>Francisco Ochoa</option>
                        <option value="los_cortijos" {{ (isset($registro->parroquia) && $registro->parroquia == 'los_cortijos') ? 'selected' : '' }}>Los Cortijos</option>
                        <option value="marcial_hernandez" {{ (isset($registro->parroquia) && $registro->parroquia == 'marcial_hernandez') ? 'selected' : '' }}>Marcial Hernández</option>
                        <option value="jose_domingos_rus" {{ (isset($registro->parroquia) && $registro->parroquia == 'jose_domingos_rus') ? 'selected' : '' }}>José Domingo Rus</option>
                        <option value="santa_rita" {{ (isset($registro->parroquia) && $registro->parroquia == 'santa_rita') ? 'selected' : '' }}>Santa Rita</option>
                        <option value="el_mene" {{ (isset($registro->parroquia) && $registro->parroquia == 'el_mene') ? 'selected' : '' }}>El Mene</option>
                        <option value="pedro_lucas_urribarri" {{ (isset($registro->parroquia) && $registro->parroquia == 'pedro_lucas_urribarri') ? 'selected' : '' }}>Pedro Lucas Urribarrí</option>
                        <option value="jose_cenobio_urribarri" {{ (isset($registro->parroquia) && $registro->parroquia == 'jose_cenobio_urribarri') ? 'selected' : '' }}>José Cenobio Urribarrí</option>
                        <option value="rafael_maria_baralt" {{ (isset($registro->parroquia) && $registro->parroquia == 'rafael_maria_baralt') ? 'selected' : '' }}>Rafael María Baralt</option>
                        <option value="manuel_manrique" {{ (isset($registro->parroquia) && $registro->parroquia == 'manuel_manrique') ? 'selected' : '' }}>Manuel Manrique</option>
                        <option value="rafael_urdaneta" {{ (isset($registro->parroquia) && $registro->parroquia == 'rafael_urdaneta') ? 'selected' : '' }}>Rafael Urdaneta</option>
                        <option value="bobures" {{ (isset($registro->parroquia) && $registro->parroquia == 'bobures') ? 'selected' : '' }}>Bobures</option>
                        <option value="gibraltar" {{ (isset($registro->parroquia) && $registro->parroquia == 'gibraltar') ? 'selected' : '' }}>Gibraltar</option>
                        <option value="heras" {{ (isset($registro->parroquia) && $registro->parroquia == 'heras') ? 'selected' : '' }}>Heras</option>
                        <option value="monseñor_arturo_alvarez" {{ (isset($registro->parroquia) && $registro->parroquia == 'monseñor_arturo_alvarez') ? 'selected' : '' }}>Monseñor Arturo Álvarez</option>
                        <option value="romulo_gallegos" {{ (isset($registro->parroquia) && $registro->parroquia == 'romulo_gallegos') ? 'selected' : '' }}>Rómulo Gallegos</option>
                        <option value="el_batey" {{ (isset($registro->parroquia) && $registro->parroquia == 'el_batey') ? 'selected' : '' }}>El Batey</option>
                        <option value="rafael_urdaneta_valmore_rodriguez" {{ (isset($registro->parroquia) && $registro->parroquia == 'rafael_urdaneta_valmore_rodriguez') ? 'selected' : '' }}>Rafael Urdaneta (Valmore Rodríguez)</option>
                        <option value="la_victoria" {{ (isset($registro->parroquia) && $registro->parroquia == 'la_victoria') ? 'selected' : '' }}>La Victoria</option>
                        <option value="raul_cuenca" {{ (isset($registro->parroquia) && $registro->parroquia == 'raul_cuenca') ? 'selected' : '' }}>Raúl Cuenca</option>
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
                            <select class="form-control {{$errors->has('categoria_p')?'is-invalid':''}}" name="categoria_p" id="categoria_p">
                                <option value="">Seleccione</option>
                                <option value="Educación" {{ (isset($registro->categoria_p) && $registro->categoria_p == 'Educación') ? 'selected' : '' }}>Educación</option>
                                <option value="Ambiente" {{ (isset($registro->categoria_p) && $registro->categoria_p == 'Ambiente') ? 'selected' : '' }}>Ambiente</option>
                                <option value="Infraestructura" {{ (isset($registro->categoria_p) && $registro->categoria_p == 'Infraestructura') ? 'selected' : '' }}>Infraestructura</option>
                                <option value="Salud" {{ (isset($registro->categoria_p) && $registro->categoria_p == 'Salud') ? 'selected' : '' }}>Salud</option>
                                <option value="Tecnología" {{ (isset($registro->categoria_p) && $registro->categoria_p == 'Tecnología') ? 'selected' : '' }}>Tecnología</option>
                                <option value="Otro" {{ (isset($registro->categoria_p) && $registro->categoria_p == 'Otro') ? 'selected' : '' }}>Otro</option>
                            </select>
                            {!!$errors->first('categoria_p','<div class="invalid-feedback">:message</div>')!!}
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
                <button type="submit" class="btn btn-primary btn-icon-text" style="margin-right: 5px;">
                    <i class="ti-file btn-icon-prepend"></i>
                    Editar
                </button>
                <!-- Formulario de eliminación -->
                <form class="delete-form" method="POST" action="{{ route('registro.destroy', $registro->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-icon-text delete-button" data-id="{{ $registro->id }}">
                        <i class="ti-trash btn-icon-prepend btn-icon"></i>
                        Eliminar registro
                    </button>
                </form>                
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$('.delete-button').on('click', function(event) {
    event.preventDefault(); 

    const form = $(this).closest('.delete-form'); 
    const id = $(this).data('id'); 
    const url = `/admin/registro/${id}`; 

    Swal.fire({
        title: '¿Eliminar el registro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            popup: 'swal-wide'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url, 
                type: 'DELETE', 
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), 
                },
                success: function(response) {
                    // Verificar si la respuesta es exitosa
                    if (response.status === 'success') {
                        Swal.fire({
                            title: '¡Eliminado!',
                            icon: 'success'
                        }).then(() => {
                            window.location.href = "{{ route('vista.index') }}";
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            icon: 'error',
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'Error',
                        icon: 'error',
                    });
                }
            });
        }
    });
});

</script>

@endsection