<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Itialumn;

class UploadRecibo extends Component
{
    public Itialumn $alumno;
    

    public function render($alumno)
    {
        return view('livewire.event.upload-recibo')
        ->layout('components.master');
    }
}
