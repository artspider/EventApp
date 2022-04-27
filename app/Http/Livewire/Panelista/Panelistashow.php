<?php

namespace App\Http\Livewire\Panelista;

use Livewire\Component;
use App\Models\Presentator;
use Livewire\WithPagination;

class Panelistashow extends Component
{
    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;

    protected $listeners = [
        
        'deletePanelista' => 'remove'
    ];

    public function render()
    {
        return view('livewire.panelista.panelistashow',
            [
            'panelistas' => Presentator::where('nombre', 'LIKE', "%{$this->search}%")
            ->paginate(5)
            ]
        )
        ->layout('components.master');
    }

    public function clear()
    {
        $this->search = null;
    }

    public function remove(Presentator $presentator)
    {
        $presentator->delete();
        $this->emit('success', 'Se elimino el contacto');      
    }
}
