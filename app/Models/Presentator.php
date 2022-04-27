<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'universidad',
        'carrera',
        'trabajo_actual',
        'especialidad',
        'web',
        'temas',
        'telefono',
        'email',
        'twitter',
        'facebook',
        'linkedin',
        'foto',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function presentations()
    {
        return $this->hasMany(Presentation::class);
    }
}
