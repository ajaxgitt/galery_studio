<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Obra
 *
 * @property $id
 * @property $categoria_id
 * @property $titulo
 * @property $descripcion
 * @property $precio
 * @property $imagen_urls
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Obra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['categoria_id', 'titulo', 'descripcion', 'precio', 'imagen_urls'];

    


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id', 'id');
    }
    
}
