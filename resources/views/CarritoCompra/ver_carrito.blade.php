@extends ('master.header')

@section('content') 
@if(Entrust::can('ver-carrito'))

<h1 class="page-title"> Ver Carrito de Compras
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{ route('home') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Carrito de Compra</span>
            </li>
        </ul>
    </div>

    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Lista de Lotes para Comprar </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{ route('spaghetti.index') }}">
                                        <button id="sample_editable_1_new" class="btn sbold green"> Agregar Nuevo Lote                                       
                                            <i class="fa fa-plus"></i> 
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Herramientas
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Guardar PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i>Exportar a Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th style="visibility: hidden"> Número </th>
                                    <th> Cantidad </th>
                                    <th> Fecha </th>
                                    <th> Costo Transporte </th>
                                    <th> Comprar/Cancelar Compra </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($costos as $costo)
                                    @foreach($carritos as $carrito)
                                        @if($carrito->costo_transporte_id == $costo->id)
                                            <tr class="odd gradeX"> 
                                            
                                            <td style="visibility: hidden" width="1" height="1"> 
                                                {{ $carrito->id }} 
                                            </td>                                   
                                            <td> {{ $carrito->cantidad }} </td>
                                            
                                            <td class="center"> {{ $carrito->fecha }} </td>

                                            <td class="center"> {{ $costo->precio }} </td>
            
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                        @if(Entrust::can('editar-costo-transporte')) 
                                                            <li>
                                                                <a href="{{ route('carrito.edit', ['id' => $costo->id]) }}">
                                                                    <i class="icon-docs"></i> Comprar </a>
                                                            </li>
                                                        @endif
                                                        @if(Entrust::can('eliminar-costo-transporte'))   
                                                            <li>
                                                                <form action="{{ route('carrito.destroy', ['id' => $costo->id]) }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    &nbsp&nbsp
                                                                    <i class="icon-tag"></i>
                                                                    <button type="submit"> Cancelar </button>
                                                                </form>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>                                               
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
               
            </div>
        </div>

@endif

@endsection