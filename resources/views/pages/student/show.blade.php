@extends('layouts.master') @section('title') Admin | Upload @endsection @section('content')
<main id="main-container">
    <!-- Hero -->
    {{-- <div class="bg-body-light">
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
    </div> --}}
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
                <h3 class="block-title">
                    Student Data
                </h3>
                {{-- <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div> --}}
            </div>
            <div class="block-content">
                <div class="col-lg-6">
                    <div class="block block-rounded block-mode-loading-oneui">
                        <div class="block-header">
                            <h3 class="block-title">sonu</h3>

                        </div>
                        <div class="block-content p-0 bg-body-light text-center">
                            <!-- Chart.js is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js) -->
                            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                            <div class="pt-3" style="height: 360px;">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <img class="js-chartjs-dashboard-earnings chartjs-render-monitor"
                                    style="display: block; width: 488px; height: 344px;" width="488" height="344"
                            src="{{ asset('student/images') }}/{{$data->image}}">
                                {{-- <canvas class="js-chartjs-dashboard-earnings chartjs-render-monitor"
                                    style="display: block; width: 488px; height: 344px;" width="488"
                                    height="344"></canvas> --}}
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center py-3">

                                <div class="col-6 col-xl-3">
                                    <div class="text-muted mt-3">name</div>
                                    <div class="text-muted mt-3">{{$data->name}}</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">{{$data->class}}</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">{{$data->roll}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection