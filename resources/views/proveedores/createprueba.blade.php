<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('proveedores.store')}}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-4">
              <label for="cuit_proveedor" class="form-label">CUIT:</label>
            </div>
            <div class="col-8">
              <input type="text" class="form-control" id="cuit_proveedor" name="cuit_proveedor">
            </div> 
          </div>
          <div class="row form-group">
            <div class="col-4">
              <label for="razonSocial_proveedor" class="form-label">Razon Social:</label>
            </div>
            <div class="col-8">
              <input type="text" class="form-control" id="razonSocial_proveedor" name="razonSocial_proveedor">
            </div> 
          </div>
          <div class="row form-group">
            <div class="col-4">
              <label for="nombreFantasia_proveedor" class="form-label">Nombre Fantasia:</label>
            </div>
            <div class="col-8">
              <input type="text" class="form-control" id="nombreFantasia_proveedor" name="nombreFantasia_proveedor">
            </div> 
          </div>

          <div class="row form-group">
            <div class="col-4">
              <label for="domicilio_proveedor" class="form-label">Domicilio:</label>
            </div>
            <div class="col-8">
              <input type="text" class="form-control" id="domicilio_proveedor" name="domicilio_proveedor">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-4">
              <label for="telefono_proveedor" class="form-label">Telefono:</label>
            </div>
            <div class="col-8">
              <input type="text" class="form-control" id="telefono_proveedor" name="telefono_proveedor">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
  
</div>