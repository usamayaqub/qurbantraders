<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        $baseQuery = Product::query()->with('images','category')->where('status',1);
        $rProducts = $baseQuery->latest()->get();
        $fProducts = $baseQuery->get();
        return view('home',compact('categories','fProducts','rProducts'));
    }
    public function about()
    {
        return view('about');
    }
    public function teams()
    {
        return view('teams');
    }
    public function allProducts(Request $request)
    {
        $baseQuery = Product::query()->with('images','category')->where('status',1);

        if ($request->has('search_text') && !empty($request->search_text)) {
            $searchText = $request->input('search_text');
            $baseQuery->where(function ($query) use ($searchText) {
                $query->where('name', 'LIKE', "%$searchText%")
                    ->orWhere('price', 'LIKE', "%$searchText%")
                    ->orWhere('description', 'LIKE', "%$searchText%")
                    ->orWhereHas('category', function ($query) use ($searchText) {
                        $query->where('name', 'LIKE', "%$searchText%");
                    });
            });
        }

        if ($request->has('category') && !empty($request->category)) {
           $baseQuery->whereHas('category', function ($query) use ($request) {
            $query->where('name',urldecode($request->category));
        });
        }

        $perPage = $request->has('per_page') ? $request->input('per_page') : 10; 
        $page = $request->has('page') ? $request->input('page') : 1; 
        $products = $baseQuery->latest()->paginate($perPage, ['*'], 'page', $page);
        return view('products.index',compact('products'));
    }
    public function productsDetail($slug)
    {
        $product = Product::where('slug',$slug)->with('images','category')->first();
        $similarProducts = Product::where('cat_id',$product->cat_id)->with('images','category')->get();
        return view('products.detail',compact('product','similarProducts'));
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
