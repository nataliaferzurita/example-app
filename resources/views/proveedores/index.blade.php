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

    <table class="table table-striped table-hover">
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
              <form action="{{route('proveedores.destroy',$proveedor)}}" method="POST">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Nuevo Proveedor</button>
    
    
  </div>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{url('proveedores')}}" method="post">
            @csrf
            <div class="row mb-3 mt-3">
              <label for="cuit_proveedor" class="col-4 col-form-label">CUIT:</label>
              <div class="col-8">
                <input type="text" class="form-control" id="cuit" name="cuit">
              </div> 
            </div>
            <div class="row mb-3 mt-3">
                <label for="razonSocial_proveedor" class="col-4 col-form-label">Razon Social:</label>
                <div class="col-8">
                  <input type="text" class="form-control" id="razonSocial" name="razonSocial">
                </div>
            </div>

          
          <div class="row mb-3 mt-3">
              <label for="nombreFantasia_proveedor" class="col-4 col-form-label">Nombre Fantasia:</label>
              <div class="col-8">
                <input type="text" class="form-control" id="nombreFantasia" name="nombreFantasia">
              </div>
          </div>
          <div class="row mb-3 mt-3">
              <label for="codigoPostal_proveedor" class="col-4 col-form-label">Codigo Postal:</label>
              <div class="col-8">
                <input type="text" class="form-control" id="codigoPostal" name="codigoPostal">
              </div>
          </div>
          <div class="row mb-3 mt-3">
              <label for="direccion_proveedor" class="col-4 col-form-label">Direccion:</label>
              <div class="col-8">
                <input type="text" class="form-control" id="direccion" name="direccion">
              </div>
              
          </div>
          <div class="row mb-3 mt-3">
              <label for="telefono_proveedor" class="col-4 col-form-label">Telefono:</label>
              <div class="col-8">
                <input type="text" class="form-control" id="telefono" name="telefono">
              </div>
              
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </form>
        </div>  
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
@endsection