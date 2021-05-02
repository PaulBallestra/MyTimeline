<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Request;

class Profile extends Component
{

    public $name, $email;

    public function updateProfile()
    {

        $this->validate(['name' => 'required|min:3']);
        $this->validate(['email' => 'required']);

        DB::table('users')->where('id', auth()->user()->id)->update(['name' => $this->name, 'email' => $this->email]);


        dd('ok');
    }

    public function render()
    {
        return view('livewire.profile', ['user' => auth()->user()]);
    }
}
