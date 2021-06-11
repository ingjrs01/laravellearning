<form action="/guardar" method="POST">
  
  <div class="form-group row">
    <label for="inputvehiculo" class="col-sm-2 col-form-label">Vehiculo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputvehiculo" placeholder="Auto o Camioneta">
    </div>
  </div>
  

  <div class="form-group row">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="airbags" type="checkbox" id="lbl_airbags">
        <label class="col-sm-2 form-check-label" for="lbl_airbags">
          Airbags
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar </button>
    </div>
  </div>
</form>
