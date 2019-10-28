<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_alumno_por_apoderado
 * @property int $id_apoderado
 * @property int $id_alumno
 * @property int $anio
 * @property int $semestre
 * @property Apoderado $apoderado
 * @property Alumno $alumno
 */
class AlumnoPorApoderado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'alumno_por_apoderado';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_alumno_por_apoderado';

    /**
     * @var array
     */
    protected $fillable = ['id_apoderado', 'id_alumno', 'anio', 'semestre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apoderado()
    {
        return $this->belongsTo('App\Apoderado', 'id_apoderado', 'id_apoderado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumno()
    {
        return $this->belongsTo('App\Alumno', 'id_alumno', 'id_alumno');
    }
}
