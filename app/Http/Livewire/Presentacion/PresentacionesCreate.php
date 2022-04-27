<?php

namespace App\Http\Livewire\Presentacion;

use Livewire\Component;
use App\Models\Presentator;
use App\Models\Event;
use App\Models\Presentation;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PresentacionesCreate extends Component
{

    public $nombre;
    public $descripcion;
    public $duracion;
    public $fecha;
    public $hora;
    public $asistencia;
    public $calificacion;
    public $presentador_id;
    public $evnto_id;
    public $presentadores;
    public $selectedPresentador;
    public $eventos;
    public $selectedEvento;
    public $presentador;
    public $evento;

    public function mount()
    {
        $this->presentadores = Presentator::all();
        $this->eventos = Event::all();
    }

    public function render()
    {
        return view('livewire.presentacion.presentaciones-create',[
            'eventos' => $this->eventos,
            'presentadores' => $this->presentadores
        ])
        ->layout('components.master');
    }

    public function updatedselectedPresentador($value)
    {
        $this->presentador = $value;
    }

    public function updatedselectedEvento($value)
    {
        $this->evento = $value;
    }

    public function save()
    {
        $validated = $this->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'duracion' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'presentador' => 'required',
            'evento' => 'required'
        ]);

        $presentacion = Presentation::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'duracion' => $this->duracion,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'presentator_id' => $this->presentador,
            'event_id' => $this->evento
        ]);
        if($presentacion) {
            $this->emit('success', 'Se ha creado un nuevo producto');
        }else{
            $this->emit('error', 'Algo salio mal, intentalo de nuevo');
        }
        $this->clearValues();
    }

    public function clearValues()
    {
        $this->nombre = null;
        $this->descripcion = null;
        $this->duracion = null;
        $this->fecha = null;
        $this->hora = null;
        $this->presentador = null;
        $this->evento = null;
    }
}
