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
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>        
    @endif
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Nuevo</button>
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

                    
</div> 
@include('proveedores.create')

    
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script> $('#example').DataTable({
    responsive: true,
    autoWidth: false
  });</script>
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
  }).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
  </script>

@stop