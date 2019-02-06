<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $term = null;
        $search = '';
        return view('pages.search', compact('term', 'search'));
    }

    public function show()
    {
        $term = \request()->all();
        $term = $term['q'];
        $products = new \App\Ph_products;
        $search = $products->where('tag', 'like', '%'.$term.'%')->get();
        return view('pages.search', compact('search', 'term'));
    }
}
