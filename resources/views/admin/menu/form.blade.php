    <div class="form-group row">
        <label for="nombre" class="col-lg-3 control-label requerido">Nombrel </label>
        <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control has-error" value="{{old('nombre')}}" />
        </div>
    </div>
    <div class="form-group row">
            <label for="url" class="col-lg-3 control-label requerido">Url </label>
            <div class="col-lg-8">
              <input type="text" name="url" id="url" class="form-control has-error" value="{{old('url')}}"  />
            </div>
    </div>
    <div class="form-group row">
            <label for="icono" class="col-lg-3 control-label">Icono </label>
            <div class="col-lg-8">
              <input type="text" name="icono" id="icono" class="form-control has-error" value="{{old('icono')}}"/>
            </div>
            <div class="col-lg-1">
            <span id="mostrar-icono" class="fa  {{old("icono")}}"></span>
            </div>
          
    </div>