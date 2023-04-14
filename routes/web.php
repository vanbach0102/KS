<?php

use App\Http\Controllers\HomeController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

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
//Home
Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/room', [\App\Http\Controllers\HomeController::class,'showRoom']);
Route::get('/phong/{maLoaiPhong}', [\App\Http\Controllers\HomeController::class,'showPhong']);




//ADmin
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'showDashboard']);
Route::get('/logout', [\App\Http\Controllers\AdminController::class, 'logout']);
Route::post('/admin-dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard']);

//loai Phong
Route::get('/add-loai-phong', [\App\Http\Controllers\LoaiPhongController::class, 'add_loaiphong']);
Route::get('/all-loai-phong', [\App\Http\Controllers\LoaiPhongController::class, 'all_loaiphong']);
Route::post('/save-loai-phong', [\App\Http\Controllers\LoaiPhongController::class, 'save_loaiphong']);
Route::get('/edit-loai-phong/{maLoaiPhong}', [\App\Http\Controllers\LoaiPhongController::class, 'edit_loaiphong']);
Route::post('/update-loai-phong/{maLoaiPhong}', [\App\Http\Controllers\LoaiPhongController::class, 'update_loaiphong']);
Route::get('/delete-loai-phong/{maLoaiPhong}', [\App\Http\Controllers\LoaiPhongController::class, 'delete_loaiphong']);
Route::get('/set-loai-phong/{maLoaiPhong}', [\App\Http\Controllers\LoaiPhongController::class, 'set_loaiphong']);
Route::get('/unset-loai-phong/{maLoaiPhong}', [\App\Http\Controllers\LoaiPhongController::class, 'unset_loaiphong']);


// Phòng
Route::group(['middleware' => 'auth.roles', 'auth.roles' =>['admin','author']], function(){
    Route::get('/add-phong', [\App\Http\Controllers\PhongController::class, 'add_phong']);
    Route::get('/edit-phong/{maPhong}', [\App\Http\Controllers\PhongController::class, 'edit_phong']);

});
Route::get('/all-phong', [\App\Http\Controllers\PhongController::class, 'all_phong']);
Route::post('/save-phong', [\App\Http\Controllers\PhongController::class, 'save_phong']);
Route::post('/update-phong/{maPhong}', [\App\Http\Controllers\PhongController::class, 'update_phong']);
Route::get('/delete-phong/{maPhong}', [\App\Http\Controllers\PhongController::class, 'delete_phong']);
Route::get('/set-phong/{maPhong}', [\App\Http\Controllers\PhongController::class, 'set_phong']);
Route::get('/unset-phong/{maPhong}', [\App\Http\Controllers\PhongController::class, 'unset_phong']);

//Excel
Route::get('/export-excel', [\App\Http\Controllers\AuthController::class, 'export']);
Route::post('/import-excel', [\App\Http\Controllers\EmployeeController::class, 'import']);


//Register
Route::get('/auth-register', [\App\Http\Controllers\AuthController::class,'showRegister']);
Route::get('/login-auth', [\App\Http\Controllers\AuthController::class,'login_auth']);
Route::get('/logout-auth', [\App\Http\Controllers\AuthController::class,'logout']);
Route::post('/auth-register', [\App\Http\Controllers\AuthController::class,'register']);
Route::post('/login-auth', [\App\Http\Controllers\AuthController::class,'login']);

//User
Route::get('/all-user',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/add-user', [\App\Http\Controllers\UserController::class,'add_user']);
Route::post('/assign-role', [\App\Http\Controllers\UserController::class,'assign_role']);
Route::get('/delete-user/{admin_id}',[\App\Http\Controllers\UserController::class,'delete_user']);

//Cate News
Route::get('/add-cate-news',[\App\Http\Controllers\CateNewsController::class,'add_cate_news']);
Route::get('/all-cate-news',[\App\Http\Controllers\CateNewsController::class,'all_cate_news']);
Route::post('/save-cate-news',[\App\Http\Controllers\CateNewsController::class,'save_cate_news']);


//News
Route::get('/add-news',[\App\Http\Controllers\NewsController::class,'add_news']);
Route::post('/save-news',[\App\Http\Controllers\NewsController::class,'save_news']);
Route::get('/all-news',[\App\Http\Controllers\NewsController::class,'all_news']);
Route::get('/news', [\App\Http\Controllers\NewsController::class,'bai_viet']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//send mail
Route::get('/send-mail', [\App\Http\Controllers\HomeController::class,'sendMail']);

Route::get('/add-employee', [\App\Http\Controllers\EmployeeController::class, 'addEmployee']);

