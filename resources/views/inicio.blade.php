
@extends('master.header')

@section('content')
	
        {{-- <h1 class="page-title"> Doria
        </h1> --}}
        <div class="page-bar">
            {{-- <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Inicio</a>
                    <i class="fa fa-angle-right"></i>
                </li>
            </ul> --}}
        </div>
        <!-- END PAGE HEADER-->
        <div>
            <a href="https://www.pastasdoria.com">
                <img class="login-logo" src="{{ asset('assets/pages/img/login/banner.jpg') }}" alt="Responsive image"/>
            </a>
        </div>
        <div>
            <br>
        </div>
        <div class="note note-info">
            <p> Bienvenido a la Plataforma para coordinar y optimizar los procesos de la empresa Doria S.A.S utilizando conceptos de gestión de la cadena de suministro -SCM </p>
        </div>

        <div class="page-bar"></div>

        <div class="note note-info">
            <h1 class="page-title"> Misión:</h1>   
            <p>Soportados en marcas poderosas, innovación sobresaliente, una efectiva red de distribución y conciencia sostenible, buscamos la creciente generación de valor y el desarrollo integral de nuestra gente, contribuyendo a la protección, bienestar y placer del grupo familiar.</p>
            <br>
            <h1 class="page-title"> Visión:</h1>  
            <p>Duplicar las ventas del negocio al 2020* ofreciendo alimentos que proporcionen protección, bienestar y placer al grupo familiar dentro de la Región estratégica</p>
        </div>                       

@endsection
