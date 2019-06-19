<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index($name){
      //$name = 'Mono';
      $categories = \App\Category::paginate(1);
      return view('saludo')->withcategories($categories);
    }
}
