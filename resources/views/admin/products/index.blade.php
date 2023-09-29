@extends('admin.layouts.app')
@section('title')
    {{ 'Products' }}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Products</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="w-100">
    <a href="{{route('add.product')}}" class="btn btn-primary">Add Product</a>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card p-4 rounded cShadow">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Short Description</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $('#datatable').DataTable({
            responsive: true,
            scrollX: true,
     
            processing: true,
            serverSide: true,
            ordering: false,
            ajax: '/admin/all-products',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'short_description', name: 'short_description'},
                {
  data: 'description',
  name: 'description',
  render: function(data, type, row) {
    if (type === 'display' || type === 'filter') {
      // Create a jQuery object from the 'data'
      var $content = $('<div>').html(data);

      // Remove any <img> tags from the content
      $content.find('img').remove();

      // Get the text value from the jQuery object
      var strippedContent = $content.text();

      // Limit the text content to 100 characters
      var limitedContent = strippedContent.substring(0, 100);

      // Add ellipsis (...) if the content is longer than 100 characters
      if (strippedContent.length > 100) {
        limitedContent += '...';
      }

      return limitedContent;
    }

    return data;
  }
},
                {data: 'image', name: 'image'},
                {data: 'status', name: 'status'},
                {data: 'actions', name: 'actions'},
            ]
        });
</script>
@endsection