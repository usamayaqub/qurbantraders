<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::where('status',1)->get();
        return view('home',compact('categories'));
    }
    public function about()
    {
        return view('about');
    }
    public function teams()
    {
        return view('teams');
    }
    public function allProducts()
    {
        return view('products.index');
    }
    public function productsDetail()
    {
        return view('products.detail');
    }
    public function contact()
    {
        return view('contact');
    }
    public function productSearch()
    {
        return view('search-result');
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }  
    
      
    
}
