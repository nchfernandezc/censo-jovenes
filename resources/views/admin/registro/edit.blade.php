@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
            <div class="card-body">
            <h4 class="card-title">Edición de Datos</h4>
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
                        <select class="form-control js-example-basic-single {{$errors->has('grado')?'is-invalid':''}}" style="width: 100%;" name="grado" id="grado">
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
                        <select name="municipio" style="width: 100%;" class="form-control js-example-basic-single {{$errors->has('municipio') ? 'is-invalid' : ''}}">
                        <option value="">Municipio</option>
                        <option value="Almirante Padilla" {{ (isset($registro->municipio) && $registro->municipio == 'Almirante Padilla') ? 'selected' : '' }}>Almirante Padilla</option>
                        <option value="Baralt" {{ (isset($registro->municipio) && $registro->municipio == 'Baralt') ? 'selected' : '' }}>Baralt</option>
                        <option value="Cabimas" {{ (isset($registro->municipio) && $registro->municipio == 'Cabimas') ? 'selected' : '' }}>Cabimas</option>
                        <option value="Catatumbo" {{ (isset($registro->municipio) && $registro->municipio == 'Catatumbo') ? 'selected' : '' }}>Catatumbo</option>
                        <option value="Colón" {{ (isset($registro->municipio) && $registro->municipio == 'Colón') ? 'selected' : '' }}>Colón</option>
                        <option value="Francisco Javier Pulgar" {{ (isset($registro->municipio) && $registro->municipio == 'Francisco Javier Pulgar') ? 'selected' : '' }}>Francisco Javier Pulgar</option>
                        <option value="Guajira" {{ (isset($registro->municipio) && $registro->municipio == 'Guajira') ? 'selected' : '' }}>Guajira</option>
                        <option value="Jesús Enrique Lossada" {{ (isset($registro->municipio) && $registro->municipio == 'Jesús Enrique Lossada') ? 'selected' : '' }}>Jesús Enrique Lossada</option>
                        <option value="Jesús María Semprúm" {{ (isset($registro->municipio) && $registro->municipio == 'Jesús María Semprúm') ? 'selected' : '' }}>Jesús María Semprúm</option>
                        <option value="La Cañada de Urdaneta" {{ (isset($registro->municipio) && $registro->municipio == 'La Cañada de Urdaneta') ? 'selected' : '' }}>La Cañada de Urdaneta</option>
                        <option value="Lagunillas" {{ (isset($registro->municipio) && $registro->municipio == 'Lagunillas') ? 'selected' : '' }}>Lagunillas</option>
                        <option value="Machiques de Perijá" {{ (isset($registro->municipio) && $registro->municipio == 'Machiques de Perijá') ? 'selected' : '' }}>Machiques de Perijá</option>
                        <option value="Mara" {{ (isset($registro->municipio) && $registro->municipio == 'Mara') ? 'selected' : '' }}>Mara</option>
                        <option value="Maracaibo" {{ (isset($registro->municipio) && $registro->municipio == 'Maracaibo') ? 'selected' : '' }}>Maracaibo</option>
                        <option value="Miranda" {{ (isset($registro->municipio) && $registro->municipio == 'Miranda') ? 'selected' : '' }}>Miranda</option>
                        <option value="Rosario de Perijá" {{ (isset($registro->municipio) && $registro->municipio == 'Rosario de Perijá') ? 'selected' : '' }}>Rosario de Perijá</option>
                        <option value="San Francisco" {{ (isset($registro->municipio) && $registro->municipio == 'San Francisco') ? 'selected' : '' }}>San Francisco</option>
                        <option value="Santa Rita" {{ (isset($registro->municipio) && $registro->municipio == 'Santa Rita') ? 'selected' : '' }}>Santa Rita</option>
                        <option value="Simón Bolívar" {{ (isset($registro->municipio) && $registro->municipio == 'Simón Bolívar') ? 'selected' : '' }}>Simón Bolívar</option>
                        <option value="Sucre" {{ (isset($registro->municipio) && $registro->municipio == 'Sucre') ? 'selected' : '' }}>Sucre</option>
                        <option value="Valmore Rodríguez" {{ (isset($registro->municipio) && $registro->municipio == 'Valmore Rodríguez') ? 'selected' : '' }}>Valmore Rodríguez</option>
                        </select>
                        {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Parroquia</label>
                    <div class="col-sm-9">
                        <select name="parroquia" class="form-control js-example-basic-single {{$errors->has('parroquia') ? 'is-invalid' : ''}}" style="width: 100%;" value="{{isset($registro->parroquia)?$registro->parroquia:old('parroquia')}}">
                        <option value="">Parroquia</option>
                        <option value="Isla De Toas" {{ (isset($registro->parroquia) && $registro->parroquia == 'Isla De Toas') ? 'selected' : '' }}>Isla De Toas</option>
                        <option value="Monagas" {{ (isset($registro->parroquia) && $registro->parroquia == 'Monagas') ? 'selected' : '' }}>Monagas</option>
                        <option value="San Timoteo" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Timoteo') ? 'selected' : '' }}>San Timoteo</option>
                        <option value="General Urdaneta" {{ (isset($registro->parroquia) && $registro->parroquia == 'General Urdaneta') ? 'selected' : '' }}>General Urdaneta</option>
                        <option value="Libertador" {{ (isset($registro->parroquia) && $registro->parroquia == 'Libertador') ? 'selected' : '' }}>Libertador</option>
                        <option value="Marcelino Briceño" {{ (isset($registro->parroquia) && $registro->parroquia == 'Marcelino Briceño') ? 'selected' : '' }}>Marcelino Briceño</option>
                        <option value="Nuevo" {{ (isset($registro->parroquia) && $registro->parroquia == 'Nuevo') ? 'selected' : '' }}>Nuevo</option>
                        <option value="Manuel Guanipa Matos" {{ (isset($registro->parroquia) && $registro->parroquia == 'Manuel Guanipa Matos') ? 'selected' : '' }}>Manuel Guanipa Matos</option>
                        <option value="Ambrosio" {{ (isset($registro->parroquia) && $registro->parroquia == 'Ambrosio') ? 'selected' : '' }}>Ambrosio</option>
                        <option value="Carmen Herrera" {{ (isset($registro->parroquia) && $registro->parroquia == 'Carmen Herrera') ? 'selected' : '' }}>Carmen Herrera</option>
                        <option value="La Rosa" {{ (isset($registro->parroquia) && $registro->parroquia == 'La Rosa') ? 'selected' : '' }}>La Rosa</option>
                        <option value="Germán Ríos Linares" {{ (isset($registro->parroquia) && $registro->parroquia == 'Germán Ríos Linares') ? 'selected' : '' }}>Germán Ríos Linares</option>
                        <option value="San Benito" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Benito') ? 'selected' : '' }}>San Benito</option>
                        <option value="Rómulo Betancourt" {{ (isset($registro->parroquia) && $registro->parroquia == 'Rómulo Betancourt') ? 'selected' : '' }}>Rómulo Betancourt</option>
                        <option value="Jorge Hernández" {{ (isset($registro->parroquia) && $registro->parroquia == 'Jorge Hernández') ? 'selected' : '' }}>Jorge Hernández</option>
                        <option value="Punta Gorda" {{ (isset($registro->parroquia) && $registro->parroquia == 'Punta Gorda') ? 'selected' : '' }}>Punta Gorda</option>
                        <option value="Arístides Calvani" {{ (isset($registro->parroquia) && $registro->parroquia == 'Arístides Calvani') ? 'selected' : '' }}>Arístides Calvani</option>
                        <option value="Encontrados" {{ (isset($registro->parroquia) && $registro->parroquia == 'Encontrados') ? 'selected' : '' }}>Encontrados</option>
                        <option value="Udón Pérez" {{ (isset($registro->parroquia) && $registro->parroquia == 'Udón Pérez') ? 'selected' : '' }}>Udón Pérez</option>
                        <option value="Veritas" {{ (isset($registro->parroquia) && $registro->parroquia == 'Veritas') ? 'selected' : '' }}>Veritas</option>
                        <option value="Moralito" {{ (isset($registro->parroquia) && $registro->parroquia == 'Moralito') ? 'selected' : '' }}>Moralito</option>
                        <option value="San Carlos Del Zulia" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Carlos Del Zulia') ? 'selected' : '' }}>San Carlos Del Zulia</option>
                        <option value="Santa Cruz Del Zulia" {{ (isset($registro->parroquia) && $registro->parroquia == 'Santa Cruz Del Zulia') ? 'selected' : '' }}>Santa Cruz Del Zulia</option>
                        <option value="Santa Bárbara" {{ (isset($registro->parroquia) && $registro->parroquia == 'Santa Bárbara') ? 'selected' : '' }}>Santa Bárbara</option>
                        <option value="Urribarrí" {{ (isset($registro->parroquia) && $registro->parroquia == 'Urribarrí') ? 'selected' : '' }}>Urribarrí</option>
                        <option value="Agustín Codazzi" {{ (isset($registro->parroquia) && $registro->parroquia == 'Agustín Codazzi') ? 'selected' : '' }}>Agustín Codazzi</option>
                        <option value="Carlos Quevedo" {{ (isset($registro->parroquia) && $registro->parroquia == 'Carlos Quevedo') ? 'selected' : '' }}>Carlos Quevedo</option>
                        <option value="Francisco Javier Pulgar" {{ (isset($registro->parroquia) && $registro->parroquia == 'Francisco Javier Pulgar') ? 'selected' : '' }}>Francisco Javier Pulgar</option>
                        <option value="Simón Rodríguez" {{ (isset($registro->parroquia) && $registro->parroquia == 'Simón Rodríguez') ? 'selected' : '' }}>Simón Rodríguez</option>
                        <option value="La Concepción" {{ (isset($registro->parroquia) && $registro->parroquia == 'La Concepción') ? 'selected' : '' }}>La Concepción</option>
                        <option value="San José" {{ (isset($registro->parroquia) && $registro->parroquia == 'San José') ? 'selected' : '' }}>San José</option>
                        <option value="Mariano Parra León" {{ (isset($registro->parroquia) && $registro->parroquia == 'Mariano Parra León') ? 'selected' : '' }}>Mariano Parra León</option>
                        <option value="José Ramón Yépez" {{ (isset($registro->parroquia) && $registro->parroquia == 'José Ramón Yépez') ? 'selected' : '' }}>José Ramón Yépez</option>
                        <option value="Jesús María Semprún" {{ (isset($registro->parroquia) && $registro->parroquia == 'Jesús María Semprún') ? 'selected' : '' }}>Jesús María Semprún</option>
                        <option value="Barí" {{ (isset($registro->parroquia) && $registro->parroquia == 'Barí') ? 'selected' : '' }}>Barí</option>
                        <option value="Concepción" {{ (isset($registro->parroquia) && $registro->parroquia == 'Concepción') ? 'selected' : '' }}>Concepción</option>
                        <option value="Andrés Bello" {{ (isset($registro->parroquia) && $registro->parroquia == 'Andrés Bello') ? 'selected' : '' }}>Andrés Bello</option>
                        <option value="Chiquinquirá" {{ (isset($registro->parroquia) && $registro->parroquia == 'Chiquinquirá') ? 'selected' : '' }}>Chiquinquirá</option>
                        <option value="El Carmelo" {{ (isset($registro->parroquia) && $registro->parroquia == 'El Carmelo') ? 'selected' : '' }}>El Carmelo</option>
                        <option value="Potreritos" {{ (isset($registro->parroquia) && $registro->parroquia == 'Potreritos') ? 'selected' : '' }}>Potreritos</option>
                        <option value="Libertad" {{ (isset($registro->parroquia) && $registro->parroquia == 'Libertad') ? 'selected' : '' }}>Libertad</option>
                        <option value="Paraute" {{ (isset($registro->parroquia) && $registro->parroquia == 'Paraute') ? 'selected' : '' }}>Paraute</option>
                        <option value="Eleazar López Contreras" {{ (isset($registro->parroquia) && $registro->parroquia == 'Eleazar López Contreras') ? 'selected' : '' }}>Eleazar López Contreras</option>
                        <option value="Campo Lara" {{ (isset($registro->parroquia) && $registro->parroquia == 'Campo Lara') ? 'selected' : '' }}>Campo Lara</option>
                        <option value="El Danto" {{ (isset($registro->parroquia) && $registro->parroquia == 'El Danto') ? 'selected' : '' }}>El Danto</option>
                        <option value="Bartolomé De Las Casas" {{ (isset($registro->parroquia) && $registro->parroquia == 'Bartolomé De Las Casas') ? 'selected' : '' }}>Bartolomé De Las Casas</option>
                        <option value="Libertad" {{ (isset($registro->parroquia) && $registro->parroquia == 'Libertad') ? 'selected' : '' }}>Libertad</option>
                        <option value="Río Negro" {{ (isset($registro->parroquia) && $registro->parroquia == 'Río Negro') ? 'selected' : '' }}>Río Negro</option>
                        <option value="San José De Perijá" {{ (isset($registro->parroquia) && $registro->parroquia == 'San José De Perijá') ? 'selected' : '' }}>San José De Perijá</option>
                        <option value="San Rafael" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Rafael') ? 'selected' : '' }}>San Rafael</option>
                        <option value="La Sierrita" {{ (isset($registro->parroquia) && $registro->parroquia == 'La Sierrita') ? 'selected' : '' }}>La Sierrita</option>
                        <option value="Las Parcelas" {{ (isset($registro->parroquia) && $registro->parroquia == 'Las Parcelas') ? 'selected' : '' }}>Las Parcelas</option>
                        <option value="Luis De Vicente" {{ (isset($registro->parroquia) && $registro->parroquia == 'Luis De Vicente') ? 'selected' : '' }}>Luis De Vicente</option>
                        <option value="Monseñor Marcos Sergio Godoy" {{ (isset($registro->parroquia) && $registro->parroquia == 'Monseñor Marcos Sergio Godoy') ? 'selected' : '' }}>Monseñor Marcos Sergio Godoy</option>
                        <option value="Ricaurte" {{ (isset($registro->parroquia) && $registro->parroquia == 'Ricaurte') ? 'selected' : '' }}>Ricaurte</option>
                        <option value="Tamare" {{ (isset($registro->parroquia) && $registro->parroquia == 'Tamare') ? 'selected' : '' }}>Tamare</option>
                        <option value="Antonio Borjas Romero" {{ (isset($registro->parroquia) && $registro->parroquia == 'Antonio Borjas Romero') ? 'selected' : '' }}>Antonio Borjas Romero</option>
                        <option value="Bolívar" {{ (isset($registro->parroquia) && $registro->parroquia == 'Bolívar') ? 'selected' : '' }}>Bolívar</option>
                        <option value="Cacique Mara" {{ (isset($registro->parroquia) && $registro->parroquia == 'Cacique Mara') ? 'selected' : '' }}>Cacique Mara</option>
                        <option value="Caracciolo Parra Pérez" {{ (isset($registro->parroquia) && $registro->parroquia == 'Caracciolo Parra Pérez') ? 'selected' : '' }}>Caracciolo Parra Pérez</option>
                        <option value="Cecilio Acosta" {{ (isset($registro->parroquia) && $registro->parroquia == 'Cecilio Acosta') ? 'selected' : '' }}>Cecilio Acosta</option>
                        <option value="Cristo De Aranza" {{ (isset($registro->parroquia) && $registro->parroquia == 'Cristo De Aranza') ? 'selected' : '' }}>Cristo De Aranza</option>
                        <option value="Coquivacoa" {{ (isset($registro->parroquia) && $registro->parroquia == 'Coquivacoa') ? 'selected' : '' }}>Coquivacoa</option>
                        <option value="Chiquinquirá" {{ (isset($registro->parroquia) && $registro->parroquia == 'Chiquinquirá') ? 'selected' : '' }}>Chiquinquirá</option>
                        <option value="Francisco Eugenio Bustamante" {{ (isset($registro->parroquia) && $registro->parroquia == 'Francisco Eugenio Bustamante') ? 'selected' : '' }}>Francisco Eugenio Bustamante</option>
                        <option value="Idelfonzo Vásquez" {{ (isset($registro->parroquia) && $registro->parroquia == 'Idelfonzo Vásquez') ? 'selected' : '' }}>Idelfonzo Vásquez</option>
                        <option value="Juana De Ávila" {{ (isset($registro->parroquia) && $registro->parroquia == 'Juana De Ávila') ? 'selected' : '' }}>Juana De Ávila</option>
                        <option value="Luis Hurtado Higuera" {{ (isset($registro->parroquia) && $registro->parroquia == 'Luis Hurtado Higuera') ? 'selected' : '' }}>Luis Hurtado Higuera</option>
                        <option value="Manuel Dagnino" {{ (isset($registro->parroquia) && $registro->parroquia == 'Manuel Dagnino') ? 'selected' : '' }}>Manuel Dagnino</option>
                        <option value="Olegario Villalobos" {{ (isset($registro->parroquia) && $registro->parroquia == 'Olegario Villalobos') ? 'selected' : '' }}>Olegario Villalobos</option>
                        <option value="Raúl Leoni" {{ (isset($registro->parroquia) && $registro->parroquia == 'Raúl Leoni') ? 'selected' : '' }}>Raúl Leoni</option>
                        <option value="Santa Lucía" {{ (isset($registro->parroquia) && $registro->parroquia == 'Santa Lucía') ? 'selected' : '' }}>Santa Lucía</option>
                        <option value="San Isidro" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Isidro') ? 'selected' : '' }}>San Isidro</option>
                        <option value="Venancio Pulgar" {{ (isset($registro->parroquia) && $registro->parroquia == 'Venancio Pulgar') ? 'selected' : '' }}>Venancio Pulgar</option>
                        <option value="Altagracia" {{ (isset($registro->parroquia) && $registro->parroquia == 'Altagracia') ? 'selected' : '' }}>Altagracia</option>
                        <option value="Faría" {{ (isset($registro->parroquia) && $registro->parroquia == 'Faría') ? 'selected' : '' }}>Faría</option>
                        <option value="Ana María Campos" {{ (isset($registro->parroquia) && $registro->parroquia == 'Ana María Campos') ? 'selected' : '' }}>Ana María Campos</option>
                        <option value="San Antonio" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Antonio') ? 'selected' : '' }}>San Antonio</option>
                        <option value="San José" {{ (isset($registro->parroquia) && $registro->parroquia == 'San José') ? 'selected' : '' }}>San José</option>
                        <option value="Sinamaica" {{ (isset($registro->parroquia) && $registro->parroquia == 'Sinamaica') ? 'selected' : '' }}>Sinamaica</option>
                        <option value="Alta Guajira" {{ (isset($registro->parroquia) && $registro->parroquia == 'Alta Guajira') ? 'selected' : '' }}>Alta Guajira</option>
                        <option value="Elías Sánchez Rubio" {{ (isset($registro->parroquia) && $registro->parroquia == 'Elías Sánchez Rubio') ? 'selected' : '' }}>Elías Sánchez Rubio</option>
                        <option value="Guajira" {{ (isset($registro->parroquia) && $registro->parroquia == 'Guajira') ? 'selected' : '' }}>Guajira</option>
                        <option value="Donaldo García" {{ (isset($registro->parroquia) && $registro->parroquia == 'Donaldo García') ? 'selected' : '' }}>Donaldo García</option>
                        <option value="El Rosario" {{ (isset($registro->parroquia) && $registro->parroquia == 'El Rosario') ? 'selected' : '' }}>El Rosario</option>
                        <option value="Sixto Zambrano" {{ (isset($registro->parroquia) && $registro->parroquia == 'Sixto Zambrano') ? 'selected' : '' }}>Sixto Zambrano</option>
                        <option value="San Francisco" {{ (isset($registro->parroquia) && $registro->parroquia == 'San Francisco') ? 'selected' : '' }}>San Francisco</option>
                        <option value="El Bajo" {{ (isset($registro->parroquia) && $registro->parroquia == 'El Bajo') ? 'selected' : '' }}>El Bajo</option>
                        <option value="Domitila Flores" {{ (isset($registro->parroquia) && $registro->parroquia == 'Domitila Flores') ? 'selected' : '' }}>Domitila Flores</option>
                        <option value="Francisco Ochoa" {{ (isset($registro->parroquia) && $registro->parroquia == 'Francisco Ochoa') ? 'selected' : '' }}>Francisco Ochoa</option>
                        <option value="Los Cortijos" {{ (isset($registro->parroquia) && $registro->parroquia == 'Los Cortijos') ? 'selected' : '' }}>Los Cortijos</option>
                        <option value="Marcial Hernández" {{ (isset($registro->parroquia) && $registro->parroquia == 'Marcial Hernández') ? 'selected' : '' }}>Marcial Hernández</option>
                        <option value="José Domingo Rus" {{ (isset($registro->parroquia) && $registro->parroquia == 'José Domingo Rus') ? 'selected' : '' }}>José Domingo Rus</option>
                        <option value="Santa Rita" {{ (isset($registro->parroquia) && $registro->parroquia == 'Santa Rita') ? 'selected' : '' }}>Santa Rita</option>
                        <option value="El Mene" {{ (isset($registro->parroquia) && $registro->parroquia == 'El Mene') ? 'selected' : '' }}>El Mene</option>
                        <option value="Pedro Lucas Urribarrí" {{ (isset($registro->parroquia) && $registro->parroquia == 'Pedro Lucas Urribarrí') ? 'selected' : '' }}>Pedro Lucas Urribarrí</option>
                        <option value="José Cenobio Urribarrí" {{ (isset($registro->parroquia) && $registro->parroquia == 'José Cenobio Urribarrí') ? 'selected' : '' }}>José Cenobio Urribarrí</option>
                        <option value="Rafael María Baralt" {{ (isset($registro->parroquia) && $registro->parroquia == 'Rafael María Baralt') ? 'selected' : '' }}>Rafael María Baralt</option>
                        <option value="Manuel Manrique" {{ (isset($registro->parroquia) && $registro->parroquia == 'Manuel Manrique') ? 'selected' : '' }}>Manuel Manrique</option>
                        <option value="Rafael Urdaneta" {{ (isset($registro->parroquia) && $registro->parroquia == 'Rafael Urdaneta') ? 'selected' : '' }}>Rafael Urdaneta</option>
                        <option value="Bobures" {{ (isset($registro->parroquia) && $registro->parroquia == 'Bobures') ? 'selected' : '' }}>Bobures</option>
                        <option value="Gibraltar" {{ (isset($registro->parroquia) && $registro->parroquia == 'Gibraltar') ? 'selected' : '' }}>Gibraltar</option>
                        <option value="Heras" {{ (isset($registro->parroquia) && $registro->parroquia == 'Heras') ? 'selected' : '' }}>Heras</option>
                        <option value="Monseñor Arturo Álvarez" {{ (isset($registro->parroquia) && $registro->parroquia == 'Monseñor Arturo Álvarez') ? 'selected' : '' }}>Monseñor Arturo Álvarez</option>
                        <option value="Rómulo Gallegos" {{ (isset($registro->parroquia) && $registro->parroquia == 'Rómulo Gallegos') ? 'selected' : '' }}>Rómulo Gallegos</option>
                        <option value="El Batey" {{ (isset($registro->parroquia) && $registro->parroquia == 'El Batey') ? 'selected' : '' }}>El Batey</option>
                        <option value="Rafael Urdaneta (Valmore Rodríguez)" {{ (isset($registro->parroquia) && $registro->parroquia == 'Rafael Urdaneta (Valmore Rodríguez)') ? 'selected' : '' }}>Rafael Urdaneta (Valmore Rodríguez)</option>
                        <option value="La Victoria" {{ (isset($registro->parroquia) && $registro->parroquia == 'La Victoria') ? 'selected' : '' }}>La Victoria</option>
                        <option value="Raúl Cuenca" {{ (isset($registro->parroquia) && $registro->parroquia == 'Raúl Cuenca') ? 'selected' : '' }}>Raúl Cuenca</option>
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
                            <select class="form-control js-example-basic-single {{$errors->has('categoria_p')?'is-invalid':''}}" name="categoria_p" id="categoria_p" style="width: 100%;">
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
            </form>
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
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('build/assets/js/select2.js') }}"></script>
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
