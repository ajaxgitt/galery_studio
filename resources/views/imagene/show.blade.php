@extends('layouts.app')

@section('template_title')
    {{ $imagene->name ?? __('Show') . " " . __('Imagene') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Imagene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('imagenes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Obra Id:</strong>
                                    {{ $imagene->obra_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Imagen Urls:</strong>
                                    {{ $imagene->imagen_urls }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
