@extends('layouts.master')
@section('title')
Admin | Approve
@endsection

@section('content')
<?php 
// dd($data)
?>
<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    DataTables <small
                        class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Tables
                        transformed with dynamic features.</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">DataTables</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block">
            @if($msg = Session::get('success'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">Success</h3>
                <p class="mb-0">{{$msg}} <a class="alert-link" class="close" data-dismiss="alert"
                        aria-label="Close">close</a>!</p>
            </div>
            @endif
            <div class="block-header">
                <h3 class="block-title">Dynamic Table <small>Full</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Images</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                            {{-- <th style="width: 15%;">Registered</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $value)
                        <tr>
                            <td class="text-center font-size-sm">{{ $value->id }}</td>
                            <td class="font-w600 font-size-sm">
                                <a href="#">{{ $value->username }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                <em class="text-muted">{{ $value->image }}</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="{{ url('admin/approve/approve-img') }}/{{$value->id}}"> <button type="button"
                                        class="btn btn-sm btn-success">Success</button>
                                    </button></a>
                            </td>
                            {{-- <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td> --}}
                        </tr>
                        <tr>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection