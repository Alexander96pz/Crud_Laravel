<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_e['empleadosI']=Empleados::paginate(5);
        return view('empleados.index', $data_e);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datos_empleados= request()->all();
        $datos_empleados = request()->except('_token');
        if ($request->hasFile('foto')) {
            $datos_empleados['foto'] = $request->file('foto')->store('uploads','public');
        }
        Empleados::insert($datos_empleados);
        return redirect('empleados')->with('mensage','Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo "<script>console.log( '$id' );</script>";//imprimir en consola
        $datos_empleados=Empleados::findOrFail($id);
        return view('empleados.edit',compact('datos_empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos_empleados=$request->except(['_token','_method']);
        if ($request->hasFile('foto')) {
            $empleados=Empleados::findOrFail($id);
            Storage::delete('public/'.$empleados->foto);
            $datos_empleados['foto']=$request->file('foto')->store('uploads','public');
        }
        Empleados::where('id','=',$id)->update($datos_empleados);
        // $datos_empleados=Empleados::findOrFail($id);
        return view('empleados.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $empleados=Empleados::findOrFail($id);
        if(Storage::delete('public/'.$empleados->foto)){
            Empleados::destroy($id);
        }
        return redirect('empleados')->with('mensage','Delete successfully');


        //
    }
}
