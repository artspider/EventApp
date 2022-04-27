<?php

namespace App\Http\Livewire\Presentacion;

use Livewire\Component;
use App\Models\Presentation;
use App\Models\Itialumn;
use App\Models\Event;
use Livewire\WithPagination;

class Checkin extends Component
{
    use WithPagination;
    protected $queryString = ['search' => ['except' => '']];

    public $presentacion;
    public $event;
    public $search;
    public $ids;

    public function mount($id){
        $this->presentacion = Presentation::find($id);
        $this->event = Event::find(1);
    }

    public function render()
    {
        
        return view('livewire.presentacion.checkin',[
            'event' => $this->event->id,
            'presentacion' => $this->presentacion,
            'alumnos' => $this->event->itialumns()
            ->where('numcontrol', 'LIKE', "%{$this->search}%")
            ->paginate(5),
            'checkalumnos' => $this->presentacion->itialumns()
           
        ])
        ->layout('components.master');
    }

    public function clear()
    {
        $this->search = null;
    }

    public function checkin($id){
        $this->presentacion->itialumns()->attach($id, ['pre-registro' => true, 'checkin' => true]);
    }
}
