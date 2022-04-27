<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use Carbon\carbon;

class Show extends Component
{
    public $nombre;
    public $descripcion;
    public $presentaciones;
    public $min_certificar;
    public $precio;
    public $fecha_inicio;
    public $fecha_cierre;
    public $asistencia;
    public $status;
    

    function mount() {
        
    }

    public function render()
    {
        return view('livewire.event.show', [ 'event' => Event::all()->sortByDesc('created_at')->take(1)->first() ])
        ->layout('components.master',['title' => 'Events']);
    }
}
