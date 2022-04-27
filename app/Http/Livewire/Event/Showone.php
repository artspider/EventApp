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

class Showone extends Component
{
    use WithPagination, WithFileUploads;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $presentaciones;
    public $panelistas;
    public $recibo;

    protected $listeners = [
        'upload' => 'uploadRecibo',
        'deletePanelista' => 'remove'
    ];

    public function uploadRecibo($alumno_id)
    {
        dd([$alumno_id]);
    }

    public function mount($id) 
    {
        $this->event = Event::find($id);
    }
    public function render()
    {
        return view('livewire.event.showone', [
            'event' => $this->event,
            'alumnos' => $this->event->itialumns()
            ->where('numcontrol', 'LIKE', "%{$this->search}%")
            ->paginate(5)
            ])
        ->layout('components.master');
    }

    /* public function updatedRecibo($key){
        dd([$key]);
        $this->validate([
            'recibo' => 'image|max:3096', 
        ]);

        $url_foto = $this->recibo->store('recibos', 'public');
            $image = new Imagen();
            $image->ruta = str_replace("public","storage", $url_foto); 
            $image->service_id = $oldService->id;
            $image->save();

        $this->photo->store('photos');
    } */

    public function clear($id)
    {
        $this->search = null;
    }

    
}
