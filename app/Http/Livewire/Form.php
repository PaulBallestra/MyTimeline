<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Post;

class Form extends Component
{

    public $body;

    //Fonction createPost avec livewire
    public function createPost()
    {
        $this->validate(['body' => 'required|min:15']);
        $post = auth()->user()->posts()->create(['body' => $this->body]);

        $this->emit('postAdded', $post->id); //emit de l'event

        $this->body = ""; //vidage du body

    }

    public function render()
    {
        return view('livewire.form', ['user' => auth()->user()]);
    }
}
