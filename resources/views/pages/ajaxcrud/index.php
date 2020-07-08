@extends('layouts.master')
@section('title')
Ajax | Crud
@endsection
@section('content')
<br>
<br>
<br>
<br>
<div class="content">

<!-- Dynamic Table Full Pagination -->
<div class="block">
<div class="block-header">
<h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
</div>
<div class="block-content block-content-full">

<div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
<button id="addbtn" type="button" class="btn btn-sm btn-success mr-1 mb-3 js-click-ripple-enabled" style="float: right; overflow: hidden; position: relative; z-index: 1;">
<i class="fa fa-fw fa-plus mr-1"></i> Add User
</button>
</div>
</div>
<!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
<thead>
<tr>
<th class="text-center" style="width: 80px;">ID</th>
<th class="d-none d-sm-table-cell text-center" style="width: 15%;">Image</th>
<th class="text-center">Details</th>

<th class="text-center" style="width: 30%;">Action</th>
</tr>
</thead>
<tbody>
<?php
$i=1;
?>
@foreach ($data as $value)



<tr>
<td class="text-center font-size-sm">{{$i}}</td>

<td class="text-center"><img src="{{ asset('/student/images') }}/{{$value->image}}" alt="" border="3" height="100" width="100"></td>
<td class="d-none d-sm-table-cell font-size-sm text-center">
name : <em class="text-muted">{{$value->name}}</em><br>
Class : <em class="text-muted">{{$value->class}}</em><br>
Roll No : <em class="text-muted">{{$value->roll}}</em>

</td>

<td class="text-center">
<div class="btn-group">

<a href="">
<button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
<i class="fa fa-fw fa-pencil-alt"></i>
</button>
</a>
<a href="">
<button onclick="return confirm('Are you sure want to delete?')" type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
<i class="fa fa-fw fa-times"></i>
</button>
</a>
</div>
</td>
</tr>
<?php
$i++;
?>
@endforeach

</tbody>
</table>
</div>
</div>
<!-- END Dynamic Table Full Pagination -->
</div>
{{-- modals --}}
<!-- Vertically Centered Block Modal -->
<div class="modal fade" id="modal-block-vcenter" tabindex="-1" role="dialog" aria-labelledby="modal-block-vcenter" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form action="tpost" method="POST" enctype="multipart/form-data">
<div class="block block-themed block-transparent mb-0">
<div class="block-header bg-primary-dark">
<h3 class="block-title">Add Student</h3>
<div class="block-options">
<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
<i class="fa fa-fw fa-times"></i>
</button>
</div>
</div>
<div class="block-content font-size-sm">

@csrf

<div class="col-lg-12 col-xl-8 mr-auto">
<div class="form-group">
<label for="example-text-input-alt">Name</label>
<input type="text" class="form-control form-control-alt" id="name" name="name" placeholder="Text Input">
</div>
<div class="form-group">
<label for="example-password-input-alt">Class</label>
<input type="text" class="form-control form-control-alt" id="class" name="class" placeholder="Password Input">
</div>

<div class="form-group">
<label for="example-password-input-alt">Roll No</label>
<input type="number" class="form-control form-control-alt" id="roll" name="roll" placeholder="Password Input">
</div>
<div class="form-group">
<label>Image</label>
<div class="custom-file">
<input id="image" name="image" type="file">

</div>
</div>

</div>
</div>

</div>
<div    class="block-content block-content-full text-right border-top">
<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
<button id="maction" type="submit" name="submit" class="btn btn-sm btn-success">Upload</button>
</div>

</form>

</div>
</div>
</div>
</div>
<!-- END Vertically Centered Block Modal -->


{{-- script --}}


<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('js/ajaxcrud.js') }}"></script>

@endsection
