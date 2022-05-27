<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Blog;
use App\Models\User;
use PDF as GlobalPDF;
use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;
use Symfony\Contracts\Service\Attribute\Required;

class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:Ver-formulario|Crear-formulario|Editar-formulario|Borrar-formulario')->only('index');
         $this->middleware('permission:Crear-formulario', ['only' => ['create','store']]);
         $this->middleware('permission:Editar-formulario', ['only' => ['edit','update']]);
         $this->middleware('permission:Borrar-formulario', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
         //Con paginación
         //$blogs = Blog::paginate(5);
         $buscarpor=$request->get('buscarpor');
        $blogs = Blog::where('nombres','like','%'.$buscarpor.'%')-> paginate(5);
        //return view('usuarios.index',compact('usuarios',));

         return view('blogs.index',compact('blogs', 'buscarpor'));
         
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }
    public function pdf($id)
    {      
        //$pdf = PDF::loadView('blogs.pdf',  compact('blogs'));
        $blogs = Blog::find($id);
        $pdf = PDF::loadView('blogs.pdf',  compact('blogs'));
        $pdf->setPaper('A4', 'landscape');
        //return $pdf->stream();
        
        return $pdf->download('Formulario.pdf');

         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required',
            'cargo_user' => 'required',
            'telefono' => 'required',
            'ext' => 'required',
            'unidad' => 'required',
            'fecha' => 'required',
            'desc_requerimiento' => 'required',
            'nom_resp' => 'required',
            'justificacion' => 'required',
            'fecha_vigencia' => 'required',
            'nom_jef' => 'required',
            'cargo_jef' => 'required'
        ]);
    
        Blog::create($request->all());
    
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::find($id);
        //dd($blogs);
        return view('blogs.pdf',compact('blogs'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.editar',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
         request()->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required',
            'cargo_user' => 'required',
            'telefono' => 'required',
            'ext' => 'required',
            'unidad' => 'required',
            'fecha' => 'required',
            'desc_requerimiento' => 'required',
            'nom_resp' => 'required',
            'justificacion' => 'required',
            'fecha_vigencia' => 'required',
            'nom_jef' => 'required',
            'cargo_jef' => 'required',
        ]);
    
        $blog->update($request->all());
    
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
    
        return redirect()->route('blogs.index');
    }
}
