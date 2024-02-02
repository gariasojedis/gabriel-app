<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $cedula
 * @property string $nombres
 * @property string $fecha_nacimiento
 * @property Paralelo[] $paralelos
 */
class Estudiante extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'estudiante';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'cedula', 'nombres', 'fecha_nacimiento'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paralelos()
    {
        return $this->hasMany('App\Models\Paralelo');
    }
}
