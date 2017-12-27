<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,400,700,900" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ url('css/materialize.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" media="screen" />

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <body>
        <section class="navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse row" id="navbarSupportedContent">

                    <ul class="navbar-nav col l4">
                      
                    </ul>
                    <div class="col l4 text-center">
                        <a class="navbar-brand auto " href="#"><img src="{{url('img/Rifaweb2.png')}}" alt=""></a>
                    </div>
                    
                    <ul class="navbar-nav justify-content-end col l4">
                      <li class="nav-item">
                        <a class="nav-link" href="#">MI CUENTA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">CARRITO</a>
                      </li>
                    </ul>
                    
                    
                  </div>
                </nav>
            </div>
        </section>
        <section class="buttonsbar">
          <div class="container">
            <div class="row" style="margin-bottom:0;">
              <div class="col l2 s12 m2">
                
                  <div class="bouton_google text-center">
                    <div class="google_volet" style="background-color:#dd4b39;"><span class="hiddenmov">Rifas</span> <i class="fa fa-ticket fa-lg" aria-hidden="true"></i></div>
                    <a href="#123" style="text-decoration:none; color:#dd4b39;">
                      <div class="txt_google"><span class="hiddenmov">Todas las rifas</span><span class="visiblemov">Rifas</span></div>
                    </a>
                  </div>
                
              </div>
              <div class="col l2 s12 m2">
                
                  <div class="bouton_google text-center">
                    <div class="google_volet" style="background-color:#25B6D2;"><span class="hiddenmov">Perfil</span> <i class="fa fa-user fa-lg" aria-hidden="true"></i></div>
                    <a href="#123" style="text-decoration:none; color:#25B6D2;">
                      <div class="txt_google"><span class="hiddenmov">Tus rifas, mensajes y premios</span><span class="visiblemov">Perfil</span></div>
                    </a>
                  </div>
                
              </div>
              <div class="col l2 s12 m2">
                
                  <div class="bouton_google text-center">
                    <div class="google_volet" style="background-color:#FFCD50;"><span class="hiddenmov">Rifas ganadas</span> <i class="fa fa-trophy fa-lg" aria-hidden="true"></i></div>
                    <a href="#123" style="text-decoration:none; color:#FFCD50;">
                      <div class="txt_google"><span class="hiddenmov">Ganadores de las rifas anteriores</span><span class="visiblemov">Ganadores</span></div>
                    </a>
                  </div>
                
              </div>
              <div class="col l2 s12 m2">
                
                  <div class="bouton_google text-center">
                    <div class="google_volet" style="background-color:#2072A0;"> <span class="hiddenmov">¿Cómo Funciona?</span> <i class="fa fa-cogs fa-lg" aria-hidden="true"></i></div>
                    <a href="#123" style="text-decoration:none; color:#2072A0;">
                      <div class="txt_google"><span class="hiddenmov">Ayuda sobre la plataforma</span><span class="visiblemov">Ayuda</span></div>
                    </a>
                  </div>
                
              </div>
              <div class="col l2 s12 m4">
                
                  <div class="bouton_google text-center">
                    <div class="google_volet" style="background-color:#C61867;"><span class="hiddenmov">Permisos y Docs</span> <i class="fa fa-book fa-lg" aria-hidden="true"></i></div>
                    <a href="#123" style="text-decoration:none; color:#C61867;">
                      <div class="txt_google"><span class="hiddenmov">Documentos legales</span><span class="visiblemov">Legales</span></div>
                    </a>
                  </div>
                
              </div>
            </div>
          </div>
        </section>
        <section class="">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('img/slide.png')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('img/slide.png')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('img/slide.png')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </section>

        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col l12">
                <h3 class="section-title section-title-center">
                  <b></b>
                  <span class="secition-title-main">¿CÓMO FUNCIONA?</span>
                  <b></b>
                </h3>
              </div>
            </div>
            <div class="row">
              <div class="col l4 m4">
                <div class="icon-box-img">
                  <img src="{{url('img/form.png')}}" alt="">
                </div>
                <div class="icon-box-text text-center">
                  <h5><strong>#1 – Registrate</strong></h5>
                  <p>Crea tu cuenta, y recibe 100 tickets gratis.</p>
                </div>
              </div>
              <div class="col l4 m4">
                <div class="icon-box-img">
                  <img src="{{url('img/gift.png')}}" alt="">
                </div>
                <div class="icon-box-text text-center">
                  <h5><strong>#2 – Escoge Un Sorteo</strong></h5>
                  <p>Escoge la rifa a la que te gustaría entrar.</p>
                </div>
              </div>
              <div class="col l4 m4">
                <div class="icon-box-img">
                  <img src="{{url('img/trophy.png')}}" alt="">
                </div>
                <div class="icon-box-text text-center">
                  <h5><strong>#3 – Gana</strong></h5>
                  <p>¡Espera a que ganes!</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="productsmain">
          <div class="container">
            <div class="row">
              <div class="col s12 l6">
                    <div class="product big hoverable" style="background: url('{{url('img/bg-product2.jpg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/iphone-x-select-2017.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3>
                            <span>SORTEO DE IPHONE X</span>
                          </h3>
                          <h5>1 Boleto = $30mxn</h5>
                          <div class="row">
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>1</h2>
                                  </div>
                                  <div class="text">
                                    <p>semana</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>3</h2>
                                  </div>
                                  <div class="text">
                                    <p>horas</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>36</h2>
                                  </div>
                                  <div class="text">
                                    <p>minutos</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>19</h2>
                                  </div>
                                  <div class="text">
                                    <p>segundos</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
              <div class="col l6">
                <div class="row">
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col l6">
                <div class="row">
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col l6">
                    <div class="product small hoverable" style="background: url('{{url('img/bg-product.jpeg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/Xbox-One-Console.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3 style="text-align: center;">
                            <span>Sorteo de Xbox One</span>
                          </h3>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l6">
                <div class="product big hoverable" style="background: url('{{url('img/bg-product2.jpg')}}'); background-size: cover;">
                      <div class="product-container">
                        <p>&nbsp;</p>
                        <div class="product-image text-center">
                          <img src="{{url('img/iphone-x-select-2017.png')}}" alt="" class="responsive-img">
                        </div>
                        <div class="product-text uppercase">
                          <h3>
                            <span>SORTEO DE IPHONE X</span>
                          </h3>
                          <h5>1 Boleto = $30mxn</h5>
                          <div class="row">
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>1</h2>
                                  </div>
                                  <div class="text">
                                    <p>semana</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>3</h2>
                                  </div>
                                  <div class="text">
                                    <p>horas</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>36</h2>
                                  </div>
                                  <div class="text">
                                    <p>minutos</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col l3">
                              <div class="countbox">
                                <div class="countnumber">
                                  <div class="number">
                                    <h2>19</h2>
                                  </div>
                                  <div class="text">
                                    <p>segundos</p>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          <div class="button text-center">
                            <button class="btn btn-success success">
                            Ir a sorteo
                          </button>
                          </div>
                          
                        </div>
                      </div>
                      
                    </div>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="col l12">
              <p>Creado por PYM Digital</p>

              <p>Copyright 2017 © RifaWeb</p>
            </div>
          </div>
          
        </footer>
        <a href="#" id="back-to-top" title="Regresar arriba">&uarr;</a>
        <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/popper.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('js/script.js') }}"></script>
    </body>
</html>