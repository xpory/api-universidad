<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    use HasFactory;

    protected $fillable = [
        'carrera_id',
        'plan_estudio_id',
        'materia_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];

    public function plan()
    {
        return $this->hasOne('App\Models\PlanEstudio', 'id');
    }

    public function materia()
    {
        return $this->hasMany('App\Models\Materia', 'id');
    }
}
