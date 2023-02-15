<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;

use App\Models\Category;
use App\Models\Typology;
use App\Models\Product;

class MainController extends Controller
{

  public function home()
  {
    $categories = Category::all();

    return view('home', compact('categories'));
  }

  public function product()
  {
    $products = Product::all();

    return view('product', compact('products'));
  }
}