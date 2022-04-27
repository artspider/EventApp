<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itialumn extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numcontrol',
        'paterno',
        'materno',
        'nombre',
        'carrera',
        'semestre',
        'curp',
        'email',
        'foto',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'semestre' => 'integer',
    ];

    public function presentations()
    {
        return $this->belongsToMany(Presentation::class)
        ->withPivot('pre-registro', 'checkin', 'calificacion', 'resena');;;
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
