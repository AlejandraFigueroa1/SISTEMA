<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $carrera
 * @property $creditos
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{

    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'carrera' => 'required',
		'creditos' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','carrera','creditos','correo'];


    //Relación muchos a muchos

    public function materias(){
        return $this->belongsToMany('App\Models\Materium');
    }


}
