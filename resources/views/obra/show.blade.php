@extends('layouts.app')

@section('template_title')
    {{ $obra->name ?? __('Show') . ' ' . __('Obra') }}
@endsection

<link rel="stylesheet" href="{{ asset('css/sty.css') }}">




<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



@section('content')
    <section class="content container-fluid" style="width: 80%">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Obra {{ $cat_name->id }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('obras.index') }}"> {{ __('volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Categoria :</strong>
                            {{ $cat_name->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Titulo:</strong>
                            {{ $obra->titulo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $obra->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $obra->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="images">


        @if (count($img) == 0)
            <p>no tienes fotos asociadas</p>
        @else
            @foreach ($img as $item)
                {{-- <img src="{{asset('storage').'/'.$item->imagen_urls}}"  alt=""> --}}


                <div class="product object-cover">



                    <div class="list">
                        <div class="product-thumb">
                            <div class="thumbnail">
                                <div>
                                    <div class="image">
                                        <img src="{{ asset('storage') . '/' . $item->imagen_urls }}" alt="">

                                    </div>

                                    <div class="image hove-image">
                                        <img src="{{ asset('storage') . '/' . $item->imagen_urls }}" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="icons-act">
                                <ul>
                                    <li><a href="#">
                                            <i class="fa-solid fa-trash"></i>
                                        </a></li>

                                </ul>
                            </div>
                        </div>

                    </div>




                </div>
            @endforeach
        @endif




    </div>



@endsection
