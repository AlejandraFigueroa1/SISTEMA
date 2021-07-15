<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materium
 *
 * @property $id
 * @property $creditos
 * @property $nombre_materia
 * @property $profesor
 * @property $Turno
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materium extends Model
{
    
    static $rules = [
		'creditos' => 'required',
		'nombre_materia' => 'required',
		'Turno' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['creditos','nombre_materia','profesor','Turno','disponible'];



}
