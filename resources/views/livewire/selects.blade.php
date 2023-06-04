<div class="container fluid">
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
          <label for="pais_proveedor" class="form-label">País:</label>
        </div>
        <div class="col-8">
          <select class="form-control" wire:model="selected_country" wire:change="getStates()" aria-label="Default select example" name="pais_proveedor" id="pais_proveedor">
            <option selected>Open this select menu</option>
            @foreach ($countries as $country)
              <option value={{$country['country_name']}}>{{$country['country_name']}}</option>
            @endforeach
          </select>
        </div> 
    </div>
    @if (!is_null($selected_country))
        <div class="row form-group">
            <div class="col-4">
                <label for="provincia_proveedor" class="form-label">Provincia:</label>
            </div>
            <div class="col-8">
                <select class="form-select" wire:model="selected_state" wire:change="getCities()" aria-label="Default select example" name="provincia_proveedor" id="provincia_proveedor">
                    <option selected>Open this select menu</option>
                    @foreach ($states as $state)
                    <option value={{$state['state_name']}}>{{$state['state_name']}}</option>
                  @endforeach
                </select>
            </div> 
        </div>
        
    @endif
    @if (!is_null($selected_state))
        <div class="row form-group">
            <div class="col-4">
                <label for="ciudad_proveedor" class="form-label">Ciudad:</label>
            </div>
            <div class="col-8">
                <select class="form-select" aria-label="Default select example" name="cuidad_proveedor" id="cuidad_proveedor">
                    <option selected>Open this select menu</option>
                    @foreach ($cities as $city)
                    <option value={{$city['city_name']}}>{{$city['city_name']}}</option>
                  @endforeach
                </select>
            </div> 
        </div>
        
    @endif
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
    

