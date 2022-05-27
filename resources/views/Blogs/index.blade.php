@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Formularios de nuevos servicios.</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="table-responsive">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('Crear-formulario')
                        <a class="btn btn-warning" href="{{ route('blogs.create') }}">NUEVO</a>
                        <form class="form-inline my-2 my-lg-2 float-right" role="search" >
                                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}">
                                <button class="btn btn-success" type="submit">Buscar</button>
                              </form>
                        @endcan                 
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">NOMBRES: </th>
                                    <th style="color:#fff;">APELLIDOS : </th>                                    
                                    <th style="color:#fff;">CEDULA DE IDENTIDAD: </th>    
                                    <th style="color:#fff;">ACCIONES: </th>                                                            
                              </thead>
                              <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td style="display: none;">{{ $blog->id }}</td>                                
                                <td>{{ $blog->nombres }}</td>
                                <td>{{ $blog->apellidos }}</td>
                                <td>{{ $blog->ci }}</td>

                                <td>
                                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST" id="form" >                                        
                                        @can('Editar-formulario')
                                        <a class="btn btn-info" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('Borrar-formulario')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                        @csrf
                                        @csrf
                                        
                                        <a class="btn btn-success"  href="{{route('blogs.pdf',$blog->id) }}" method="GET" id="form">PDF</a>
                                        @csrf
                                    </form>     
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $blogs->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
