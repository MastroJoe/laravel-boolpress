<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(string $slug)
  {
    $category = Category::with('posts')->where('slug', '=', $slug)->first();

    return view('guests.posts.index')->with('posts', $category->posts);
  }
}
