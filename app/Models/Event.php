<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'presentaciones',
        'min_certificar',
        'precio',
        'fecha_inicio',
        'fecha_cierre',
        'asistencia',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'presentaciones' => 'integer',
        'min_certificar' => 'integer',
        'precio' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function presentations()
    {
        return $this->hasMany(Presentation::class);
    }

    public function itialumns()
    {
        return $this->belongsToMany(Itialumn::class)
        ->withPivot('presentaciones', 'recibo', 'verificado', 'espectativas');
    }
}
