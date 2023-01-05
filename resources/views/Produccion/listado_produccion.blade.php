@extends ('master.header')

@section('content')  
@if(Entrust::can('ver-costo-transporte'))     
{{-- {{ toastr.info("{{ Session::get('message') }}") }} --}}
<!-- END THEME PANEL -->
    <h1 class="page-title"> Lista de Producción por Dia
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{ route('home') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Producción por Dia</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Lista</span>
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
                        <span class="caption-subject bold uppercase"> Lista de Producción por Dia</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                @if($cantidad == 0)
                                    <div class="btn-group">
                                        <a href="{{ route('produccion.create') }}">
                                        <button id="sample_editable_1_new" class="btn sbold green"> Nueva Producción por Dia                                      
                                            <i class="fa fa-plus"></i> 
                                        </button>
                                        </a>
                                    </div>
                                @endif

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
                                <th style="visibility: hidden"> Numero </th>
                                <th> Cantidad de Lote(s) </th>
                                <th> Fecha </th>
                                <th> Precio Producción </th>
                                <th> Editar/Eliminar </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($produccion as $producido)
                                <tr class="odd gradeX"> 
                                   
                                <td style="visibility: hidden" width="1" height="1"> 
                                    {{ $producido->id }} 
                                </td>                                   
                                <td class="center"> 
                                    {{ $producido->cantidad }}
                                </td>
                                <td class="center"> 
                                    {{ $producido->fecha }}
                                </td>
                                <td class="center"> 
                                    {{ $producido->precio_produccion }}
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            @if(Entrust::can('editar-costo-transporte')) 
                                                <li>
                                                    <a href="{{ route('produccion.show', ['id' => $producido->id]) }}">
                                                        <i class="icon-docs"></i> Editar </a>
                                                </li>
                                            @endif
                                            @if(Entrust::can('eliminar-costo-transporte'))   
                                                <li>
                                                    <form action="{{ route('produccion.destroy', ['id' => $producido->id]) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        &nbsp&nbsp
                                                        <i class="icon-tag"></i>
                                                        <button type="submit"> Eliminar </button>
                                                    </form>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>                                               
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br><br>
                    
            <!-- END EXAMPLE TABLE PORTLET-->
           
                    @if($cantidad != 0)
                        &nbsp&nbsp&nbsp&nbsp<h3>Productos Utilizados:</h3>
                        <div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th style="visibility: hidden"> Numero </th>
                                            <th> Proveedor </th>
                                            <th> Cantidad de Lotes </th>
                                            <th> Precio </th>
                                            <th> Editar/Eliminar </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($costos as $costo)
                                            <tr class="odd gradeX"> 
                                               
                                            <td style="visibility: hidden" width="1" height="1"> 
                                                {{ $costo->id }} 
                                            </td>         
                                            <td class="center"> 
                                                {{-- {{ $costo->proveedor_id }} --}}
                                                @foreach($compraproveedores as $compraproveedor)
                                                    @foreach($users as $user)
                                                        @if($compraproveedor->id == $costo->proveedor_id)
                                                            @if($user->id == $compraproveedor->proveedor_id)
                                                                {{ $user->name }}
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endforeach

                                            </td>                          
                                            <td class="center"> 
                                                {{ $costo->cantidad }}
                                            </td>
                                            <td class="center"> 
                                                {{ $costo->precio }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                        @if(Entrust::can('eliminar-costo-transporte'))   
                                                            <li>
                                                                <form action="{{ route('costo.destroy', ['id' => $costo->id]) }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    &nbsp&nbsp
                                                                    <i class="icon-tag"></i>
                                                                    <button type="submit"> Eliminar </button>
                                                                </form>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>                                               
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            
                            <form method="POST" action="{{ url('costo.crear') }}" id="form_sample_2" class="form-horizontal">
                            {{ csrf_field() }}
                                <div class="form-body">
                                    <br><br><br>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Proveedor</label>
                                        <div class="col-md-4">                                   
                                            {{-- <select class="bs-select form-control input-small" data-style="btn-primary"> --}}
                                                <select class="bs-select form-control" data-width="75%" name="proveedor">
                                                    @foreach($proveedores as $proveedor)
                                                        {{-- <option>{{ $rols->nombre_rol }}</option> --}}
                                                        <option value="{{$proveedor->id}}">

                                                            {{-- {{$proveedor->proveedor_id}} --}}
                                                            @foreach($users as $user)
                                                                @if($user->id == $proveedor->proveedor_id)
                                                                    {{ $user->name }}
                                                                @endif
                                                            @endforeach
                                                        </option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Cantidad
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="number" value="{{ old('number')}}"/> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Registrar</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div> 
                    @endif
                </div>
            </div>
        </div>
    </div>

@endif

@endsection

@section('head')

@endsection


@section('foot')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection