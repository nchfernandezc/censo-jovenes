@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Información Del Perfil</h4>
                        <p class="card-description">Editar Datos</p>
                        @if (session('status') === 'profile-updated')
                            <div class="alert alert-success" role="alert" id="success-alert">
                                {{ __('Perfil Actualizado.') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    var alert = document.getElementById('success-alert');
                                    alert.style.transition = 'opacity 1s ease-out';
                                    alert.style.opacity = '0';
                                    setTimeout(function() {
                                        alert.style.display = 'none';
                                    }, 1000);
                                }, 2000);
                            </script>
                        @endif
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nombre</span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Nombre Completo" aria-label="Username" value="{{ Auth::user()->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" aria-label="Email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="add-task">Modificar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12 grid-margin">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cambio de Contraseña</h4>
                        <p class="card-description">Actualizar Contraseña</p>
                        @if (session('status') === 'password-updated')
                            <div class="alert alert-success" role="alert" id="password-success-alert">
                                {{ __('Contraseña Actualizada.') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    var alert = document.getElementById('password-success-alert');
                                    alert.style.transition = 'opacity 1s ease-out';
                                    alert.style.opacity = '0';
                                    setTimeout(function() {
                                        alert.style.display = 'none';
                                    }, 1000);
                                }, 2000);
                            </script>
                        @endif
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Contraseña Actual</span>
                                    </div>
                                    <input type="password" name="current_password" class="form-control" placeholder="Contraseña Actual" aria-label="Current Password" autocomplete="current-password">
                                </div>
                                @if ($errors->updatePassword->has('current_password'))
                                    <span class="mt-2 text-danger">
                                        <i class="ti-alert"></i> {{ $errors->updatePassword->first('current_password') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nueva Contraseña</span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Nueva Contraseña" aria-label="New Password" autocomplete="new-password">
                                </div>
                                @if ($errors->updatePassword->has('password'))
                                    <span class="mt-2 text-danger">
                                        <i class="ti-alert"></i> {{ $errors->updatePassword->first('password') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Confirmar Contraseña</span>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" aria-label="Confirm Password" autocomplete="new-password">
                                </div>
                                @if ($errors->updatePassword->has('password_confirmation'))
                                    <span class="mt-2 text-danger">
                                        <i class="ti-alert"></i> {{ $errors->updatePassword->first('password_confirmation') }}
                                    </span>
                                @endif
                            </div>



                            <button type="submit" class="btn btn-primary" id="update-password">Actualizar Contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
