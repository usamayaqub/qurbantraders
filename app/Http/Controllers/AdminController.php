<?php

namespace App\Http\Controllers;

use App\Http\Traits\FileUploadTrait;
use App\Models\Category;
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
}
