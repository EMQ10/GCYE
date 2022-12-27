<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Superadmin\RoleController;
use App\Http\Controllers\Superadmin\UserController;
use App\Http\Controllers\Superadmin\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Starter\DashboardController;
use App\Http\Controllers\Business\BusinessController;
use App\Http\Controllers\Superadmin\SuperAdminController;
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CommentsController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::fallback(function () {
    return redirect('/home');
});
// Route::error403(function () {
//     return redirect('/home');
// });

Route::get('/', function () {
    return view('auth/login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/Register', function () {
    return view('auth/choice');
});

Route::get('/registration{q}', [MemberController::class, 'registration'])->name('registration');

Route::get('/Message', function () {
    return view('home');
})->name('message');



Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('Resister/Member', [MemberController::class, 'create'])->name('member.create');
Route::post('Member/save', [MemberController::class, 'store'])->name('member.store');

Route::group(['middleware' => ['auth']], function() {

Route::group(['middleware' => ['role:Superadmin']], function(){

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin');


});


Route::resource('users', UserController::class);
Route::get('/User/create/{mid}',[MemberController::class,'user_create'])->name('user.create');

Route::get('/members',[MemberController::class,'members_list'])->name('members.list');
Route::get('/members/starter', [MemberController::class, 'members_starter'])->name('members.starter');
Route::get('/members/business', [MemberController::class, 'members_business'])->name('members.business');

Route::get('/member/dues_list',[MemberController::class,'dues_list'])->name('member.dues');

Route::get('/member/registration_list',[MemberController::class,'reg_list'])->name('member.reg');
// Route::get('/member/dues_approval/{id}',[MemberController::class,'dues_approve'])->name('dues.approval');

Route::get('/member/reg_approval/{mid}',[MemberController::class,'reg_approve'])->name('reg.approval');

Route::get('sms', [MemberController::class, 'payment'])->name('sms');
Route::post('event/create',[ProjectController::class, 'save'])->name('create.event');
Route::get('event/edit/{id}',[ProjectController::class, 'edit'])->name('edit.event');
Route::put('updating/event/{id}',[ProjectController::class,'save_event'])->name('updating.event');


Route::get('tickets/{ticket_id}', [TicketsController::class, 'show']);
Route::post('comment', [CommentsController::class,'postComment']);



Route::group(['middleware' => ['role:Admin']], function () {
    
    Route::get('/admin',[AdminController::class,'index'])->name('admin');

    Route::get('tickets', [TicketsController::class, 'index']);
    Route::put('close_ticket/{ticket_id}', [TicketsController::class, 'close']);

});


// Starter
Route::group(['middleware' => ['role:Starter']], function() {

    Route::get('/Starter',[DashboardController::class,'index'])->name('starter');

});

// Routes for both Starter and Business
Route::post('/image-upload/{mid}', [MemberController::class,'upload'])->name('image-upload.post');
Route::post('/logo-upload/{mid}', [MemberController::class,'logo_upload'])->name('logo-upload.post');

Route::get('member/edit/{mid}', [MemberController::class, 'business_edit'])->name('member.edit');

Route::post('business/add', [MemberController::class, 'business_create'])->name('business.create');
Route::put('update/business/{mid}', [MemberController::class, 'bus'])->name('bus.up');

Route::put('member/update/{mid}', [MemberController::class, 'update'])->name('member.update');
Route::post('file/store/{mid}', [MemberController::class, 'file_store'])->name('file.store');
Route::get('/display_pdf/{mid}',[MemberController::class, 'pdf'])->name('pdf');
Route::get('/projects',[ProjectController::class, 'index'])->name('project.index');
Route::get('/event/{id}',[ProjectController::class, 'details'])->name('project.detail');
Route::get('/all_event',[ProjectController::class, 'events'])->name('project.all');

Route::get('my_tickets', [TicketsController::class, 'userTickets'])->name('my_tickets');
Route::get('new-ticket', [TicketsController::class,'create']);
Route::post('new-ticket', [TicketsController::class,'store']);


// business
Route::group(['middleware' => ['role:Business']], function() {

    Route::get('/Business',[BusinessController::class,'index'])->name('business');
    Route::get('/Profile',[BusinessController::class,'profile'])->name('profile');

});


});


