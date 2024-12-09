<?php

namespace App\Http\Controllers;

use App\Models\Imagene;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ImageneRequest;
use App\Models\Obra;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ImageneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $imagenes = Imagene::paginate();

        return view('imagene.index', compact('imagenes'))
            ->with('i', ($request->input('page', 1) - 1) * $imagenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $imagene = new Imagene();
        $imagenes = Obra::pluck('titulo','id');


        return view('imagene.create', compact('imagene','imagenes'));
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(ImageneRequest $request): RedirectResponse
    {

        $guardar = $request->validated();


        if ($request->hasFile('imagen_urls')) {
            $guardar['imagen_urls'] = $request->file('imagen_urls')->store('uploads', 'public');
        }

        Imagene::create($guardar);

        return Redirect::route('imagenes.index')
            ->with('success', 'Imagen creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $imagene = Imagene::find($id);

        return view('imagene.show', compact('imagene'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $imagene = Imagene::find($id);

        return view('imagene.edit', compact('imagene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImageneRequest $request, Imagene $imagene): RedirectResponse
    {
        $imagene->update($request->validated());

        return Redirect::route('imagenes.index')
            ->with('success', 'Imagene updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Imagene::find($id)->delete();

        return Redirect::route('imagenes.index')
            ->with('success', 'Imagene deleted successfully');
    }
}
