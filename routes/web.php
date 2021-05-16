<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MajobController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Menus;
use App\Http\Livewire\Employees;


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
    return view('welcome');
});
Auth::routes();

// Route::get('/employees',Employees::class);

// Route::get('/employee',[EmployeeController::class,'Index']);

Route::post('ckeditor/image_upload',[CkeditorController::class,'upload'])->name('upload');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->namespace('')->group(function(){

    // Route::get('/employes',Employsees::class);
    Route::match(['get','post'],'/',[AdminController::class,'Login']);
    Route::get('/forgot-password',[AdminController::class,'forgotPassword'])->name('admin.forgot');
    Route::post('/reset-password',[AdminController::class,'resetPassword'])->name('reset.password');
    Route::group(['middleware'=>['admin']], function(){

        Route::get('index',[AdminController::class,'Index']);
        // Route::get('/settings',[AdminController::class,'Setting']);
        Route::match(['get','post'],'/settings',[AdminController::class,'Setting'])->name('admin.settings');
        Route::get('/logout',[AdminController::class,'Logout'])->name('admin.logout');
        Route::post('/check-current-password',[AdminController::class,'checkCurrentPassword']);
        Route::match(['get','post'],'edit-detail',[AdminController::class,'editDetail'])->name('admin.detail');
        Route::match(['get','post'],'/add',[AdminController::class,'addAdmin'])->name('admin.add');
        Route::get('/show',[AdminController::class,'Show']);
        Route::post('/delete',[AdminController::class,'Delete'])->name('admin.delete');
        Route::get('/export-excel',[AdminController::class,'exportInToExcel'])->name('admin.excel');

        

        Route::prefix('/service')->namespace('Service')->group(function(){
            Route::match(['get','post'],'/add',[ServiceController::class,'addService'])->name('service.add');
            Route::get('/show',[ServiceController::class,'showService'])->name('service.show');
            Route::match(['get','post'],'/edit/{id}',[ServiceController::class,'editService'])->name('service.edit');
            Route::post('delete',[ServiceController::class,'Delete'])->name('service.delete');
            // Route::get('/menus',Menus::class);
        });
       

        Route::get('/menus',Menus::class);

        Route::prefix('/order')->namespace('Order')->group(function(){
            Route::get('/show',[OrderController::class,'getOrder'])->name('show');
            Route::match(['get','post'],'/create',[OrderController::class,'createOrder'])->name('create.order');
            Route::match(['get','post'],'/edit/{id}',[OrderController::class,'editOrder'])->name('edit.order');
        });


        Route::prefix('/invoice')->namespace('Invoice')->group(function(){
            Route::get('/create/{id}',[OrderController::class,'Invoice'])->name('invoice.create');
            Route::post('/save-invoice',[InvoiceController::class,'saveInvoice'])->name('save.invoice');
            Route::get('/show',[InvoiceController::class,'showInvoice'])->name('list.invoice');
            Route::get('/detail/{id}',[InvoiceController::class,'detailInvoice'])->name('detail.invoice');
        });
        
        
        Route::prefix('/employee')->namespace('Employee')->group(function(){
            Route::match(['get','post'],'/create',[EmployeeController::class,'Create'])->name('employee.create');
            Route::get('/show',[EmployeeController::class,'Show'])->name('employee.show');
            Route::match(['get','post'],'/edit/{id}',[EmployeeController::class,'Edit']);
            Route::post('/delete',[EmployeeController::class,'Delete'])->name('employee.delete');
        });
    });
});


Route::prefix('/home-service')->namespace('HomeService')->group(function(){
    Route::get('/index',[PageController::class,'Index']);
    Route::get('/indexx',[PageController::class,'Indexx'])->name('index');
    Route::get('/service',[PageController::class,'Service'])->name('all.service');
    Route::post('/order',[OrderController::class,'getOrder'])->name('order');          
    Route::get('/my-team',[PageController::class,'myTeam'])->name('myteam');
    Route::get('/service-detail/{id}',[PageController::class,'serviceDetail']);
    
    Route::post('/register',[CustomerController::class,'Register'])->name('customer_register');
    Route::post('/login',[CustomerController::class,'Login'])->name('customer_login');
    Route::get('/logout',[CustomerController::class,'Logout'])->name('customer_logout');

    Route::get('/info',[CustomerController::class,'myInfo'])->name('customer.info');
    Route::get('/my-order',[CustomerController::class,'myOrder'])->name('customer.order');

    Route::post('/comment',[CustomerController::class,'Comment'])->name('customer.comment');

    Route::post('/forgot',[CustomerController::class,'customerForgot'])->name('customer_forgot');

});

Route::prefix('/employee')->namespace('Employee')->group(function(){
    Route::match(['get','post'],'/',[EmployeeController::class,'Login'])->name('employee.login');
    Route::match(['get','post'],'forgot-pasword',[EmployeeController::class,'ForgotPassword'])->name('employee.forgot');
    Route::group(['middleware'=>['employee']],function(){
        Route::get('/index',[EmployeeController::class,'employeeIndex']);
        Route::get('/logout',[EmployeeController::class,'Logout'])->name('employee.logout');
        Route::get('/profile',[EmployeeController::class,'Profile'])->name('employee.profile');
        Route::get('/work-list-processing',[EmployeeController::class,'WorkListPro'])->name('worklist.pro');
        Route::get('/work-list-success',[EmployeeController::class,'WorkListSuccess'])->name('worklist.suc');
        Route::get('/done/{id}',[EmployeeController::class,'Done'])->name('worklist.done');

        

    });
});



