@extends('templates.default')

@section('pagecontent')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 offset-md-3">
                <div class="card-body">
                    <div class="panel panel-default">
                        <h6 class="section-title-center py-3"> <span class="secition-title-main"><i class="fa fa-lock"></i> Recuperacion de contraseña</span></h6>
                        
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            
                            <form id="signupform" class="form-horizontal" role="form" action="{{ url('/password/email') }}" method="post">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="md-form input-field">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                    <label for="email"><i class="fa fa-envelope-o grey-text fa-lg"></i> Email</label>
                                </div>
                                

                                <div>
                                <button class="btn btn-default waves-effect waves-light">Enviar enlace de recuperación</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection