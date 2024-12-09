



<div class="row padding-1 p-1">
    <div class="col-md-12">
        

        <div class="form-group mb-2 mb20">
            <label for="categoria_id" class="form-label">{{ __('Categoría') }}</label>
            <select name="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror" id="categoria_id">
                <option value="" disabled selected>Seleccione una categoría</option> 
                @foreach ($categorias as $id => $nombre)
                    <option value="{{ $id }}" {{ old('categoria_id', $obra->categoria_id) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $obra?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $obra?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $obra?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
       <div class="form-group mb-2 mb20">
        <label for="imagen_urls" class="form-label">{{ __('Imagen Urls') }}</label>
        <input type="file" name="imagen_urls[]" class="form-control @error('imagen_urls') is-invalid @enderror" id="imagen_urls" placeholder="Imagen Urls" multiple> 
        {!! $errors->first('imagen_urls', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div> 






