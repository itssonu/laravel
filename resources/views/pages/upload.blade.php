@extends('layouts.master') @section('title') Admin | Upload @endsection @section('content')
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
                <h3 class="block-title">Dynamic Table <small>Full</small></h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ url('uploadpost')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <input type="file" name="image">
                            {{-- <label>Upload Your Image</label>
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                <label class="custom-file-label" for="example-file-input-custom">Choose file
                                </label>
                            </div> --}}
                            <button type="submit" class="btn btn-sm btn-success">upload</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@endsection