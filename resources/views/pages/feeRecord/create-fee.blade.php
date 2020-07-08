@extends('layouts.master')
@section('title')
Admin | Approve
@endsection

@section('content')
<?php 
// dd($data)
?>
<main id="main-container">


    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full Pagination -->
        <div class="block">
            @if($msg = Session::get('success'))
            <div class="alert alert-success alert-dismissable" role="alert" style="
            width: 500px;
            border-radius: 10px;
        ">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">Success</h3>
                <p class="mb-0">{{$msg}} <a class="alert-link" class="close" data-dismiss="alert"
                        aria-label="Close">close</a>!</p>
            </div>
            @endif
            <div class="block-header">
                <h3 class="block-title">Fee Management</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6">
                        <a href="addstudent">
                            <button data-toggle="click-ripple" type="button" class="btn btn-sm btn-success mr-1 mb-3"
                                style="
                        float: right;
                    ">
                                <i class="fa fa-fw fa-plus mr-1"></i> Add User
                            </button>
                        </a>
                    </div>
                </div>
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th class="d-none d-sm-table-cell" style="width: ;">Class</th>
                            <th class="d-none d-sm-table-cell" style="width: ;">Fee</th>
                            <th class="d-none d-sm-table-cell" style="width: ;">Group fee</th>
                            <th class="d-none d-sm-table-cell" style="width: ;">Other fee</th>
                            <th style="width: ;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $value) --}}


                        <tr>
                            <td class="text-center font-size-sm">
                                {{-- {{$value->id}} --}}
                            </td>
                            <td class="text-center font-size-sm">
                                {{-- {{$value->id}} --}}
                            </td>
                            <td class="text-center font-size-sm">
                                {{-- {{$value->id}} --}}
                            </td>
                            <td class="text-center font-size-sm">
                                {{-- {{$value->id}} --}}
                            </td>
                            <td class="text-center font-size-sm">
                                {{-- {{$value->id}} --}}
                            </td>
                            <td class="text-center font-size-lg">
                                <a href=""><i class="fa fa-pen-square "></i></a>  
                            </td>
                              
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full Pagination -->
    </div>
    {{-- Modal --}}
    <!-- Large Block Modal -->
    <div class="modal" id="modal-block-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-large"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modal Title</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal"><i
                                class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->
    <!-- END Page Content -->
</main>
<!-- Page JS Code -->


@endsection