@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Nuevo Proveedor</div>
        <div class="card-body">
                
        
            <form action="{{route('proveedores.store')}}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="cuit_proveedor" class="form-label">CUIT:</label>
                    <input type="text" class="form-control" id="cuit" name="cuit">
                </div>
                <div class="mb-3">
                    <label for="razonSocial_proveedor" class="form-label">Razon Social:</label>
                    <input type="text" class="form-control" id="razonSocial" name="razonSocial">
                </div>
                <div class="mb-3 mt-3">
                    <label for="nombreFantasia_proveedor" class="form-label">Nombre Fantasia:</label>
                    <input type="text" class="form-control" id="nombreFantasia" name="nombreFantasia">
                </div>
                <div class="mb-3">
                    <label for="codigoPostal_proveedor" class="form-label">Codigo Postal:</label>
                    <input type="text" class="form-control" id="codigoPostal" name="codigoPostal">
                </div>
                <div class="mb-3">
                    <label for="direccion_proveedor" class="form-label">Direccion:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="telefono_proveedor" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
    </div>  
</div>
@endsection