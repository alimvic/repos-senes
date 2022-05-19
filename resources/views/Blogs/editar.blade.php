@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Blog</h3>
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


                    <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombres">Nombres completos</label>
                                   <input type="text" name="nombres" class="form-control" value="{{ $blog->nombres }}">
                                </div>
                            </div><div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apellidos">Apellidos</label>
                                   <input type="text" name="apellidos" class="form-control" value="{{ $blog->apellidos }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="ci">Numero de cedula</label>
                                   <input type="text" name="ci" class="form-control" value="{{ $blog->ci }}">
                                   
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="cargo_user">Cargo</label>
                                   <input type="text" name="cargo_user" class="form-control" value="{{ $blog->cargo_user }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="telefono">Telefono</label>
                                   <input type="text" name="telefono" class="form-control" value="{{ $blog->telefono }}">
                                   
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="ext">EXT.</label>
                                   <input type="text" name="ext" class="form-control" value="{{ $blog->ext }}">
                                   
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="unidad">Unidad fisica a la que pertenece:</label>
                                   <input type="text" name="unidad" class="form-control" value="{{ $blog->ext }}">
                                   
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fecha">Fecha del requerimiento</label>
                                   <input type="date" name="fecha" class="form-control" value="{{ $blog->fecha }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="desc_requerimiento">Descripcion del requerimiento</label>
                                   <input type="text" name="desc_requerimiento" class="form-control" value="{{ $blog->desc_requerimiento }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nom_resp">Nombre del responsable</label>
                                   <input type="text" name="nom_resp" class="form-control" value="{{ $blog->nom_resp }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="justificacion">Justificacion </label>
                                   <input type="text" name="justificacion" class="form-control" value="{{ $blog->justificacion }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fecha_vigencia">Fecha de Vigencia</label>
                                   <input type="date" name="fecha_vigencia" class="form-control" value="{{ $blog->fecha_vigencia }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nom_jef">Nombres completos</label>
                                   <input type="text" name="nom_jef" class="form-control" value="{{ $blog->nom_jef }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apell_jef">Apellidos completos</label>
                                   <input type="text" name="apell_jef" class="form-control" value="{{ $blog->apell_jef }}">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="cargo_jef">Cargo:</label>
                                   <input type="text" name="cargo_jef" class="form-control" value="{{ $blog->cargo_jef }}">
                                </div>
                            </div>                  
    
                            <button type="submit" class="btn btn-primary">Guardar</button>     
                                                   
                            </div>
                        </div>

                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
