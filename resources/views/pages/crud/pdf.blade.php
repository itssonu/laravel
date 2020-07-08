<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4" style="inline-block;float: left;">
{{--         <img src="http://dev.01s.in/missing_child/public/storage/logo.png" style="height:150px;width:auto;opacity: 0.8"> --}}
      </div>
      <div class="col-md-4" style="display: inline-block;float: left;">
        <h2 style="text-align: center;">Case Details <br><img src="{{asset('images/crud_image')}}/{{$crud->image}}" style="height:150px;width:auto;"></h2><br>
      </div>
      <div class="col-md-4">
      </div>
    </div> 
    {{-- {{dd($crud)}} --}}
    <table class="table" style="width:100%">
      <tr>
        <th>First Name</th>
        <td>{{$crud->fname}}</td>
      </tr>
      <tr>
        <th>Last Name</th>
         <td>{{$crud->lname}}</td>
      </tr>
      <tr>
        <th>Number</th>
       <td>{{$crud->number}}</td>
      </tr>
    

    </table>
  </div>
</body>
</html>