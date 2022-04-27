<?php

namespace App\Http\Livewire\Firebase;

use Livewire\Component;
use Kreaiti\Firebase\Database;

class UsersGet extends Component
{
    public function render()
    {
        return view('livewire.firebase.users-get')
        ->layout('components.master');
    }
}
