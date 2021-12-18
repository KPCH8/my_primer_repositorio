<?php

namespace App\Http\Controllers;

use App\Models\Universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    /*
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     
    |-------------------------------------------------------------------------
    |Vista de Universidades
    |-------------------------------------------------------------------------
    |Retornamos la vista que se encuentra en (resources/Universidades/index)
    |En esta  vista las universidades registradas podran consultar y
    |modificar toda la informacion que han registrado
    */
    public function index()
    {
        $DatosUniversidad['Universidad'] = Universidad::paginate(5);
        return view('Universidades.login', $DatosUniversidad);
    }


    /*
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     
    |--------------------------------------------------------------------------
    |Formulario de registro de Universidades
    |--------------------------------------------------------------------------
    |En esta vista retornamos al usuario al formulario de registro de datos
    |basicos de la universidad
    */
    public function create()
    {
        //
        return view('Universidades.create');
    }


    /*
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
     |----------------------------------------------------------------------------
     |Insercción de información a la base de datos
     |----------------------------------------------------------------------------
     |Store resepciona los datos enviados del formulario y los almacena 
     |en nuestra base de datos.
     */
    public function store(Request $request)
    {
        //$DatosUniversidad = Request()->all();
        $DatosUniversidad = Request()->except('_token');

        //Esta condicion valida que se haya adjuntado una imagen en el formulario para guardarla en la carpeta oploads
        if ($request->hasFile('logo')) {
            $DatosUniversidad['logo']=$request->file('logo')->store('uploads', 'public');
        }
        
        Universidad::insert($DatosUniversidad);
        return response()->json($DatosUniversidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function show(Universidad $universidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Universidad $universidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universidad $universidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universidad $universidad)
    {
        //
    }
}
