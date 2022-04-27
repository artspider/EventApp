<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use Carbon\carbon;
use Livewire\WithPagination;

class Create extends Component
{
    use WithPagination;

    public $nombre;
    public $descripcion;
    public $presentaciones;
    public $min_certificar;
    public $precio;
    public $fecha_inicio;
    public $fecha_cierre;
    public $asistencia;
    public $status;

    protected $rules = [
        'nombre' => 'required|max:100',
        'descripcion' => 'required',
        'presentaciones' => 'required',
        'min_certificar' => 'required',
        'precio' => 'required',
        'fecha_inicio' => 'required',
        'fecha_cierre' => 'required',
    ];

    public function render()
    {
        return view('livewire.event.create')
        ->layout('components.master');
    }

    public function crear()
    {
        $this->status = 0;
        $this->asistencia = 0;
        
        $validatedData = $this->validate(); 

       
 
        $event = new Event();
        $event->nombre= $this->nombre;
        $event->descripcion= $this->descripcion;      
        $event->presentaciones= $this->presentaciones;
        $event->min_certificar= $this->min_certificar;
        $event->precio = $this->precio;
        $event->fecha_inicio = $this->fecha_inicio;
        $event->fecha_cierre = $this->fecha_cierre;
        $event->status = $this->status;
        $event->asistencia = $this->asistencia;

        $event->save();
        
    }
}
