@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content')

  <div class="container">
    <h1>Proveedores</h1>

    @if ($errors->any())
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
         
      </div>        
    @endif
   <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Nuevo Proveedor
    </button>
  
 
    <div class="card">
      <div class="card-body">
        <table class="table table-striped table-hover" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>CUIT</th>
              <th>Razon Social</th>
              <th>Nombre Fantasia</th>
              <th>Codigo Postal</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proveedores as $proveedor)
              <tr>
                <td>{{$proveedor->id}}</td>
                <td>{{$proveedor->cuit_proveedor}}</td>
                <td>{{$proveedor->razonSocial_proveedor}}</td>
                <td>{{$proveedor->nombreFantasia_proveedor}}</td>
                <td>{{$proveedor->codigoPostal_proveedor}}</td>
                <td>{{$proveedor->direccion_proveedor}}</td>
                <td>{{$proveedor->telefono_proveedor}}</td>
                <td>
                  <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type='submit' class="btn btn-danger">Eliminar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>     
      </div>
    </div> 
   @include('proveedores.createprueba')
</div>     
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
@stop

@section('js')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script> 
    $('#example').DataTable({
      responsive: true,
      autoWidth: false
    });
  </script>
  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
  <script>
    const config = {
      search: true, // Toggle search feature. Default: false
      creatable: false, // Creatable selection. Default: false
      clearable: false, // Clearable selection. Default: false
      maxHeight: '360px', // Max height for showing scrollbar. Default: 360px
      size: '', // Can be "sm" or "lg". Default ''
    }
    dselect(document.querySelector('#pais_proveedor'), config)
    dselect(document.querySelector('#provincia_proveedor'), config)
    dselect(document.querySelector('#localidad_proveedor'), config)
  </script>
  <script type="text/javascript">
     $(document).ready(function () {
                $('#pais_proveedor').on('change', function () {
                let id = $(this).val();
                console.log(id);
                $('#provincia_proveedor').empty();
                $('#provincia_proveedor').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'getStates/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#provincia_proveedor').empty();
                $('#provincia_proveedor').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#provincia_proveedor').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
               
        });
    });
</script>
 
@stop