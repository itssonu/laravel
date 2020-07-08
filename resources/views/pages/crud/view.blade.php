@extends('layouts.master')
@section('title')
Admin | Approve
@endsection

@section('content')

{{-- <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css"> --}}


<main id="main-container">
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            {{-- <h1 class="flex-sm-fill h3 my-2">
                DataTables <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Tables transformed with dynamic features.</small>
            </h1> --}}
            {{-- <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">DataTables</a>
                    </li>
                </ol>
            </nav> --}}
        </div>
    </div>
</div>
   <!-- Page Content -->
   <div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header">
        <h3 class="block-title">Crud <small>TOTAL :  {{count($data)}}</small></h3>
            <a href="{{ url('crud/create') }}"><button type="button" class="btn btn-success mr-1 mb-3">
                <i class="fa fa-fw fa-plus mr-1"></i> Add User
            </button>
            </a>
        </div>
        <form action="{{ url('crud') }}" method="GET">
        <div class="form-group">
            <div class="input-group col-xl-5">
                
                <input type="text" class="form-control" name="filter" placeholder="search">
                <div class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search mr-1"></i> Search
                    </button>
                </div>
            </div>
        </div>
        </form>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full text-center">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Number</th>
                        <th>Image</th>
                        <th style="width: 220px;">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i =1;
                        ?>
                    @foreach ($data as $value)
                   
                    <tr>
                        <td class="text-center font-size-sm">{{$i}}</td>
                        <td class="font-w600 font-size-sm">
                            {{$value->fname}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$value->lname}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success"> {{$value->number}}</span>
                        </td>
                        <td>
                            {{-- {{$value->image}}  --}}
@if ($value->image != "")
@foreach(explode('|', $value->image) as $info) 
{{-- {{$info}} --}}
<img style="height: 40px;width: 40px;" src="{{ asset('images/crud_image') }}/{{$info}}" alt="">
@endforeach
@endif
                            
                        </td>
                        <td>
                            <form action="{{ url('crud') }}/{{$value->id}}" method="POST">
                            <a href="{{ url('crud') }}/{{$value->id}}/edit">
                                <button type="button" class="btn btn-sm btn-light js-tooltip-enabled"
                                    data-toggle="tooltip" title="" data-original-title="Edit Client">
                                    <i class="fa fa-fw fa-edit"></i>
                                </button>
                            </a>
                        <a href="{{ url('crud') }}/{{$value->id}}">
                                <button type="button" class="btn btn-sm btn-light js-tooltip-enabled"
                                    data-toggle="tooltip" title="" data-original-title="Edit Client">
                                    <i class="fa fa-fw fa-eye"></i>
                                </button>
                            </a>
                           
                                @csrf
                                @method('DELETE')
                            {{-- <a href="{{ url('crud') }}/{{$value->id}}"> --}}
                                <button type="submit" class="btn btn-sm btn-light js-tooltip-enabled"
                                    data-toggle="tooltip" title="" data-original-title="Edit Client" onclick="return confirm('are you sure')">
                                    <i class="fa fa-fw fa-trash"></i>
                                </button>
                            {{-- </a> --}}
                        </form>
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
    <!-- END Dynamic Table Full -->
</div>
<!-- END Page Content -->

</main>
  
@endsection