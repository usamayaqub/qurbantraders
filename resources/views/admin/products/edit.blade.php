@extends('admin.layouts.app')
@isset($type)
    @section('title', 'Edit Product')
@else
    @section('title', 'Add Product')
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
                <h4 class="mb-sm-0 font-size-18">Edit Product</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Product</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Products</li>
                        @isset($type)
                        <li class="breadcrumb-item active">Edit Product</li>
                        @else
                        <li class="breadcrumb-item active">Add New Product</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($type)
    <form action="{{ route('update.product', $type->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.product')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">

            <div class="form-group col-sm-7 mb-2">
                    <label for="">Select Category<span class="text-danger">*</span></label>
                    <select class="input-group" name="category">
                        @if(!empty($categories))
                        @foreach($categories as $c)
                        <option value="{{$c->id}}" @isset($type) @if($type->cat_id == $c->id) selected @endif @endisset>{{$c->name}}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('category')
                    <span class="invalid-feedback mt-0" @error('category')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> 

                <div class="form-group col-sm-7 mb-2">
                    <label for="">Name<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="name" @isset($type)value="{{$type->name}}" @endisset placeholder="Enter name">
                    </div>
                    @error('name')
                    <span class="invalid-feedback mt-0" @error('name')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> 
                
                <div class="form-group col-sm-7 mb-2">
                    <label for="">Price<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="price" @isset($type)value="{{$type->price}}" @endisset placeholder="Enter price">
                    </div>
                    @error('price')
                    <span class="invalid-feedback mt-0" @error('price')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  

                <div class="form-group col-sm-7 mb-2">
                    <label for="">Discounted Price<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="discounted_price" @isset($type)value="{{$type->discounted_price}}" @endisset placeholder="Enter discounted price">
                    </div>
                    @error('discounted_price')
                    <span class="invalid-feedback mt-0" @error('discounted_price')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> 

                <div class="form-group col-sm-7 mb-2">
                    <label for="">Short Description<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="short_description" @isset($type)value="{{$type->short_description}}" @endisset placeholder="Enter short description">
                    </div>
                    @error('short_description')
                    <span class="invalid-feedback mt-0" @error('short_description')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  

                <div class="form-group col-sm-7 mb-2">
                    <label for="">Description<span class="text-danger">*</span></label>
                    <div class="">
                        <textarea  name="description" class="form-control" id="description" rows="20">{!! isset($type) ? $type->description : '' !!}
                        </textarea>
                    </div>
                    @error('content')
                    <span class="invalid-feedback mt-0" @error('description')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-7 mb-2">
                <label for="">Image<span class="text-danger">*</span></label>
                <div class="input-group">
                <input type="file" class="form-control all_imgs_" accept="image/*" name="image[]" id="banner-input">
                </div>
                </div>
                @error('image')
                <span class="invalid-feedback mt-0" @error('image')style="display: block" @enderror role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                @if(isset($type) && !empty($type->images))
                @foreach($type->images as $image)
                <div class="image-container">
                    <img src="{{$image->url}}" alt="Image" width="100px" height="70px">
                    <div data-type="image" data-image-id="{{$image->id}}">
                    </div>
                </div>
                @endforeach
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


<script src="{{asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

<script>
tinymce.init({
  selector: 'textarea#description',
  plugins: [
    "code advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table paste"
  ],
  toolbar: "code insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

  setup: function (editor) {
    editor.ui.registry.addButton('image', {
      icon: 'image',
      onAction: function () {
        openImagePickerDialog(editor);
      }
    });

    editor.on('init', function () {
      var existingData = `{!! isset($type) ? $type->description : '' !!}`;
      editor.setContent(existingData);
    });
  },
  file_picker_types: 'image',
  file_picker_callback: function (callback, value, meta) {
    if (meta.filetype === 'image') {
      openImagePickerDialog(callback);
    }
  }
});

</script>

<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

@endsection