@extends('admin.layouts.app')
@isset($type)
    @section('title', 'Edit Category')
@else
    @section('title', 'Add Category')
@endisset
@section('content')
<style>
.image-container {
    position: relative;
    display: inline-block;
}

.delete-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s;
}

.image-container:hover .delete-icon {
    opacity: 1;
    cursor: pointer;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                @isset($type)
                <h4 class="mb-sm-0 font-size-18">Edit Category</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Category</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categorie</li>
                        @isset($type)
                        <li class="breadcrumb-item active">Edit Category</li>
                        @else
                        <li class="breadcrumb-item active">Add New Category</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($type)
    <form action="{{ route('update.category', $type->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.category')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">
                <div class="form-group col-sm-7 mb-2">
                    <label for="">Name<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="name" @isset($type)value="{{$type->name}}" @endisset placeholder="Enter Category Name">
                    </div>
                    @error('name')
                    <span class="invalid-feedback mt-0" @error('name')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  

                <div class="form-group col-sm-7 mb-2">
                <label for="">Image<span class="text-danger">*</span></label>
                <div class="input-group">
                <input type="file" class="form-control all_imgs_" accept="image/*" name="image" id="banner-input">
                </div>
                </div>
                @error('image')
                <span class="invalid-feedback mt-0" @error('image')style="display: block" @enderror role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                @if(isset($type) && !empty($type->image))
                <div class="image-container">
                    <img src="{{$type->image}}" alt="Image" width="100px" height="70px">
                </div>
                @endif
                
                <div class="form-group col-sm-6 mb-2 d-flex align-items-end">
                    <label for="switch4" data-on-label="Yes" data-off-label="No">
                        <label for="">Status: </label>
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                            <input class="form-check-input" name="status" type="checkbox" id="SwitchCheckSizelg" @if(isset($type) && $type->status == 1) checked="" @endif>
                        </div>
                    </label>
                </div>
                <div class="form-group col-sm-12 mb-2">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
            </div>
        </form>
</div>

<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
@endsection