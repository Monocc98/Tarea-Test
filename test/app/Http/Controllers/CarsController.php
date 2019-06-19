<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Location;

class CarsController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      return view('cars.index')->with('categories',$categories);
    }

    public function create()
    {
      $categories = Category::all();
      return view('cars.create')->with('categories',$categories);
    }

    public function reservation()
    {
      $locations = Location::all();
      return view('cars.reservation')->with('locations',$locations);
    }

    public function categories()
    {
      $categories = Category::all();
      return view('cars.categories')->with('categories',$categories);
    }
}
