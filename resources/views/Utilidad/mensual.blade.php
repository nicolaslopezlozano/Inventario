@extends ('master.header')

@section('content')  
@if(Entrust::can('ver-costo-transporte'))     
{{-- {{ toastr.info("{{ Session::get('message') }}") }} --}}

        <h1 class="page-title"> Utilidad Mensual
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Utilidad</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Mensual</span>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet light form-fit ">
                     <div class="portlet-title">
                        <div class="portlet-body form">
                            <form action="#" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Months Only</label>
                                    <div class="col-md-3">
                                        <div class="input-group input-medium date date-picker" data-date="11/2019" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                            <input type="text" class="form-control" readonly>
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <!-- /input-group -->
                                        <span class="help-block"> Select month only </span>
                                    </div>
                                </div>
                                
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Buscar</button>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Utilidad
                                    </label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="number" value="{{ old('utilidad')}}" readonly/> </div>
                                    </div>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
                    
@endif

@endsection

@section('head')
        
@endsection


@section('foot')
    
@endsection