<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name, $email;

    public function updateProfile()
    {
        $this->validate(['name' => 'required|min:3']);
        $this->validate(['email' => 'required']);

        $user = auth()->user()->update(['name' => $this->name, 'email' => $this->email]);

        $this->emit('userUpdated', $user->id); //emit de l'event

    }

    public function render()
    {
        return view('livewire.profile', ['user' => auth()->user()]);
    }
}
