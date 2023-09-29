<?php

namespace App\Http\Controllers;

use App\Http\Traits\FileUploadTrait;
use App\Mail\QueryMail;
use App\Models\Category;
use App\Models\ContactQuery;
use App\Models\Product;
use App\Models\ProductQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
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
            ->editColumn('image', function ($item) {
                if ($item->image) {
                    // Display the image using the <img> tag
                    return '<img src="' . $item->image . '" alt="Image" width="70px" height="60">';
                } else {
                    return 'No Image';
                }
            })
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
                ->rawColumns(['status', 'actions','image'])
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
        $data = Product::with('category','images')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
            ->addColumn('image', function ($data) {
                $firstImage = $data->images->first();
                // Check if there is a first image available
                if ($firstImage) {
                    // Display the image using the <img> tag
                    return '<img src="' . $firstImage->url . '" alt="Image" width="70px" height="60">';
                } else {
                    // If no image is available, you can display a placeholder or a message
                    return 'No Image';
                }
            })
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
                ->rawColumns(['status', 'actions', 'image'])
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

    public function contactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required',
            'title' => 'nullable|string|max:255',
            'message' => 'required|string',
            // 'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if(isset($request->product_id) && !empty($request->product_id)){
            $message = 'Inquiry submitted successfully';
            $product = Product::find($request->product_id);
            $subject = 'New Inquiry | Qurban Traders | You have received a new Product inquiry for ' . $product->name;
            ProductQuery::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'product_id' => $request->product_id,
                'message' => $request->message,
            ]);
    
            $data = [
                'is_contact' => 0,
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'title' => $product->name,
                'message' => $request->message,
            ];

        }else{
            $message = 'Message submitted successfully';
            $subject = 'New Contact Messgae | You have received a new contact message from ' . $request->name;
            ContactQuery::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'title' => $request->title,
                'message' => $request->message,
            ]);
    
            $data = [
                'is_contact' => 1,
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'title' => $request->title,
                'message' => $request->message,
            ];
        }

        Mail::to('info@qurban-traders.com')->cc('usamayaqub302@gmail.com')->bcc('danishkhurshid333@gmail.com')->send(new QueryMail($data,$subject));
        return redirect()->back()->with('success',$message);
    }

    public function indexContact(Request $request)
    {
        $data = ContactQuery::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->editColumn('created_at', function ($item) {
                    return Carbon::parse($item->created_at)->format('d-m-Y, h:i A');
                })
                ->addColumn('message', function ($item) {
                    $trimmedMessage = strlen($item->message) > 100 ? substr($item->message, 0, 100) . '...' : $item->message;
                    $showMoreButton = strlen($item->message) > 100 ? '<button class="btn btn-link show-more-btn" data-full-message="' . htmlspecialchars($item->message, ENT_QUOTES) . '">Show More</button>' : '';
                    return '<div class="message">' . $trimmedMessage . '</div>' . $showMoreButton;
                })
                ->rawColumns(['created_at','message'])
                ->make(true);
        }
        return view('admin.contact.index');
    }

    public function indexProductQuery(Request $request)
    {
        $data = ProductQuery::with('product')->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('product', function ($data)  {
                   return $data->product->name;
                })
                ->editColumn('created_at', function ($item) {
                    return Carbon::parse($item->created_at)->format('d-m-Y, h:i A');
                })
                ->addColumn('message', function ($item) {
                    $trimmedMessage = strlen($item->message) > 100 ? substr($item->message, 0, 100) . '...' : $item->message;
                    $showMoreButton = strlen($item->message) > 100 ? '<button class="btn btn-link show-more-btn" data-full-message="' . htmlspecialchars($item->message, ENT_QUOTES) . '">Show More</button>' : '';
                    return '<div class="message">' . $trimmedMessage . '</div>' . $showMoreButton;
                })
                ->rawColumns(['created_at','message','product'])
                ->make(true);
        }
        return view('admin.contact.product');
    }
}
