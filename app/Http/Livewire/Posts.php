<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{

    protected $listeners = ['postAdded']; //listeners des emits

    public $posts;

    public function postAdded($id){
        $this->posts->prepend(Post::find($id));

        session()->flash('status', 'Post created');
    }

    public function mount(){
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
