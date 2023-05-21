<?php

namespace App\Http\Controllers\Proveedor;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;


class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores=Proveedor::all();
        return view("proveedores.index",['proveedores'=> $proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("proveedores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        //Proveedor::created($request->all());

        $request->validate(
            [
                'cuit_proveedor'=>'unique:proveedores|min:11|max:11'
                

            ]
            );

        $table=new Proveedor();
        $table->cuit_proveedor=$request->input('cuit', '27401137918');
        $table->razonSocial_proveedor=$request->input('razonSocial', 'Natalia Fernanda Zurita');
        $table->nombreFantasia_proveedor=$request->input('nombreFantasia', 'Natalia');
        $table->codigoPostal_proveedor=$request->input('codigoPostal', '4400');
        $table->direccion_proveedor=$request->input('direccion', 'Belgrano 498, Salta-Capital');
        $table->telefono_proveedor=$request->input('telefono', '3874199537');
        $table->_token=$request['_token'];
        $table->save();


        return dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedores.show',['proveedor'=>$proveedor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        return dd($proveedor);
    }
}
