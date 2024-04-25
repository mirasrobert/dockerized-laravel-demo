<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::with('user')->paginate(8);
        return view('welcome', compact('posts'));
    }
}
