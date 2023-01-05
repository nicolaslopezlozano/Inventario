@extends ('master.header')

@section('content')  
    @if(Entrust::can('ver-carrito'))

    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-green"></i>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
    
                        <form method="POST" action="{{ url("carrito/{$compra->id}") }}" id="form_sample_2" class="form-horizontal">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> La Informacion es Correcta! </div>
                                {{-- <div class="form-group  margin-top-20">
                                    <label id="name" class="control-label col-md-3">Nombre Ciudad
                                        <span class="required"> * </span> 
                                    </label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="name" value="{{ $compra->nombre_ciudad }}" placeholder="{{ $compra->nombre_ciudad }}" /> </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label class="control-label col-md-3">Ciudad</label>
                                    <div class="col-md-4">                                   
                                        {{-- <select class="bs-select form-control input-small" data-style="btn-primary"> --}}
                                            <select class="bs-select form-control" data-width="75%" name="proveedor_id">
                                                @foreach($ciudades as $ciudad)
                                                    {{-- <option>{{ $rols->nombre_rol }}</option> --}}
                                                    <option value="{{$ciudad->id}}">{{$ciudad->nombre_ciudad}}</option>
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
                                            <input type="number" class="form-control" name="cantidad" value="{{ $compra->cantidad }}" placeholder="{{ $compra->precio }}"/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-3">Fecha
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="fecha" value="{{ $compra->fecha }}" placeholder="{{ $compra->precio }}"/> 
                                                <input type="hidden" type="text" class="form-control" name="id" value="{{ $compra->id }}" placeholder="{{ $compra->id }}"/>
                                            </div>
                                        </div>
                                    </div>
    
                            </div>
    
                            
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Editar</button>
                                        <a href="{{ asset('compraproveedor.lista') }}">
                                            <button type="button" class="btn default">Cancelar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>


    @endif

@endsection