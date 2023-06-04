<?php

namespace App\Http\Controllers\Proveedor;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire;




class ProveedorController extends Controller
{
    public $countries, $token,$states=NULL,$cities=NULL,$selected_country=NULL,$selected_state=NULL;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $proveedores=Proveedor::all();
        return view("proveedores.index",compact('proveedores'));
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

        $table=new Proveedor();
        $table->cuit_proveedor=$request->input('cuit_proveedor');
        $table->razonSocial_proveedor=strtoupper($request->input('razonSocial_proveedor'));
        $table->nombreFantasia_proveedor=strtoupper($request->input('nombreFantasia_proveedor'));
        $table->codigoPostal_proveedor=$request->input('codigoPostal_proveedor', '4400');
        $table->direccion_proveedor=strtoupper($request->input('domicilio_proveedor'));
        $table->telefono_proveedor=$request->input('telefono_proveedor');
        $table->_token=$request['_token'];
        $table->visible_proveedor=true;
        $table->save();

        /*Generated Token : CfNNPNDSr4RK6Y-dyfhlBadJ7FVjGK-_nG3kDxOTbOM8Uq7V3UNybw-HuC9hNvwIQ-g*/ 
        $proveedores=Proveedor::all();
        $proveedores->where('visible_proveedor',true);
        return redirect()->route('proveedores.index',compact('proveedores'));
        
    }
        
    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        
        //
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
    public function update(Request $request,Proveedor $proveedor)
    {
        $old=Proveedor::find(1);
        $old->cuit_proveedor= $old->cuit_proveedor;
        $old->razonSocial_proveedor=strtoupper($request->razonSocial_proveedor);
        $old->nombreFantasia_proveedor=strtoupper($request->nombreFantasia_proveedor);
        $old->codigoPostal_proveedor=$request->codigoPostal_proveedor;
        $old->direccion_proveedor=strtoupper($request->domicilio_proveedor);
        $old->telefono_proveedor=$request->telefono_proveedor;
        $old->_token=$request['_token'];
        $old->visible_proveedor=true;
        dd($proveedor->all());
        $proveedor->save();
    
        return redirect()->route('proveedores.index',compact('proveedores'));
        
        
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        echo "hola";
        echo $proveedor->visible_proveedor;

    }
}
