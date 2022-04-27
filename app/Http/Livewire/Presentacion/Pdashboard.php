<?php

namespace App\Http\Livewire\Presentacion;

use Livewire\Component;
use App\Models\Presentation;

class Pdashboard extends Component
{
    public function render()
    {
        return view('livewire.presentacion.pdashboard',[
            'presentaciones' => Presentation::all()
        ])
        ->layout('components.master');
    }
}
