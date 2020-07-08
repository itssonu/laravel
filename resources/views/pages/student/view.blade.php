@extends('layouts.master')
@section('title')
Admin | Approve
@endsection

@section('content')

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
                <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
            </div>
            <div class="block-content block-content-full">
                {{-- <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_1_length"><label><select
                                    name="DataTables_Table_1_length" aria-controls="DataTables_Table_1"
                                    class="form-control form-control-sm">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select></label></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="DataTables_Table_1_filter" class="dataTables_filter"><label><input type="search"
                                    class="form-control form-control-sm" placeholder="Search.."
                                    aria-controls="DataTables_Table_1"></label></div>
                    </div>
                </div> --}}
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
                            <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Image</th>
                            <th class="text-center">Details</th>
                            {{-- <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Image</th> --}}
                            <th class="text-center" style="width: 30%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value)


                        <tr>
                            <td class="text-center font-size-sm">{{$value->id}}</td>
                            <td class="text-center"><img src="{{ asset('/student/images') }}/{{$value->image}}" alt=""
                                    border=3 height=100 width=100></img></td>
                            <td class="d-none d-sm-table-cell font-size-sm text-center">
                                name : <em class="text-muted">{{$value->name}}</em><br>
                                Class : <em class="text-muted">{{$value->class}}</em><br>
                                Roll No : <em class="text-muted">{{$value->roll}}</em>

                            </td>

                            <td class="text-center">
                                <div class="btn-group">
                                    {{-- <a href="{{url('admin/show-student')}}/{{$value->id}}">
                                    <button type="button" class="btn btn-sm btn-light js-tooltip-enabled"
                                        data-toggle="tooltip" title="" data-original-title="show Client">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </button>
                                    </a> --}}
                                    <a href="{{url('admin/edit-student')}}/{{$value->id}}">
                                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled"
                                            data-toggle="tooltip" title="" data-original-title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                    </a>
                                    <a href="{{ url('admin/delete-student')}}/{{$value->id}}">
                                        <button onclick="return confirm('Are you sure want to delete?')" type="button"
                                            class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip"
                                            title="" data-original-title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $products->links() !!} --}}
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
<script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
<script src="{{ asset('_es6/pages/be_tables_datatables.min.js') }}"></script>


<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
<script src="assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
<script src="assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
<script src="assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>


@endsection