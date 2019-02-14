<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index($id)
    {
        $products = new \App\Ph_products;
        $description = $products->where('id', 'like', $id)->get();
        $categories = "";
        $name = "";
        $desc = "";
        $image = "";
        foreach($description as $category){
            $categories .= $category['category'];
            $name .= $category['name'];
            $desc .= $category['description'];
            $image .= $category['images'];
        }
       
        $category = $products->where('category', 'like', $categories)->get();
        return view('pages.description', compact('description', 'category', 'name', 'desc', 'image'));
    }
}
