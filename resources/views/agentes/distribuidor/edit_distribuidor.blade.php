@extends('master.header')

@section('content')
    @if(Entrust::can('editar-distribuidores'))    
					<h1 class="page-title"> Editar Perfil
                    </h1>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="../images/Usuarios/{{ $user->foto }}" class="img-responsive" alt=""> </div> 
                                        {{-- <img src="{{ asset('assets/pages/img/avatars/team1.jpg') }}" class="img-responsive" alt=""> </div> --}}
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">{{ $user->name }}</div>
                                        <div class="profile-usertitle-job"> {{ $user->agente->nombre_agente }} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="{{ asset('home') }}">
                                                    <i class="icon-home"></i> Inicio </a>
                                            </li>
                                            <li>
                                                <a href="page_user_profile_1_account.html">
                                                    <i class="icon-info"></i> Help </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light ">
                                    <div>
                                        <h4 class="profile-desc-title">Acerca de {{ $user->name }}</h4>
                                        <span class="profile-desc-text"> {{ $user->agente->nombre_agente }} </span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.keenthemes.com">{{ $user->email }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Editar Perfil</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Cuenta</a>
                                                    </li>
                                                
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Cambiar Contraseña</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form method="POST" role="form" action="{{ url("distribuidor/{$user->id}") }}">
                                                            {{-- {{ @method('PUT') }} --}}
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label class="control-label">Nombre</label>
                                                                <input type="text" value="{{ $user->name }}" placeholder="{{ $user->name }}" class="form-control" name="name"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nit</label>
                                                                <input type="text" value="{{ $user->nit }}" placeholder="{{ $user->nit }}" class="form-control" name="nit"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Numero de Telefono</label>
                                                                <input type="text" value="{{ $user->telefono }}" placeholder="{{ $user->telefono }}" class="form-control" name="number"/> </div>
                                                             <div class="form-group">
                                                                <label class="control-label">Dirección</label>
                                                                <input type="text" value="{{ $user->direccion }}" placeholder="{{ $user->direccion }}" class="form-control" name="direccion"/> </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" value="{{ $user->email }}" placeholder="{{ $user->email }}" class="form-control" name="email"/> </div>
                                                            <div class="margiv-top-10">
                                                                <button type="submit" class="btn green">Editar</button>
                                                                {{-- <a href="javascript:;" class="btn default"> Cancel </a> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                            
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Actual Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nueva Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Reescriba Nueva Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Cambiar Contraseña </a>
                                                                {{-- <a href="javascript:;" class="btn default"> Cancel </a> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
    @endif

{{-- 	{{ $user->id }} --}}

@endsection
