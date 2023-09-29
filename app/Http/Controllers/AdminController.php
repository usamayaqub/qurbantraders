<?php

namespace App\Http\Controllers;

use App\Http\Traits\FileUploadTrait;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return view('admin.index');
    }

    public function allCategories(Request $request)
    {
        $data = Category::orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {
                    $actions = '<div class=" btn-group-sm" role="group" aria-label="Basic example">
                    <a  href="' . route('edit.category', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('admin.categories.index');

    }

    public function addCategory()
    {
        return view('admin.categories.edit');
    }

    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = new Category();
        $category->name = $request->name;
        $image = $this->uploadSingleFile($request->image);
        $category->image = $image;
        if (!empty($request->status) && $request->status == 'on') {
            $category->status = 1;
        } else {
            $category->status = 0;
        }
        $category->save();

        return redirect()->route('admin.categories')->with('success', 'Category added successfully.');
    }

    public function editCategory($id)
    {
        $type = Category::find($id);
        return view('admin.categories.edit', compact('type'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;

        if(!empty($request->image)){
            $image = $this->uploadSingleFile($request->image);
            $category->image = $image;
        }

        if (!empty($request->status) && $request->status == 'on') {
            $category->status = 1;
        } else {
            $category->status = 0;
        }

        $category->save();
        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
    }

    public function allProducts(Request $request)
    {
        $data = Product::with('category')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {
                    $actions = '<div class=" btn-group-sm" role="group" aria-label="Basic example">
                    <a  href="' . route('edit.product', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('admin.products.index');

    }

    public function addProduct()
    {
        $categories = Category::where('status',1)->get();
        return view('admin.products.edit',compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'discounted_price' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'image.*' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->cat_id = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        if (!empty($request->status) && $request->status == 'on') {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        $product->save();

        if(!empty($request->image)){
            $images = $this->uploadMultipleFiles($request->image);
            $images_arr = [];
            if (count($images) > 0) {
                foreach ($images as $key => $i) {
                    $images_arr[$key]['product_id'] = $product->id;
                    $images_arr[$key]['url'] = $i;
                }
            }
            $product->images()->insert($images_arr);
        }

        return redirect()->route('admin.products')->with('success', 'Product added successfully.');
    }

    public function editProduct($id)
    {
        $type = Product::find($id);
        $categories = Category::where('status',1)->get();
        return view('admin.products.edit', compact('type','categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->cat_id = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        if (!empty($request->status) && $request->status == 'on') {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        $product->save();

        if(!empty($request->image)){
            $product->images()->delete();
            $images = $this->uploadMultipleFiles($request->image);
            $images_arr = [];
            if (count($images) > 0) {
                foreach ($images as $key => $i) {
                    $images_arr[$key]['product_id'] = $product->id;
                    $images_arr[$key]['url'] = $i;
                }
            }
            $product->images()->insert($images_arr);
        }
        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }
}
