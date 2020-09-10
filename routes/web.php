<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = DB::table('userdatas')->where('status', '1')->get();
    return view('welcome')->with('data', $data);
});


/*
|-----------------------------------------------
|                  Auth
|------------------------------------------------
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/login', 'authController@index');
Route::post('admin/loginpost', 'authController@loginpost');
Route::get('admin/logout', function () {
    Auth::logout();
    return redirect('admin/login');
});

/*
|-----------------------------------------------
|                  Pages
|------------------------------------------------
*/
Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin', function () {
        return view('dashboard');
    });

    /*
|-----------------------------------------------
|                  Crud module
|------------------------------------------------
*/

Route::resource('crud', 'CrudController');
Route::get('pdfdown/{id}', 'CrudController@pdfdown')->name('pdfdownload');
// Route::get('filter','CrudController@filter')


    /*
|-----------------------------------------------
|                  Apporove module
|------------------------------------------------
*/
    Route::get('/admin/approve', 'approveController@index');
    Route::get('/admin/approve/approve-img/{id}', 'approveController@approveimg');

      
    // });

    /*
|-----------------------------------------------
|                  student module
|------------------------------------------------
*/
    Route::get('/admin/student', 'studentController@index');
    Route::get('admin/addstudent', 'studentController@addstudent');
    Route::post('admin/addstudentpost', 'studentController@addstudentpost');
    Route::get('admin/edit-student/{id}', 'studentController@editstudent');
    Route::post('admin/update-student/{id}', 'studentController@updatestudent');
    Route::get('admin/delete-student/{id}', 'studentController@deletestudent');
    Route::get('admin/show-student/{id}', 'studentController@showstudent');

    /*
|-----------------------------------------------
|                  Fee Structure
|------------------------------------------------
*/
    Route::get('/admin/fee', 'feeController@index');
    Route::get('/admin/view-feerecord', 'feerecordController@index');
    Route::post('/admin/search-fees', 'feerecordController@search');

    /*
|-----------------------------------------------
|                 upload excel file
|------------------------------------------------
*/

    Route::get('admin/upload-excel', 'excelController@index');
    Route::post('admin/upload-excel-post', 'excelController@postexcel');
    Route::get('admin/export', 'excelController@export');
});

    /*
|-----------------------------------------------
|              start start   ajax crud
|------------------------------------------------
*/

Route::get('ajaxcrud','ajxcrudcontroller@index');
Route::post('ajaxcrud/read','ajxcrudcontroller@read');
Route::post('ajaxcrud/store','ajxcrudcontroller@store');
Route::get('ajaxcrud/delete/{id}','ajxcrudcontroller@destroy');
Route::get('ajaxcrud/edit/{id}','ajxcrudcontroller@edit');
Route::post('ajaxcrud/update/{id}','ajxcrudcontroller@update');


    /*
|-----------------------------------------------
|             end  end end    ajax crud
|------------------------------------------------
*/

Route::group(['middleware' => 'user'], function () {
    Route::get('admin/upload', function () {
        return view('pages.upload');
    });
});

/*
|-----------------------------------------------
|                 User
|------------------------------------------------
*/
Route::post('/uploadpost', 'userController@upload');

/*
|-----------------------------------------------
|            curl
|------------------------------------------------
*/

Route::get('get-curl', 'curlController@getCURL');

/*
|-----------------------------------------------
|            excel read and find string
|------------------------------------------------
*/
Route::get('file/excel','ExcelFindStrController@upload');
Route::post('file/upload','ExcelFindStrController@uploadpost');
/*
|-----------------------------------------------
|       ------ end ---  excel read and find string
|------------------------------------------------
*/
