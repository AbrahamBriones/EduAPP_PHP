<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_actividad
 * @property int $id_asignatura
 * @property string $titulo
 * @property string $tipo
 * @property string $fecha_inicio
 * @property string $fecha_final
 * @property string $descripcion
 * @property Asignatura $asignatura
 */
class Actividad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'actividad';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_actividad';

    /**
     * @var array
     */
    protected $fillable = ['id_asignatura', 'titulo', 'tipo', 'fecha_inicio', 'fecha_final', 'descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asignatura()
    {
        return $this->belongsTo('App\Asignatura', 'id_asignatura', 'id_asignatura');
    }
}
