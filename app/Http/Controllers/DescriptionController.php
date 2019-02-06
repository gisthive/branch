<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index(request $id)
    {
        $products = new \App\Ph_products;
        $description = $products->where('id', '==', $id)->get();
        return view('pages.description', compact('description'));
    }
}
