@extends('templates.default')

@section('pagecontent')


<section class="entrar">
    <div class="container">
        <div class="row">

        <div class="col-md-6 mb-4 offset-md-3">
            <div class="card hoverable">
                <div class="card-body">
                    <form id="signupform" class="form-horizontal" role="form" action="{{ url('/registro') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <h3 class="text-center default-text py-3"><i class="fa fa-user"></i> Registrarse:</h3>
                        <!--Body-->
                        <div class="md-form input-field">
                            
                            <input type="text" name="name" id="defaultForm-email" class="form-control">
                            <label for="defaultForm-email"><i class="fa fa-user-o grey-text fa-lg"></i> Nombre</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="email" name="email" id="defaultForm-email" class="form-control">
                            <label for="defaultForm-email"><i class="fa fa-envelope-o grey-text fa-lg"></i> Email</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="text" name="dob" id="defaultForm-email" class="form-control">
                            <label for="defaultForm-email"><i class="fa fa-envelope-o grey-text fa-lg"></i> Fecha de nacimiento</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="text" name="tel" id="defaultForm-email" class="form-control">
                            <label for="defaultForm-email"><i class="fa fa-envelope-o grey-text fa-lg"></i> Teléfono</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="text" name="genero" id="defaultForm-email" class="form-control">
                            <label for="defaultForm-email"><i class="fa fa-envelope-o grey-text fa-lg"></i> Genero</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="password" name="password" id="defaultForm-pass" class="form-control">
                            <label for="defaultForm-pass"><i class="fa fa-lock grey-text fa-lg"></i> Contraseña</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="password" name="password_confirmation" id="defaultForm-pass" class="form-control">
                            <label for="defaultForm-pass"><i class="fa fa-lock grey-text fa-lg"></i> Confirmar contraseña</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-default waves-effect waves-light">Crear cuenta</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection