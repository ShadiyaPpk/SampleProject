<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/', function(){
    return redirect()->route('login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
  
});

Route::middleware('auth')->group(function(){

  Route::resource("/users", UserController::class);

});


Route::prefix('user')->middleware('auth')->group(function(){

Route::get('/userdashboard',[App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('userdashboard');
Route::get('/profile',[App\Http\Controllers\ProfileController::class,'index'])->name('profile');
Route::post('user/profile/edit_validation',[App\Http\Controllers\ProfileController::class,'edit_validation'])->name('profile.edit_validation');
});

//Route::get('user/profile',[App\Http\Controllers\ProfileController::class,'index'])->name('profile');



 
