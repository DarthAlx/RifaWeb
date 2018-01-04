
@extends('templates.default')

@section('pagecontent')


<section class="entrar">
    <div class="container">
        <div class="row">
        <div class="col-md-6 mb-4 offset-md-3">

            <div>
                <div class="card-body">
                    <h3 class="text-center section-title-center py-3"> <span class="secition-title-main"><i class="fa fa-lock"></i> Iniciar sesión:</span></h3>
                    <div class="row omb_row-sm-offset-3 omb_socialButtons">
                        <div class="col-md-4 offset-md-4">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                <i class="fa fa-facebook visible-xs"></i>
                                <span class="hidden-xs">Facebook</span>
                            </a>
                        </div>
                    </div>
                    <p class="text-center">Ó</p>
                    <!--Body-->
                    <form id="loginform" class="form-horizontal" role="form" action="{{ url('/entrar') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="md-form input-field">
                            
                            <input type="text" id="defaultForm-email" name="email" class="form-control" required>
                            <label for="defaultForm-email"><i class="fa fa-envelope grey-text fa-lg"></i> Email</label>
                        </div>
                        <div class="md-form input-field">
                            
                            <input type="password" id="defaultForm-pass" name="password" class="form-control" required>
                            <label for="defaultForm-pass"><i class="fa fa-lock grey-text fa-lg"></i> Contraseña</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-default waves-effect waves-light">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
    </div>
</section>

@endsection