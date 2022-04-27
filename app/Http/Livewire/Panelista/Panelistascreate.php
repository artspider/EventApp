<?php

namespace App\Http\Livewire\Panelista;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\Presentator;


class Panelistascreate extends Component
{

    public $nombre;
    public $universidad;
    public $carrera;
    public $trabajo_actual;
    public $especialidad;
    public $web;
    public $temas;
    public $telefono;
    public $email; 
    public $twitter;
    public $facebook;
    public $linkedin;
    public $foto;

    public function render()
    {
        return view('livewire.panelista.panelistascreate')
        ->layout('components.master');
    }

    public function save()
    {

        $validated = $this->validate([
            'nombre' => 'required|max:100',
            'universidad' => 'required|max:100',
            'carrera' => 'required',
            'trabajo_actual' => 'required',
            'especialidad' => 'required',
            'web' => 'max:50',
            'temas' => 'max:50',
            'telefono' => 'required',
            'email' => 'required|email:rfc,dns',
            'twitter' => 'max:50',
            'facebook' => 'max:50',
            'linkedin' => 'max:50',
        ]);

        $panelista = Presentator::create([
            'nombre' => $this->nombre,
            'universidad'=> $this->universidad,
            'carrera' => $this->carrera,
            'trabajo_actual' => $this->trabajo_actual,
            'especialidad' => $this->especialidad,
            'web' => $this->web,
            'temas' => $this->temas,
            'telefono' => $this->telefono,
            'email' => $this->email ,
            'twitter' => $this->twitter,
            'facebook' => $this->facebook,
            'linkedin' => $this->linkedin,
            'foto'=> $this->foto,
        ]);
        if($panelista) {
            $this->emit('success', 'Se ha creado un nuevo producto');
        }else{
            $this->emit('error', 'No Se ha creado un nuevo producto');
        }
        $this->clearValues();
    }

    public function clearValues()
    {
        $this->nombre='';
        $this->universidad='';
        $this->carrera='';
        $this->trabajo_actual='';
        $this->especialidad='';
        $this->web='';
        $this->temas='';
        $this->telefono='';
        $this->email='' ;
        $this->twitter='';
        $this->facebook='';
        $this->linkedin='';
        $this->foto='';
    }
}
