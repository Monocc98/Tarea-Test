<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class categoriescontroller extends Controller
{
    public function index()
    {
      $categories = Category::all();
      return view('categories.index')->with('categories',$categories);
    }
}
