@extends('admin.layouts.app')
@section('title')
    {{ 'Contact' }}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Contact Us</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="w-100">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card p-4 rounded cShadow">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Submitted at</th>
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
            ajax: '/admin/all_contact',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile_number', name: 'mobile_number'},
                {data: 'title', name: 'title'},
                {data: 'message', name: 'message'},
                {data: 'created_at', name: 'created_at'},

            ],
        });
 
  $(document).ready(function() {
  $(document).on('click', '.show-more-btn', function() {
    var button = $(this);
    var message = button.siblings('.message');
    var fullMessage = button.data('full-message');
    message.html(fullMessage);
    button.remove();
  });
});
</script>
@endsection