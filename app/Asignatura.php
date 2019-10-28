<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_asignatura
 * @property string $nombre
 * @property Actividad[] $actividads
 * @property AsignaturaPorCurso[] $asignaturaPorCursos
 * @property ImpartirAsignatura[] $impartirAsignaturas
 * @property Material[] $materials
 * @property Nota[] $notas
 */
class Asignatura extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'asignatura';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_asignatura';

    /**
     * @var array
     */
    protected $fillable = ['nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividads()
    {
        return $this->hasMany('App\Actividad', 'id_asignatura', 'id_asignatura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignaturaPorCursos()
    {
        return $this->hasMany('App\AsignaturaPorCurso', 'id_asignatura', 'id_asignatura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impartirAsignaturas()
    {
        return $this->hasMany('App\ImpartirAsignatura', 'id_asignatura', 'id_asignatura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materials()
    {
        return $this->hasMany('App\Material', 'id_asignatura', 'id_asignatura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany('App\Nota', 'id_asignatura', 'id_asignatura');
    }
}
