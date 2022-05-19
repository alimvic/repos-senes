@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Servicios Forms</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('Crear-formulario')
                        <a class="btn btn-warning" href="{{ route('blogs.create') }}">Nuevo</a>
                        @endcan                 
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">NOMBRES COMPLETOS: </th>
                                    <th style="color:#fff;">APELLIDOS COMPLETOS: </th>                                    
                                    <th style="color:#fff;">CEDULA DE IDENTIDAD: </th>   
                                    <th style="color:#fff;">Acciones</th>                                                                 
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
                                        <a class="btn btn-info" href="{{ route('blogs.pdf',$blog->id) }}">PDF</a>
                                       
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
    </section>
@endsection
