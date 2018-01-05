@extends('templates.default')

@section('pagecontent')


<section class="entrar">
    <div class="container">
        <div class="row">

        <div class="col-md-6 mb-4 offset-md-3">
            <div>
                <div class="card-body">
                    <div class="row omb_row-sm-offset-3 social-login">
                        <div class="col-md-4 offset-md-4">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                <i class="fa fa-facebook visible-xs"></i>
                                <span class="hidden-xs">Facebook</span>
                            </a>
                        </div>
                    </div>
                    <h6 class="section-title-center py-3"> <span class="secition-title-main"><i class="fa fa-user"></i> Registrarse</span></h6>
                    <form id="signupform" class="form-horizontal" role="form" action="{{ url('/registro') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!--Body-->
                        <div class="md-form input-field">
                            <input type="text" name="name" id="nombre" class="form-control">
                            <label for="nombre"><i class="fa fa-user-o grey-text fa-lg"></i> Nombre completo</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="email" name="email" id="email" class="form-control">
                            <label for="email"><i class="fa fa-envelope-o grey-text fa-lg"></i> Email</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="text" name="dob" id="dob" class="form-control datepicker">
                            <label for="dob"><i class="fa fa-calendar grey-text fa-lg"></i> Fecha de nacimiento</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="text" name="tel" id="tel" class="form-control">
                            <label for="tel"><i class="fa fa-phone grey-text fa-lg"></i> Teléfono</label>
                        </div>
                        <label for="defaultForm-email"><i class="fa fa-venus-mars grey-text fa-lg"></i> Genero</label>
                        <div class="md-form">
                            
                        <p><input name="genero" id="masculino" type="radio" value="Masculino" /><label for="masculino">Masculino</label>  &nbsp;   &nbsp;   &nbsp; 
                            <input name="genero" id="femenino" type="radio" value="Femenino" /><label for="femenino">Femenino</label></p>
                           
                            
                        </div>
                        
                        <div class="md-form input-field">
                            
                            <input type="password" name="password" id="defaultForm-pass" class="form-control">
                            <label for="defaultForm-pass"><i class="fa fa-lock grey-text fa-lg"></i> Contraseña</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="password" name="password_confirmation" id="defaultForm-pass-confirm" class="form-control">
                            <label for="defaultForm-pass-confirm"><i class="fa fa-lock grey-text fa-lg"></i> Confirmar contraseña</label>
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