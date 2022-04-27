<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
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
        'duracion',
        'fecha',
        'hora',
        'asistencia',
        'calificacion',
        'presentator_id',
        'event_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'duracion' => 'integer',
        'calificacion' => 'integer',
        'presentator_id' => 'integer',
        'event_id' => 'integer',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function itialumns()
    {
        return $this->belongsToMany(Itialumn::class)
        ->withPivot('pre-registro', 'checkin', 'calificacion', 'resena');;
    }

    public function presentator()
    {
        return $this->belongsTo(Presentator::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
