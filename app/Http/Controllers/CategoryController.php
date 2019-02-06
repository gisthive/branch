<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ph_products;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $products = new Ph_products;
        $category = $products->where('category', 'like', $name)->get();
        return view('pages.category', compact('category', 'name'));
     }
}
