@extends('layouts.app')

@section('content')
    <section class="section" >
        <div class="section-header">
            <h1 class="page__heading">Crear formulario de servicio</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">    

                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        <div style="background-color:#6777ef" class="col-xs-12 col-sm-12 col-md-12" > 
                            <label for="nombres" style="color:rgb(255, 255, 255);">IDENTIFICACIÓN DEL SOLICITANTE</label>                          
                        </div>
                        <form action="{{ route('blogs.store') }}" method="POST" >
                            @csrf
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="nombres">Nombres completos</label>
                                       <input type="text" name="nombres" class="form-control" required="">
                                    </div>
                                </div><div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="apellidos">Apellidos</label>
                                       <input type="text" name="apellidos" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="ci">Numero de cedula</label>
                                       <input type="text" name="ci" class="form-control"  required minlength="10" maxlength="10" size="10" required="">
                                       
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="cargo_user">Cargo</label>
                                       <input type="text" name="cargo_user" class="form-control" required="" >
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="telefono">Telefono</label>
                                       <input type="text" name="telefono" class="form-control" pattern="[0-9]{10}" required minlength="5" maxlength="10" size="10">
                                       
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="ext">EXT.</label>
                                       <input type="text" name="ext" class="form-control"  required minlength="5" maxlength="5" size="5" required="" >
                                       
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="unidad">Unidad fisica a la que pertenece:</label>
                                       <input type="text" name="unidad" class="form-control" required="">
                                       
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="fecha">Fecha del requerimiento</label>
                                       <input type="date" name="fecha" class="form-control" required="">
                                    </div>
                                </div>
                                <div style="background-color:#6777ef" class="col-xs-12 col-sm-12 col-md-12" > 
                                    <label for="nombres" style="color:rgb(255, 255, 255);">DATOS RELATIVOS AL REQUERIMIENTO</label>                          
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="desc_requerimiento">Descripcion del requerimiento</label>
                                       <input type="text" name="desc_requerimiento" class="form-control" required="" required minlength="10" maxlength="170" size="10">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="nom_resp">Nombre del responsable</label>
                                       <input type="text" name="nom_resp" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="justificacion">Justificacion </label>
                                       <input type="text" name="justificacion" class="form-control" required="" required minlength="10" maxlength="170" size="10">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="fecha_vigencia">Fecha de Vigencia</label>
                                       <input type="date" name="fecha_vigencia" class="form-control" required="">
                                    </div>
                                </div>
                                <div style="background-color:#6777ef" class="col-xs-12 col-sm-12 col-md-12" > 
                                    <label for="nombres" style="color:rgb(255, 255, 255);">AUTORIZACIÓN DE LA SOLICITUD</label>                          
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="nom_jef">Nombres completos del Jefe Inmediato</label>
                                       <input type="text" name="nom_jef" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="cargo_jef">Cargo:</label>
                                       <input type="text" name="cargo_jef" class="form-control" required="">
                                    </div>
                                </div>
                       
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>

                        </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
