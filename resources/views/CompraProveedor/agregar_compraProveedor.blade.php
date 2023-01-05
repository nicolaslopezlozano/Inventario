@extends ('master.header')

@section('content')  
@if(Entrust::can('registrar-costo-transporte'))                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Agregar Compra Proveedor</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->

                    <form method="POST" action="{{ url('compraproveedor.crear') }}" id="form_sample_2" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> La Informacion es Correcta! </div>
                            

                            {{-- <div class="form-group  margin-top-20">
                                <label id="name" class="control-label col-md-3">Proveedor
                                    <span class="required"> * </span> 
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="name" value="{{ old('name')}}" /> </div>
                                </div>
                            </div> --}}
                            

                            <div class="form-group">
                                <label class="control-label col-md-3">Proveedor</label>
                                <div class="col-md-4">                                   
                                    {{-- <select class="bs-select form-control input-small" data-style="btn-primary"> --}}
                                        <select class="bs-select form-control" data-width="75%" name="proveedor_id">
                                            @foreach($proveedores as $proveedor)
                                                {{-- <option>{{ $rols->nombre_rol }}</option> --}}
                                                <option value="{{$proveedor->id}}">{{$proveedor->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Precio
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