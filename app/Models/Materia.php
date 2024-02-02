<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $curso_id
 * @property string $nombre
 * @property string $created_at
 * @property string $updated_at
 * @property Curso $curso
 */
class Materia extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'materia';

    /**
     * @var array
     */
    protected $fillable = ['curso_id', 'nombre', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }
}
