<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categories;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        $products = new \App\Ph_products;
        $featured = $products->where('type', 'like', 'Featured')->limit(4)->get();
        $popular = $products->where('type', 'like', 'Popular Products')->limit(4)->get();
        $tips = $products->where('type', 'like', 'Health Tip')->limit(4)->get();
        $sale = $products->limit(12)->get();
        $top = $products->where('type', 'like', 'Top Rates')->limit(12)->get();
        return view('pages.index', compact('featured', 'popular', 'tips', 'sale', 'top'));
    } 

    public function index()
    {
        return view('admin.pages.index');
    }

    public function category(){
        $cat = \App\Ph_categories::all();
        return view('admin.pages.category', compact('cat'));
    }

    public function storeCategory(request $request){
        
        $post = new Ph_categories;
           $post->image = "";  
           $post->name = request('name');

        //save it to the database
        $post->save();

        //redirect to homepage
        return redirect('/admin/category');
    }

    public function destroyCategory(){
        $id = request('id');
        $del = \App\Ph_categories::find($id);
        $del->delete();
        return redirect('/admin/category')->with('success','Information has been  deleted');
    }

    public function updateCategory()
    {
        $id = request('id');
        $passport= \App\Ph_categories::find($id);
        $passport->name = request('name');
        $passport->save();
        return redirect('/admin/category');
    }

    public function customer(){
        $customer = \App\Ph_customer::all();
        return view('admin.pages.customer', compact('customer'));
    }

    public function subcategory(){
        $cat = \App\Ph_sub_Categories::all();
        $main = \App\Ph_categories::all();
        return view('admin.pages.subcategory', compact('cat', 'main'));
    }

    public function storeSubcategory(request $request){
        
        $post = new \App\Ph_sub_categories;
           $post->image = '';
           $post->name = request('name');
           $post->oid = request('id');
        $post->save();
        return redirect('/admin/subcategory');
    }

    public function destroySubcategory(){
        $id = request('id');
        $del = \App\Ph_sub_categories::find($id);
        $del->delete();
        return redirect('/admin/subcategory')->with('success','Information has been  deleted');
    }

    public function updateSubcategory()
    {
        $id = request('id');
        $passport= \App\Ph_sub_categories::find($id);
        $passport->name = request('name');
        $passport->save();
        return redirect('/admin/subcategory');
    }

    public function products(){
        $cat = \App\Ph_categories::all();
        $prod = \App\Ph_products::all();
        return view('admin.pages.products', compact('cat', 'prod'));
    }

    public function storeProduct(request $request){
        
        $post = new \App\Ph_products;

        if($request->hasFile('file')){
            $uploadedFile = $request->file('file');
            $filename = time().$uploadedFile->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'files/'.$filename,
                $uploadedFile,
                $filename
            );

           $post->images = 'storage/files/'.$filename.'/'.$filename;
           $post->name = request('name');
           $post->slug = request('slug');
           $post->description = request('description');
           $post->regular_price = request('regular_price');
           $post->sale_price = request('sale_price');
           $post->stock_quantity = request('stock');
           $post->weight = request('weight');
           $post->category = request('category');
           $post->tag = request('tag');
           $post->type = request('type');
        } else {
            return redirect('/error');
        }

        //save it to the database
        $post->save();

        //redirect to homepage
        return redirect('/admin/products');
    }

    public function destroyProduct(){
        $id = request('id');
        $del = \App\Ph_products::find($id);
        $del->delete();
        return redirect('/admin/products')->with('success','Information has been  deleted');
    }

    public function orders(){
        $order = \App\Ph_orders::all();
        return view('admin.pages.orders', compact('order'));
    }

    public function faq(){
        $faq = \App\Ph_faq::all();
        return view('admin.pages.faq', compact('faq'));
    }

    public function destroyFaq(){
        $id = request('id');
        $del = \App\Ph_faq::find($id);
        $del->delete();
        return redirect('/admin/faq')->with('success','Information has been  deleted');
    }

    public function updateFaq()
    {
        $id = request('id');
        $passport= \App\Ph_faq::find($id);
        $passport->title = request('title');
        $passport->body = request('body');
        $passport->save();
        return redirect('/admin/faq');
    }

    public function storeFaq(request $request){
        $post = new \App\Ph_faq;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/admin/faq');
    }

    public function displayFaq(){
        $res_faq = \App\Ph_faq::all();
        return view('pages.faq', compact('res_faq'));
    }

  }   