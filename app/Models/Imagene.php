<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagene
 *
 * @property $id
 * @property $obra_id
 * @property $imagen_urls
 * @property $created_at
 * @property $updated_at
 *
 * @property Obra $obra
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Imagene extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['obra_id', 'imagen_urls'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function obra()
    {
        return $this->belongsTo(\App\Models\Obra::class, 'obra_id', 'id');
    }
    
}
