<?php

namespace App\Http\Controllers;


use App\Models\Obra;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ObraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Categoria;
use App\Models\Imagene;
use Illuminate\Support\Facades\Storage;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $obras = Obra::paginate();

       

        return view('obra.index', compact('obras'))
            ->with('i', ($request->input('page', 1) - 1) * $obras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $obra = new Obra();
        $categorias = Categoria::pluck('nombre','id');

        return view('obra.create', compact('obra','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObraRequest $request): RedirectResponse
    {
        
        $datos = $request->validated();

        // Procesar las imágenes
        if ($request->hasFile('imagen_urls')) {
            $imagenes = [];
            foreach ($request->file('imagen_urls') as $imagen) {
                // Almacenar cada imagen y agregar la ruta a la lista
                $imagenes[] = $imagen->store('uploads', 'public');
            }
            // Almacenar las rutas de las imágenes en los datos
            $datos['imagen_urls'] = json_encode($imagenes); 
        }

        // Crear la nueva obra
        Obra::create($datos);

        return redirect()->route('obras.index')
            ->with('success', 'Obra creada exitosamente');

        
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $obra = Obra::find($id);
        $img = Imagene::where('obra_id',$id)->get();
        
        $cat_name = Categoria::where('id',$obra->categoria_id)->first();

        return view('obra.show', compact('obra','img','cat_name'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $obra = Obra::find($id);
        $categorias = Categoria::pluck('nombre','id');

        return view('obra.edit', compact('obra','categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
  

        
     public function update(ObraRequest $request, Obra $obra): RedirectResponse
     {
         // Obtener los datos validados
        $datos = $request->validated();

        if ($request->hasFile('imagen_urls')) {
            // Verificar si hay una imagen existente y eliminarla
            if ($obra->imagen_urls) {
                Storage::delete('public/' . $obra->imagen_urls);
            }
            // Almacenar la nueva imagen
            $datos['imagen_urls'] = $request->file('imagen_urls')->store('uploads', 'public');
        }

        // Actualizar la obra
        $obra->update($datos);

        return redirect()->route('obras.index')
            ->with('success', 'Obra updated successfully');


        
        //     $datos = $request->validated();

        // // Procesar las imágenes
        // if ($request->hasFile('imagen_urls')) {
        //     $imagenes = [];
        //     foreach ($request->file('imagen_urls') as $imagen) {
        //         // Almacenar cada imagen y agregar la ruta a la lista
        //         $imagenes[] = $imagen->store('uploads', 'public');
        //     }
        //     // Almacenar las rutas de las imágenes en los datos
        //     $datos['imagen_urls'] = json_encode($imagenes); // Almacenamos como JSON o puedes usar otro método
        // }

        // // Crear la nueva obra
        // Obra::create($datos);

        // return redirect()->route('obras.index')
        //     ->with('success', 'Obra created successfully');



        
     }
     
        //      $guardar = $request->validated();


        // if ($request->hasFile('imagen_urls')) {
        //     // Almacenar la imagen en el directorio 'uploads' y obtener la ruta
        //     $guardar['imagen_urls'] = $request->file('imagen_urls')->store('uploads', 'public');
        // }

        // // Crear el registro en la base de datos
        // Obra::create($guardar);

        // return Redirect::route('obras.index')
        //     ->with('success', 'Obra created successfully.');

        
    

    public function destroy($id): RedirectResponse
    {
        Obra::find($id)->delete();

        return Redirect::route('obras.index')
            ->with('success', 'Obra deleted successfully');
    }
}
