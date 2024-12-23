@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
    <div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Ingreso de datos</h4>
        @if (session('Mensaje'))
            <div class="alert alert-success">
            {{ session('Mensaje') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form class="form-sample" action="{{ route('store') }}" method="POST">
            @csrf
            <p class="card-description">
            Información personal
            </p>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombres</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" name="nombre" id="nombre" value="{{isset($registro->nombre)?$registro->nombre:old('nombre')}}">
                    {!!$errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}
                    <div class="invalid-feedback"></div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apellidos</label>
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
                <label class="col-sm-3 col-form-label">Cédula</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control {{$errors->has('cedula')?'is-invalid':''}}" name="cedula" id="cedula" value="{{isset($registro->cedula)?$registro->cedula:old('cedula')}}">
                    {!!$errors->first('cedula','<div class="invalid-feedback">:message</div>')!!}
                    <div class="invalid-feedback"></div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
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
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" value="{{isset($registro->email)?$registro->email:old('email')}}">
                    {!!$errors->first('email','<div class="invalid-feedback">:message</div>')!!}
                    <div class="invalid-feedback"></div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Teléfono</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control {{$errors->has('telefono') ? 'is-invalid' : ''}}" name="telefono" id="telefono" value="{{ isset($registro->telefono) ? $registro->telefono : old('telefono') }}">
                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
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
                <label class="col-sm-3 col-form-label">Grado de Instrucción</label>
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
                    <option value="Almirante Padilla">Almirante Padilla</option>
                    <option value="Baralt">Baralt</option>
                    <option value="Cabimas">Cabimas</option>
                    <option value="Catatumbo">Catatumbo</option>
                    <option value="Colón">Colón</option>
                    <option value="Francisco Javier Pulgar">Francisco Javier Pulgar</option>
                    <option value="Guajira">Guajira</option>
                    <option value="Jesús Enrique Lossada">Jesús Enrique Lossada</option>
                    <option value="Jesús María Semprúm">Jesús María Semprúm</option>
                    <option value="La Cañada De Urdaneta">La Cañada de Urdaneta</option>
                    <option value="Lagunillas">Lagunillas</option>
                    <option value="Machiques De Perijá">Machiques de Perijá</option>
                    <option value="Mara">Mara</option>
                    <option value="Maracaibo">Maracaibo</option>
                    <option value="Miranda">Miranda</option>
                    <option value="Rosario De Perijá">Rosario de Perijá</option>
                    <option value="San Francisco">San Francisco</option>
                    <option value="Santa Rita">Santa Rita</option>
                    <option value="Simón Bolívar">Simón Bolívar</option>
                    <option value="Sucre">Sucre</option>
                    <option value="Valmore Rodríguez">Valmore Rodríguez</option>
                    </select>
                    {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Parroquia</label>
                <div class="col-sm-9">
                    <select name="parroquia" class="form-control js-example-basic-single {{$errors->has('parroquia') ? 'is-invalid' : ''}}" style="width: 100%;" value="{{isset($registro->parroquia)?$registro->parroquia:old('parroquia')}}">
                    <option value="">Parroquia</option>
                    <option value="Isla De Toas">Isla De Toas</option>
                    <option value="Monagas">Monagas</option>
                    <option value="San Timoteo">San Timoteo</option>
                    <option value="General Urdaneta">General Urdaneta</option>
                    <option value="Libertador">Libertador</option>
                    <option value="Marcelino Briceño">Marcelino Briceño</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Manuel Guanipa Matos">Manuel Guanipa Matos</option>
                    <option value="Ambrosio">Ambrosio</option>
                    <option value="Carmen Herrera">Carmen Herrera</option>
                    <option value="La Rosa">La Rosa</option>
                    <option value="Germán Ríos Linares">Germán Ríos Linares</option>
                    <option value="San Benito">San Benito</option>
                    <option value="Rómulo Betancourt">Rómulo Betancourt</option>
                    <option value="Jorge Hernández">Jorge Hernández</option>
                    <option value="Punta Gorda">Punta Gorda</option>
                    <option value="Arístides Calvani">Arístides Calvani</option>
                    <option value="Encontrados">Encontrados</option>
                    <option value="Udón Pérez">Udón Pérez</option>
                    <option value="Veritas">Veritas</option>
                    <option value="Moralito">Moralito</option>
                    <option value="San Carlos Del Zulia">San Carlos Del Zulia</option>
                    <option value="Santa Cruz Del Zulia">Santa Cruz Del Zulia</option>
                    <option value="Santa Bárbara">Santa Bárbara</option>
                    <option value="Urribarrí">Urribarrí</option>
                    <option value="Agustín Codazzi">Agustín Codazzi</option>
                    <option value="Carlos Quevedo">Carlos Quevedo</option>
                    <option value="Francisco Javier Pulgar">Francisco Javier Pulgar</option>
                    <option value="Simón Rodríguez">Simón Rodríguez</option>
                    <option value="La Concepción">La Concepción</option>
                    <option value="San José">San José</option>
                    <option value="Mariano Parra León">Mariano Parra León</option>
                    <option value="José Ramón Yépez">José Ramón Yépez</option>
                    <option value="Jesús María Semprún">Jesús María Semprún</option>
                    <option value="Barí">Barí</option>
                    <option value="Concepción">Concepción</option>
                    <option value="Andrés Bello">Andrés Bello</option>
                    <option value="Chiquinquirá">Chiquinquirá</option>
                    <option value="El Carmelo">El Carmelo</option>
                    <option value="Potreritos">Potreritos</option>
                    <option value="Libertad">Libertad</option>
                    <option value="Paraute">Paraute</option>
                    <option value="Eleazar López Contreras">Eleazar López Contreras</option>
                    <option value="Campo Lara">Campo Lara</option>
                    <option value="El Danto">El Danto</option>
                    <option value="Bartolomé De Las Casas">Bartolomé De Las Casas</option>
                    <option value="Libertad">Libertad</option>
                    <option value="Río Negro">Río Negro</option>
                    <option value="San José De Perijá">San José De Perijá</option>
                    <option value="San Rafael">San Rafael</option>
                    <option value="La Sierrita">La Sierrita</option>
                    <option value="Las Parcelas">Las Parcelas</option>
                    <option value="Luis De Vicente">Luis De Vicente</option>
                    <option value="Monseñor Marcos Sergio Godoy">Monseñor Marcos Sergio Godoy</option>
                    <option value="Ricaurte">Ricaurte</option>
                    <option value="Tamare">Tamare</option>
                    <option value="Antonio Borjas Romero">Antonio Borjas Romero</option>
                    <option value="Bolívar">Bolívar</option>
                    <option value="Cacique Mara">Cacique Mara</option>
                    <option value="Caracciolo Parra Pérez">Caracciolo Parra Pérez</option>
                    <option value="Cecilio Acosta">Cecilio Acosta</option>
                    <option value="Cristo De Aranza">Cristo De Aranza</option>
                    <option value="Coquivacoa">Coquivacoa</option>
                    <option value="Chiquinquirá">Chiquinquirá</option>
                    <option value="Francisco Eugenio Bustamante">Francisco Eugenio Bustamante</option>
                    <option value="Idelfonzo Vásquez">Idelfonzo Vásquez</option>
                    <option value="Juana De Ávila">Juana De Ávila</option>
                    <option value="Luis Hurtado Higuera">Luis Hurtado Higuera</option>
                    <option value="Manuel Dagnino">Manuel Dagnino</option>
                    <option value="Olegario Villalobos">Olegario Villalobos</option>
                    <option value="Raúl Leoni">Raúl Leoni</option>
                    <option value="Santa Lucía">Santa Lucía</option>
                    <option value="San Isidro">San Isidro</option>
                    <option value="Venancio Pulgar">Venancio Pulgar</option>
                    <option value="Altagracia ">Altagracia </option>
                    <option value="Faría">Faría</option>
                    <option value="Ana María Campos">Ana María Campos</option>
                    <option value="San Antonio">San Antonio</option>
                    <option value="San José">San José</option>
                    <option value="Sinamaica">Sinamaica</option>
                    <option value="Alta Guajira">Alta Guajira</option>
                    <option value="Elías Sánchez Rubio">Elías Sánchez Rubio</option>
                    <option value="Guajira">Guajira</option>
                    <option value="Donaldo García">Donaldo García</option>
                    <option value="El Rosario">El Rosario</option>
                    <option value="Sixto Zambrano">Sixto Zambrano</option>
                    <option value="San Francisco">San Francisco</option>
                    <option value="El Bajo">El Bajo</option>
                    <option value="Domitila Flores">Domitila Flores</option>
                    <option value="Francisco Ochoa">Francisco Ochoa</option>
                    <option value="Los Cortijos">Los Cortijos</option>
                    <option value="Marcial Hernández">Marcial Hernández</option>
                    <option value="José Domingo Rus">José Domingo Rus</option>
                    <option value="Santa Rita">Santa Rita</option>
                    <option value="El Mene">El Mene</option>
                    <option value="Pedro Lucas Urribarrí">Pedro Lucas Urribarrí</option>
                    <option value="José Cenobio Urribarrí ">José Cenobio Urribarrí </option>
                    <option value="Rafael María Baralt">Rafael María Baralt</option>
                    <option value="Manuel Manrique">Manuel Manrique</option>
                    <option value="Rafael Urdaneta">Rafael Urdaneta</option>
                    <option value="Bobures">Bobures</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Heras">Heras</option>
                    <option value="Monseñor Arturo Álvarez">Monseñor Arturo Álvarez</option>
                    <option value="Rómulo Gallegos">Rómulo Gallegos</option>
                    <option value="El Batey">El Batey</option>
                    <option value="Rafael Urdaneta (Valmore Rodríguez)">Rafael Urdaneta (Valmore Rodríguez)</option>
                    <option value="La Victoria">La Victoria</option>
                    <option value="Raúl Cuenca">Raúl Cuenca</option>
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
                <label class="col-sm-3 col-form-label">Descripción</label>
                <div class="col-sm-9">
                    <textarea class="form-control {{$errors->has('descripcion_p')?'is-invalid':''}}" name="descripcion_p" id="descripcion_p" style="height: 150px;">{{isset($registro->descripcion_p)?$registro->descripcion_p:old('descripcion_p')}}</textarea>
                    {!!$errors->first('descripcion_p','<div class="invalid-feedback">:message</div>')!!}
                    <div class="invalid-feedback"></div>
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-icon-text">
                <i class="ti-file btn-icon-prepend"></i>
                Enviar
            </button>
        </form>
        </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('build/assets/js/select2.js') }}"></script>

@endsection
