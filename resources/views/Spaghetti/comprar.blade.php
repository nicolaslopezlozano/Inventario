@extends ('master.header')

@section('content')
    @if(Entrust::can('acceder-spaguetti'))

    <h1 class="page-title"> Compra de Producto por Lotes
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Compra de Spaghetti</span>
                </li>
            </ul>
        </div>

    <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Compra de Spaghetti </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    {{-- <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a> --}}
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
            <form method="POST" role="form" action="{{ url('spaghetti') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Cantidad en Lotes <span class="required"> *</span></label>
                            <div class="col-md-4">
                            <input type="number" value class="form-control input-circle" name="cantidad" value="{{ old('cantidad') }}" placeholder="Por favor, digite número de lotes">
                                <span class="help-block"> Se admitirá solamente si se tiene en stock la cantidad que solicita. </span>
                            </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle green">Agregar a Carrito</button>
                                <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>

    @endif

@endsection