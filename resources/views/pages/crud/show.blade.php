
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
           <a href="{{ url('crud') }}"> <h3 class="block-title">back <small></small></h3></a>
           
        </div>

        <div class="block-content">
            <div class="pCard_card">
                <div class="pCard_up">
                   {{-- <div class="pCard_text">
                      <h2 style=" background-color: #ffffff;">{{$crud->fname}} {{$crud->lname}}</h2>
                      <p>UI/UX Designer &amp; UI Developer</p>
                   </div> --}}
                </div>
                <div class="pCard_down">
                   <div>
                      <p>First Name</p>
                      <p>{{$crud->fname}}</p>
                   </div>
                   <div>
                      <p>Last Name</p>
                      <p>{{$crud->lname}}</p>
                   </div>
                   <div>
                      <p>Number</p>
                      <p>{{$crud->number}}</p>
                   </div>
   <a style="margin-left: 150px!important;" class="btn btn-dark mx-auto" href="{{url('pdfdown')}}/{{$crud->id}}">Download</a>
                </div>
                <div class="pCard_back">
                   <p>See My Latest Work Here</p>
                   <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                   <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
                   <a href="#"><i class="fa fa-behance fa-2x fa-fw"></i></a> <br>
                   <a href="#"><i class="fa fa-codepen fa-2x fa-fw"></i></a>
                   <a href="#"><i class="fa fa-dribbble fa-2x fa-fw"></i></a>
                   <a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                   <p>Follow Me!</p>
                </div>
             </div>
    </div>
      
           
        </div>
        
      
    </div>
    <!-- END Dynamic Table Full -->
</div>
<!-- END Page Content -->

</main>
<style>
    body {
  font-family: "Open Sans", sans-serif;
  background-color: #f1f9fc;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  -ms-box-sizing: content-box;
  -o-box-sizing: content-box;
  box-sizing: content-box;
  padding: 0;
  margin: 0;
}

.pCard_card {
  width: 400px;
  height: 615px;
  margin: 50px auto;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  -o-border-radius: 30px;
  border-radius: 30px;
  background-color: #f6fcfe;
  -webkit-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  -moz-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  -ms-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  -o-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  position: relative;
  overflow: hidden;
}

/****************
Back
****************/

.pCard_card .pCard_back {
  text-align: center;
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  margin-top: -139px;
  font-weight: 600;
  z-index: 1;
}
.pCard_card .pCard_back a {
  text-decoration: none;
}

/****************
UP
****************/

.pCard_card .pCard_up {
  position: absolute;
  width: 100%;
  height: 437px;
  background-image: url({{ asset('images/crud_image') }}/{{$crud->image}});
  background-position: 50%;
  background-size: cover;
  z-index: 3;
  text-align: center;
  -webkit-border-top-left-radius: 30px;
  -moz-border-top-left-radius: 30px;
  -ms-border-top-left-radius: 30px;
  -o-border-top-left-radius: 30px;
  border-top-left-radius: 30px;
  -webkit-border-top-right-radius: 30px;
  -moz-border-top-right-radius: 30px;
  -ms-border-top-right-radius: 30px;
  -o-border-top-right-radius: 30px;
  border-top-right-radius: 30px;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_up {
  height: 100px;
  box-shadow: 0 0 30px #cfd8dc;
}

.pCard_card .pCard_up .pCard_text {
  position: absolute;
  top: 319px;
  left: 0;
  right: 0;
  color: #f1f7f9;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_up .pCard_text {
  top: 20px;
}

.pCard_card .pCard_up .pCard_text h2 {
  margin: 0;
  font-size: 25px;
  font-weight: 600;
}

.pCard_card .pCard_up .pCard_text p {
  margin: 0;
  font-size: 16px;
  color: #e3f1f5;
}

.pCard_card .pCard_up .pCard_add {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  background-color: #ed145b;
  -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  position: absolute;
  top: 392px;
  left: 0;
  right: 0;
  margin: auto;
  width: 88px;
  height: 88px;
  cursor: pointer;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_up .pCard_add {
  -webkit-transform: rotate(360deg) scale(0.5);
  -moz-transform: rotate(360deg) scale(0.5);
  -ms-transform: rotate(360deg) scale(0.5);
  -o-transform: rotate(360deg) scale(0.5);
  transform: rotate(360deg) scale(0.5);
  top: 470px;
}

/****************
Down
****************/

.pCard_card .pCard_down {
  background-color: #fff;
  position: absolute;
  bottom: 0px;
  width: 100%;
  height: 178px;
  z-index: 2;
  -webkit-border-bottom-left-radius: 30px;
  -moz-border-bottom-left-radius: 30px;
  -ms-border-bottom-left-radius: 30px;
  -o-border-bottom-left-radius: 30px;
  border-bottom-left-radius: 30px;
  -webkit-border-bottom-right-radius: 30px;
  -moz-border-bottom-right-radius: 30px;
  -ms-border-bottom-right-radius: 30px;
  -o-border-bottom-right-radius: 30px;
  border-bottom-right-radius: 30px;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_down {
  height: 100px;
  -webkit-box-shadow: 0 0 30px #cfd8dc;
  -moz-box-shadow: 0 0 30px #cfd8dc;
  -ms-box-shadow: 0 0 30px #cfd8dc;
  -o-box-shadow: 0 0 30px #cfd8dc;
  box-shadow: 0 0 30px #cfd8dc;
}

.pCard_card .pCard_down div {
  width: 33.333%;
  float: left;
  text-align: center;
  margin-top: 50px;
  font-size: 18px;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_down div {
  margin-top: 10px;
}

.pCard_card .pCard_down div p:first-of-type {
  color: #68818c;
  margin-bottom: 5px;
}

.pCard_card .pCard_down div p:last-of-type {
  color: #334750;
  font-weight: 700;
  margin-top: 0;
}
.pCard_card .pCard_back a i {
  margin: 10px;
  padding: 15px;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  -ms-border-radius: 15px;
  -o-border-radius: 15px;
  border-radius: 15px;
  -webkit-transition: 0.3s ease-in-out;
  -moz-transition: 0.3s ease-in-out;
  -ms-transition: 0.3s ease-in-out;
  -o-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
}

.pCard_card .pCard_back a i:hover {
  -webkit-transform: scale(1.2);
  -moz-transform: scale(1.2);
  -ms-transform: scale(1.2);
  -o-transform: scale(1.2);
  transform: scale(1.2);
}

.pCard_card .pCard_back a:nth-of-type(1) i {
  color: #3b5998;
  border: 2px solid #3b5998;
}

.pCard_card .pCard_back a:nth-of-type(2) i {
  color: #0077b5;
  border: 2px solid #0077b5;
}

.pCard_card .pCard_back a:nth-of-type(3) i {
  color: #1769ff;
  border: 2px solid #1769ff;
}

.pCard_card .pCard_back a:nth-of-type(4) i {
  color: #000000;
  border: 2px solid #000000;
}

.pCard_card .pCard_back a:nth-of-type(5) i {
  color: #eb5e95;
  border: 2px solid #eb5e95;
}

.pCard_card .pCard_back a:nth-of-type(6) i {
  color: #3f729b;
  border: 2px solid #3f729b;
}

.pCard_card .pCard_up .pCard_add i {
  color: white;
  font-size: 38px;
  line-height: 88px;
}

    </style>  
    <script>$(function () {
        "use strict";
        $(".pCard_add").click(function () {
          $(".pCard_card").toggleClass("pCard_on");
          $(".pCard_add i").toggleClass("fa-minus");
        });
      });</script>
@endsection