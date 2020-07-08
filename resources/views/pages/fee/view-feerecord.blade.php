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
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <!-- Form Labels on top - Default Style -->
                        <form class="mb-5" action="{{url('admin/search-fees')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="example-ltf-email">Class</label>
                                <select class="custom-select" id="example-select-custom" name="class">
                                    @foreach ($class as $class)
                                    <option value="{{$class->class}}">{{$class->class}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="example-ltf-email">Roll number</label>
                                <input type="number" class="form-control" id="example-ltf-email" name="roll"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                        <!-- END Form Labels on top - Default Style -->
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- END Page Content -->
</main>
<!-- Page JS Code -->

@endsection