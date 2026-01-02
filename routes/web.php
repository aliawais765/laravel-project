<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[UserController::class,'home'])->name('home');


Route::get('/adminbanklist',[AdminController::class,'adminbanklistspage'])->name('ddd');

Route::get('/admin/dashboard', function () {
    return view('Admin.dashboard');
});
Route::post('/login/store',[AdminController::class,'loginstore'])->name('login.store');

Route::get('/login', [AdminController::class,'login'])->name('user.login');



Route::get('/admin/bankloan', [AdminController:: class, 'bankloan'])->name('bankloan');
   


Route::get('/admin/personal' , function(){
    return view('Admin.personal-loan');
});

Route::get('/contactus', [UserController::class, 'contactus'])->name('user.contact-us');



Route::get('/business/loan', [UserController::class, 'buisness'])->name('user.buisness');





Route::get('/personal/loan', [UserController::class, 'personal'])->name('user.personal-loan');



Route::get('/car', [UserController::class, 'car'])->name('user.car-auto');



Route::get('/home/loan',[ UserController::class, 'homeloan'])->name('user.home-loan');
Route::get('/admin/personal',[AdminController::class,'adminpersonal'])->name('adminpersonal');
Route::get('/admin/buisness',[AdminController::class,'adminbuisness'])->name('adminbuisness');





Route::get('/banks/detail',[ UserController::class, 'alfalah'])->name('user.alfalah');



Route::get('/admin/typeform',[ AdminController::class, 'type'])->name('admin.type');







Route::get('/Admin/homeloan',[AdminController::class,'adminhomeloan'])->name('adminhomeloan');



Route::get('/Admin/car-loan',[AdminController::class,'admincarloan'])->name('admincarloan');

Route::get('/user/bank-list',[UserController::class,'banklist'])->name('user.banklist');

    Route::get('admin/banklist',[AdminController::class,'adminbanklist'])->name('admin-banklist');

Route::post('/bank/store', [UserController::class, 'store'])->name('bankloan.store');



Route::post('/type/store', [UserController::class, 'type'])->name('type.store');
Route::post('/banklist/store',[UserController::class,'bankliststore'])->name('banklist.store');


Route::get('/edit/personalloan/{id}',[AdminController::class,'editpersonalloan'])->name('editpersonalloan');
Route::get('/type/form',function(){

    return view('admin.typeform');
});

Route::get('/edit/buisnessloan/{id}',[AdminController::class,'editbuisnessloan'])->name('editbuisnessloan');
Route::get('/edit/homeloan/{id}',[AdminController::class,'edithomeloan'])->name('edithomeloan');
Route::post('/updatehomeloan/{id}',[AdminController::class,'updatehomeloan'])->name('updatehomeloan');

Route::get('/edit/carloan/{id}',[AdminController::class,'editcarloan'])->name('editcarloan');
Route::post('/updatecarloan/{id}',[AdminController::class,'updatecarloan'])->name('updatecarloan');

Route::post('/updatepersonalloan/{id}',[AdminController::class,'updatepersonalloan'])->name('updatepersonalloan');
Route::post('/updatebuisnessloan/{id}',[AdminController::class,'updatebuisnessloan'])->name('updatebuisnessloan');
Route::delete('/deletecarloanitem/{id}',[AdminController::class,'destroyadmincarloan'])->name('deletecarloan');
Route::delete('/deletepersonalloanitem/{id}',[AdminController::class,'destroypersonalloan'])->name('deletepersonalloan');
Route::delete('/deletehomeloanitem/{id}',[AdminController::class,'destroyhomeloan'])->name('deletehomeloan');

Route::delete('/deletebuisnessloanitem/{id}',[AdminController::class,'destroybuisnessloan'])->name('deletebuisnessloan');
Route::get('/regud',function(){
    return view('user.regud');
});
Route::get('editbanklist/{id}',[AdminController::class,'editbanklist'])->name('editbanklist');
Route::post('updatebanklist/{id}',[AdminController::class,'updatebanklist'])->name('updatebanklist');
Route::get('addbanklist',[AdminController::class,'addbanklist'])->name('addbanklist');
Route::delete('/delete/banklist/{id}',[AdminController::class,'deletebanklist'])->name('deletebanklist');