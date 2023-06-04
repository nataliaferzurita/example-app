@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos Proveedor</h1>
@stop

@section('content')
<div class="card mr-3 ml-3">
  <div class="card-header">Nuevo Proveedor</div>

  <div class="card-body">
    <form action="{{route('proveedores.store')}}" method="POST">
      @csrf
      @livewire('selects')   
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
      
  </div>

</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
       
  $('.js-example-basic-single').select2();
 
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
@stop

