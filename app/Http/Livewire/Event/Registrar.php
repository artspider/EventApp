<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use App\Models\Presentator;
use App\Models\Presentation;
use App\Models\Itialumn;
use App\Models\Event_Itialumn;
use Carbon\carbon;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Registrar extends Component
{
    use WithPagination, WithFileUploads;

    protected $queryString = ['search' => ['except' => '']];

    public $event;
    public $search;
    public $recibo;
    public $id_evento;
    public $id_alumno;
    public $verificado;
    public $alumno_seleccionado;
    public $control_seleccionado;

    public function mount($id) 
    {
        $this->event = Event::find($id);
    }

    public function render()
    {
        
        return view('livewire.event.registrar',[
            'event' => $this->event,
            'alumnos' => Itialumn::where('numcontrol', 'LIKE', "%{$this->search}%")
            ->paginate(5)
        ])
        ->layout('components.master');
    }

    public function selectAlumno($alumno)
    {
        $this->alumno_seleccionado = $alumno['nombre'] . ' ' . $alumno['paterno'] . ' ' . $alumno['materno'];
        $this->control_seleccionado = $alumno['numcontrol'];
        $this->id_alumno=$alumno['id'];
    }

    public function clear()
    {
        $this->search = null;
    }

    public function updatedRecibo($value)
    {
        
    }

    public function registrar()
    {
        
        $this->validate([
            'recibo' => 'image', // 1MB Max
        ]);

        $url_foto = $this->recibo->store('recibos', 'public');        
        $ruta = str_replace("public","storage", $url_foto);

        $alumno = Itialumn::find($this->id_alumno);
        $alumno->events()->attach($this->event->id,['presentaciones'=>0, 'recibo'=>$ruta, 'verificado'=>$this->verificado, 'espectativas'=>'algunas']);
        $this->emit('success', 'Se ha registrado el alumno ');

        $this->search = null;
        $this->recibo = null;
        $this->id_alumno = null;
        $this->verificado = null;
        $this->alumno_seleccionado = null;
        $this->control_seleccionado = null;
    }
}
