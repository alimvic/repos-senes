@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <div ><H1>
                Bienvenido: {{\Illuminate\Support\Facades\Auth::user()->name}}
            </H1>
                </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-xl-4">
                                    <div class="card bg-c-blue order-card" style="background-color:rgb(90, 221, 105)" >
                                        <div class="card-block"  >
                                        <h5 class="text-center" style="color: rgb(255, 255, 255)">Usuarios</h5>                                               
                                            @php
                                             use App\Models\User;
                                            $cant_usuarios = User::count();                                                
                                            @endphp
                                            <h2 class="text-center"><i class="fa fa-users f-left" style="color: rgb(255, 255, 255)"></i><span style="color: rgb(255, 255, 255)"> {{$cant_usuarios}}</span></h2>
                                            <p class="m-b-0 text-center"><a href="/usuarios" class="text-white">Ver más</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card" style="background-color:#e04b53">
                                        <div class="card-block">
                                        <h5 class="text-center" style="color: rgb(255, 255, 255)">Roles</h5>                                               
                                            @php
                                            use Spatie\Permission\Models\Role;
                                             $cant_roles = Role::count();                                                
                                            @endphp
                                            <h2 class="text-center"><i class="fa fa-user-lock f-left" style="color: rgb(255, 255, 255)"></i><span style="color: rgb(255, 255, 255)"> {{$cant_roles}}</span></h2>
                                            <p class="m-b-0 text-center"><a href="/roles" class="text-white" >Ver más</a></p>
                                        </div>
                                    </div>
                                </div>                                                                
                                
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-pink order-card" style="background-color:#67e4ef">
                                        <div class="card-block" >
                                            <h5 class="text-center" style="color: rgb(255, 255, 255)">Formularios</h5>                                               
                                            @php
                                             use App\Models\Blog;
                                            $cant_blogs = Blog::count();                                                
                                            @endphp
                                            <h2 class="text-center"><i class=" fa fa-solid fa-clipboard f-left" style="color: rgb(255, 255, 255)"></i><span style="color: rgb(255, 255, 255)"> {{$cant_blogs}}</span></h2>
                                            <p class="m-b-0 text-center" ><a href="/blogs" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

