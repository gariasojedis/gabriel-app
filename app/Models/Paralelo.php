<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $curso_id
 * @property integer $estudiante_id
 * @property string $nombre
 * @property string $estado
 * @property string $created_at
 * @property string $updated_at
 * @property Curso $curso
 * @property Estudiante $estudiante
 */
class Paralelo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'paralelo';

    /**
     * @var array
     */
    protected $fillable = ['curso_id', 'estudiante_id', 'nombre', 'estado', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudiante()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }
}
