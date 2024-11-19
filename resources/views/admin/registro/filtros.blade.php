@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Filtrar Registros</h4>
                        <p class="card-description">Seleccione los filtros deseados</p>
                        @if (session('status') == 'report-generated')
                            <div class="alert alert-success" role="alert" id="success-alert">
                                {{ __('Reporte generado exitosamente.') }}
                                <a href="{{ session('pdf_link') }}" target="_blank" class="btn btn-primary mt-3">
                                    Ver PDF
                                </a>
                            </div>
                        @elseif (session('status') == 'report-error')
                            <div class="alert alert-danger" role="alert" id="error-alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="GET" action="{{ route('registro.filtros') }}">
                            @csrf
                            <div class="form-group">
                                <label for="parroquia">Parroquia</label>
                                <select name="parroquia" id="parroquia" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach ($parroquias as $parroquia)
                                        <option value="{{ $parroquia }}">{{ $parroquia }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                <select name="municipio" id="municipio" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio }}">{{ $municipio }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ocupacion">Ocupación</label>
                                <select name="ocupacion" id="ocupacion" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach ($ocupaciones as $ocupacion)
                                        <option value="{{ $ocupacion }}">{{ $ocupacion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="grado">Grado de Instrucción</label>
                                <select name="grado" id="grado" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach ($grados as $grado)
                                        <option value="{{ $grado }}">{{ $grado }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoría del Proyecto</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria }}">{{ $categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" formtarget="_blank">Generar Reporte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
