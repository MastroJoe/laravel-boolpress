<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show(string $slug) {
    $slug = Post::where('slug', '=', $slug)->first();

    return view('guests.posts.show', compact('post'));
  }
}
