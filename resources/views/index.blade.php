@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-header">Proveedores</div>

    <div class="card-body">
        
    </div>
    <a href="/proveedores" class="btn btn-primary">Ir</a>
</div>
<div class="card" style="width: 18rem;">
    <div class="card-header">Ventas</div>

    <div class="card-body">
       <p>Imagen</p>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop