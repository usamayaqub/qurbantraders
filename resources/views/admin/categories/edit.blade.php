@extends('layouts.app')
@isset($type)
    @section('title', 'Edit Blog')
@else
    @section('title', 'Add Blog')
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
                <h4 class="mb-sm-0 font-size-18">Edit Blog</h4>
                @else
                <h4 class="mb-sm-0 font-size-18">Add New Blog</h4>
                @endisset
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
                        @isset($type)
                        <li class="breadcrumb-item active">Edit Blog</li>
                        @else
                        <li class="breadcrumb-item active">Add New Blog</li>
                        @endisset
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="card p-4 rounded cShadow container-fluid">
    @isset($type)
    <form action="{{ route('update.blog', $type->id) }}" method="post" enctype="multipart/form-data">
        @else
        <form action="{{route('insert.blog')}}" method="post" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="row">
                <div class="form-group col-sm-7 mb-2">
                    <label for="">Title<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" required class="form-control" name="title" @isset($type)value="{{$type->title}}" @endisset placeholder="Enter Title">
                    </div>
                    @error('title')
                    <span class="invalid-feedback mt-0" @error('title')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>  

                <div class="form-group col-sm-7 mb-2">
                    <label for="">Content<span class="text-danger">*</span></label>
                    <div class="">
                        <textarea  name="content" class="form-control" id="content" rows="20">{!! isset($type) ? $type->content : '' !!}
                        </textarea>
                    </div>
                    @error('content')
                    <span class="invalid-feedback mt-0" @error('content')style="display: block" @enderror role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-sm-7 mb-2">
                <label for="">Banner<span class="text-danger">*</span></label>
                <div class="input-group">
                <input type="file" class="form-control all_imgs_" accept="image/*" name="banner" id="banner-input">
                </div>
                </div>
                @error('banner')
                <span class="invalid-feedback mt-0" @error('banner')style="display: block" @enderror role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- @if(isset($type) && !empty($type->images))
                @foreach($type->images as $image)
                @if($image->type == 'banner')
                <div class="image-container">
                    <img src="{{$image->url}}" alt="Banner" width="100px" height="70px">
                    <div class="delete-icon" data-type="banner" data-image-id="{{$image->id}}">
                        <button type="button" class="delete-button">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                @endif
                @endforeach
                @endif


                <div class="form-group col-sm-7 mb-2">
                <label for="">Image<span class="text-danger">*</span></label>
                <div class="input-group">
                <input type="file" class="form-control all_imgs_" accept="image/*" name="image" id="image-input">
                </div>
                </div>
                @error('image')
                <span class="invalid-feedback mt-0" @error('image')style="display: block" @enderror role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror -->
                <!-- Show existing images -->

                @if(isset($type) && !empty($type->images))
                @foreach($type->images as $image)
                @if($image->type == 'image')
                <div class="image-container">
                    <img src="{{$image->url}}" alt="Image" width="100px" height="70px">
                    <div class="delete-icon" data-type="image" data-image-id="{{$image->id}}">
                        <button type="button" class="delete-button" value="{{$image->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                @endif
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

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/translations/en.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/ckfinder/ckfinder.js"></script> -->

<!-- <script>
    ClassicEditor
        .create(document.querySelector('#content'), {
            ckfinder: {
                uploadUrl: '/api/upload-image',
                options: {
                    resourceType: 'Images',
                    types: 'jpg,jpeg,png,gif,webp',
                    maxSize: '5M'
                }
            }
        })
        .then(editor => {
            // Editor instance

            // Get the CSRF token from the meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Set the CSRF token in the request headers
            editor.config.set('fileTools.requestHeaders', {
                'X-CSRF-TOKEN': csrfToken
            });
        })
        .catch(error => {
            console.error(error);
        });
</script> -->



<script>
tinymce.init({
  selector: 'textarea#content',
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
      var existingData = `{!! isset($type) ? $type->content : '' !!}`;
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

function openImagePickerDialog(callback) {
  var input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.onchange = function () {
    var file = input.files[0];
    uploadImage(file, callback);
  };
  input.click();
}

function uploadImage(file, callback) {
  var formData = new FormData();
  formData.append('upload', file);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', '/api/upload-image'); // Replace with your API endpoint URL

  xhr.onload = function () {
    if (xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      var imageUrl = response.image_url; // Replace with the key containing the image URL in the API response

      if (imageUrl) {
        callback(imageUrl);
      }
    }
  };

  xhr.onerror = function () {
    console.error('Image upload failed');
  };

  xhr.send(formData);
}

</script>

<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Delete image
    $(document).on('click', '.delete-button', function() {
        var imageContainer = $(this).closest('.image-container');
        var type = imageContainer.find('.delete-icon').data('type');
        var imageId = imageContainer.find('.delete-icon').data('image-id');

        // Make an API call to delete the image
        if (imageId) {
            console.log($('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                url: '/delete-blog-image/' + imageId,
                type: 'DELETE',
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success: function(response) {
                    // Remove the image from the DOM
                    imageContainer.remove();

                    // Check if both banner and image are deleted
                    checkImageInputs();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        } else {
            // If the image is not saved in the database, simply remove it from the DOM
            imageContainer.remove();

            // Check if both banner and image are deleted
            checkImageInputs();
        }

        // Reset the corresponding input field
        if (type === 'banner') {
            $('#banner-input').val('');
        } else if (type === 'image') {
            $('#image-input').val('');
        }
    });

    // Check if both banner and image inputs are empty
    function checkImageInputs() {
        var bannerInput = $('#banner-input');
        var imageInput = $('#image-input');
        var bannerContainer = $('#banner-container');
        var imageContainer = $('#image-container');

        // If both inputs are empty and there are no images in the containers, show error message
        if (
        bannerInput.val().trim() === '' &&
        imageInput.val().trim() === '' &&
        bannerContainer.find('.image-container').length === 0 &&
        imageContainer.find('.image-container').length === 0
        ) {
        $('#image-error').text('Please upload a banner and an image.').show();
        } else {
        $('#image-error').hide();
        }
    }

    // Handle selected banner image on file input change
    $(document).on('change', '#banner-input', function() {
        var files = Array.from(this.files);
        handleSelectedImages(files, 'banner');
    });

    // Handle selected content image on file input change
    $(document).on('change', '#image-input', function() {
        var files = Array.from(this.files);
        handleSelectedImages(files, 'image');
    });

    function handleSelectedImages(files, type) {
        var selectedImagesContainer = $('#' + type + '-container');
        var inputElement = (type === 'banner') ? $('#banner-input') : $('#image-input');
        selectedImagesContainer.empty(); // Clear existing selected images

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = (function(file) {
                return function(e) {
                    var img = $('<img>').attr({
                        src: e.target.result,
                        width: 100,
                        height: 70
                    });

                    var deleteIcon = $('<div>').addClass('delete-icon').data('type', type).data('image-id', null).html(
                        $('<button>').attr('type', 'button').addClass('delete-button').html(
                            $('<i>').addClass('fas fa-trash')
                        )
                    );

                    var imageContainer = $('<div>').addClass('image-container').append(img).append(deleteIcon);
                    selectedImagesContainer.append(imageContainer);

                    deleteIcon.on('click', function() {
                        // Remove from selected files array
                        var index = selectedFiles[type].indexOf(file);
                        if (index !== -1) {
                            selectedFiles[type].splice(index, 1);
                        }

                        // Remove from DOM
                        $(this).closest('.image-container').remove();

                        // Reset the corresponding input field
                        inputElement.val('');

                        // Check if both banner and image are deleted
                        checkImageInputs();
                    });
                };
            })(file);

            reader.readAsDataURL(file);
            selectedFiles[type].push(file); // Add to selected files array
        }

        // Check if both banner and image inputs are empty
        checkImageInputs();
    }
});


</script>
@endsection