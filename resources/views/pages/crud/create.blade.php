@extends('layouts.master')
@section('title')
    crud
@endsection
@section('content')



<main id="main-container">
       <!-- Page Content -->
       <div class="content">
<div class="block">
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h3 class="alert-heading font-w300 my-2">Success</h3>
        <p class="mb-0">{{Session::get('success')}} <a class="alert-link" data-dismiss="alert" aria-label="Close">close</a>!</p>
    </div>
    @endif
    <div class="block-header">
        <a href="{{ url('crud') }}"> <h3 class="block-title">back <small></small></h3></a>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ url('crud') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    There were some errors with your request.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
                <div class="col-lg-8 col-xl-5 mx-auto">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control form-control-alt" name="fname" placeholder="first name">
                        @if ($errors->any())
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control form-control-alt" name="lname" placeholder="last name">
                        @if ($errors->any())
                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="number">Mob. Number</label>
                        <input type="tel" class="form-control form-control-alt" maxlength="10"  name="number" placeholder="Mob. Number" onkeypress="return onlyNumberKey(event)">
                        @if ($errors->any())
                        <span class="text-danger">{{ $errors->first('number') }}</span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                            <input type="file" name="images[]" multiple>
                            @if ($errors->any())
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-outline-success">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
       </div>
</main>

{{-- number validation  --}}
<script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 
@endsection