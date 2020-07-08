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

    <!-- Page Content -->
    <div class="content">
        <!-- Alternative Style -->

        {{-- //success alert  --}}
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

            {{-- end success alert  --}}
            <div class="block-header">
                <h3 class="block-title">Add Student Data</h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ url('admin/addstudentpost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                You can enable an alternative style with background color
                            </p>
                        </div> --}}
                        <div class="col-lg-12 col-xl-8">
                            <div class="form-group">
                                <label for="example-text-input-alt">Name</label>
                                <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                                    name="name" placeholder="Text Input">
                            </div>
                            <div class="form-group">
                                <label for="example-password-input-alt">Class</label>
                                <input type="text" class="form-control form-control-alt" id="example-password-input-alt"
                                    name="class" placeholder="Password Input">
                            </div>
                            {{-- <div class="form-group">
                                <label for="example-textarea-input-alt">Roll No</label>
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt"
                                    name="example-textarea-input-alt" rows="7"
                                    placeholder="Textarea content.."></textarea>
                            </div> --}}
                            <div class="form-group">
                                <label for="example-password-input-alt">Roll No</label>
                                <input type="number" class="form-control form-control-alt"
                                    id="example-password-input-alt" name="roll" placeholder="Password Input">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input name="image" type="file">
                                    {{-- <label class="custom-file-label" for="example-file-input-custom">Choose file</label> --}}
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-sm btn-outline-success">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Alternative Style -->
    </div>
    <!-- END Page Content -->
</main>
<!-- Page JS Code -->
<script src="{{ asset('assets/_es6/js/oneui.app.min.js') }}"></script>
@endsection