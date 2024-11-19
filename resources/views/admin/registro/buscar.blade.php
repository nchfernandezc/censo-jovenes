@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Buscar Registro</h4>
                        <p class="card-description">Ingrese el Número de Control</p>
                        @if (session('status') == 'search-completed')
                            <div class="alert alert-success" role="alert" id="success-alert">
                                {{ __('Búsqueda Completada.') }}
                            </div>
                        @elseif (session('status') == 'search-not-found')
                            <div class="alert alert-danger" role="alert" id="error-alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="GET" action="{{ route('registro.busqueda') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Número de Control</span>
                                    </div>
                                    <input type="text" name="id" class="form-control" placeholder="Número de Control" aria-label="Control Number" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="search-record" formtarget="_blank">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
