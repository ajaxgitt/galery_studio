<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        {{-- <div class="form-group mb-2 mb20">
            <label for="obra_id" class="form-label">{{ __('Obra Id') }}</label>
            <input type="text" name="obra_id" class="form-control @error('obra_id') is-invalid @enderror" value="{{ old('obra_id', $imagene?->obra_id) }}" id="obra_id" placeholder="Obra Id">
            {!! $errors->first('obra_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

        <div class="form-group mb-2 mb20">
            <label for="obra_id" class="form-label">{{ __('imagenes') }}</label>
            <select name="obra_id" class="form-control @error('obra_id') is-invalid @enderror" id="obra_id">
                <option value="" disabled selected>Seleccione una obra</option> 
                @foreach ($imagenes as $id => $titulo)
                    <option value="{{ $id }}" {{ old('obra_id', $imagene->obra_id) == $id ? 'selected' : '' }}>
                        {{ $titulo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


        {{-- <div class="form-group mb-2 mb20">
            <label for="imagen_urls" class="form-label">{{ __('Imagen Urls') }}</label>
            <input type="text" name="imagen_urls" class="form-control @error('imagen_urls') is-invalid @enderror" value="{{ old('imagen_urls', $imagene?->imagen_urls) }}" id="imagen_urls" placeholder="Imagen Urls">
            {!! $errors->first('imagen_urls', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

        <div class="form-group mb-2 mb20">
            <label for="imagen_urls" class="form-label">{{ __('Imagen Urls') }}</label>
            <input type="file" name="imagen_urls" class="form-control @error('imagen_urls') is-invalid @enderror" id="imagen_urls" placeholder="Imagen Urls" multiple> 
            {!! $errors->first('imagen_urls', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>