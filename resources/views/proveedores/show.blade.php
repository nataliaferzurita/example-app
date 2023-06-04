<div class="modal fade" id="showModal{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$proveedor->razonSocial_proveedor}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6"><label for="cuit_proveedor">CUIT:</label></div>
          <div class="col-6"><label for="cuit" id="cuit">{{$proveedor->cuit_proveedor}}</label></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="razonSocial_proveedor">Razón Social:</label></div>
          <div class="col-6"><label for="razonSocial">{{$proveedor->razonSocial_proveedor}}</label></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="nombreFantasia_proveedor">Nombre Fantasía:</label></div>
          <div class="col-6"><label for="nombreFantasia">{{$proveedor->nombreFantasia_proveedor}}</label></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="codigoPostal_proveedor">Codigo Postal:</label></div>
          <div class="col-6"><label for="codigoPostal">{{$proveedor->codigoPostal_proveedor}}</label></div>
        </div>
        
        <div class="row">
          <div class="col-6"><label for="direccion_proveedor">Direccion:</label></div>
          <div class="col-6"><label for="direccion">{{$proveedor->direccion_proveedor}}</label></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="telefono_proveedor">Telefono:</label></div>
          <div class="col-6"><label for="telefono">{{$proveedor->telefono_proveedor}}</label></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> 
    </div>
  </div>
</div>

