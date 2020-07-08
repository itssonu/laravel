@extends('layouts.master')
@section('title')
Admin | Approve
@endsection

@section('content')

<main id="main-container">

    <div class="content">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"> × </span>
                </button>
            </ul>
        </div>
        @endif
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Excel</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            Using an inline layout can come really handy for small forms
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <!-- Form Inline - Default Style -->
                        <form class="form-inline mb-4" action="{{ url('admin/upload-excel-post') }}" method="POST"
                            enctype="multipart/form-data">@csrf
                            <label class="sr-only" for="example-if-email">Excel File</label>
                            <input type="file" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-email"
                                   name="excel" placeholder="Excel">
                            <button type="submit" class="btn btn-primary">Upload</button>&nbsp;&nbsp;<br>

                        </form>
                        <a href="export"><button class="btn btn-success">Export</button></a>
                        <!-- END Form Inline - Default Style -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- Page JS Code -->

@endsection