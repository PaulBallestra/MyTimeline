<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    //création du post avec vérif de validation
    public function createPost(Request $request)
    {
        $request->validate(['body' => 'required|min:15']);

        auth()->user()->posts()->create(['body' => $request->body]);

        //return redirect(route('dashboard'));
    }
}
