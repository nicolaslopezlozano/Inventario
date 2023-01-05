<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Doria - SCM</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('assets/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url(../assets/pages/img/login/bg1.jpg)">
                
                       {{-- <img class="login-logo" src="{{ asset('assets/pages/img/login/gg.jpg') }}" /> --}}
                     </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">

                        <img class="login-logo" src="{{ asset('assets/pages/img/login/logolinea.png') }}" />
                        <h1>Doria</h1>
                        <p> Software para coordinar y optimizar los procesos de la empresa Doria </p>
                            <form action="{{ route('login') }}" class="login-form" method="POST">
                                         {{ csrf_field() }}
                             

                             @if (session('status'))
                                <div class="alert alert-success alert-quitar">
                                    <strong>Doria</strong>
                                    Correo Enviado!
                                </div>
                            @endif

                             @if ($errors->has('email'))
                                    <div class="alert alert-danger alert-quitar">
                                        <strong>Doria</strong>
                                        Informacion Incorrecta!
                                    </div>
                            @endif
                             @if ($errors->has('password'))
                                   <div class="alert alert-danger alert-quitar">
                                        <strong>Doria</strong>
                                        Informacion Incorrecta!
                                    </div>
                            @endif


                                    <div class="row">
                                         <div class="col-xs-6">
                                                <input class="form-control form-control-solid placeholder-no-fix form-group" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>    
                                            </div>    

                                            <div class="col-xs-6">
                                                <input class="form-control form-control-solid placeholder-no-fix form-group" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password" >
                                            </div>
                                    </div>
                                          
                                        <br>    
                                        
                                      
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="rem-password">
                                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                                        
                                                            <input type="checkbox" name="remember" value="1" /> Recordarme
                                                        
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 text-right">
                                                <div class="col-sm-2"> </div>
                                                <div class="btn-group btn-group-lg btn-group-solid margin-bottom-10">
                                                     <button class="btn red btn-lg" type="submit">
                                                        <i class="fa fa-user"></i>
                                                        Ingresar
                                                    </button>
                                                     {{-- <button type="button" class="btn green btn-outline btn-lg">Registrarse</button> --}}
                                                    
                                                 </div>
                                                    <div class="forgot-password">
                                                         <h5>
                                                        <a href="javascript:;" id="forget-password" class="forget-password">¿Olvido su Contraseña?</a>
                                                        </h5>
                                                    </div>
                                                <br>

                                            </div>
                                        </div>
                                     </form>
                        

                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="{{ route('password.email') }}" method="POST">
                            {{ csrf_field() }}
                            <h3 class="font-green">Recuperar Contraseña</h3>
                            <p> Digite su correo para recuperar su contraseña, si se encuentra registrado se le enviara un mensaje a su correo </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="Email" name="email" /> 
                                   
                            </div>
                            <div class="btn-group btn-group-lg btn-group-solid margin-bottom-10 form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline btn-lg">Atras</button>
                                <button type="submit" class="btn green-meadow uppercase pull-right btn-lg">Enviar</button>
                            </div>
                        </form>
                        <br>
                        <br>
                        <br>

                  
                        <!-- END FORGOT PASSWORD FORM -->
    
                </div>

                   <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Universidad Cundinamarca - 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>