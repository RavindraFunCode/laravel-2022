<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;

use App\Models\User;

use Illuminate\Http\Request;

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

Route::get('/', [DemoController::class, 'index']);
// Route::get('/about', [DemoController::class, 'about']);
//or
Route::get('/about', 'App\Http\Controllers\DemoController@about');
Route::get('/course', SingleActionController::class);


Route::middleware(['verify_user'])->group(function(){
	Route::resource('/photo', PhotoController::class);
	Route::get('/form', [RegistrationController::class, 'index']);
	Route::post('/register', [RegistrationController::class, 'store']);
	Route::get('/form-component', [RegistrationController::class, 'component']);
});

/*Route::get('user', function(){
	$user = User::all()->toArray();
	print_r($user);
});*/
	Route::get('/user-data/{id}', [UserController::class, 'show']);
Route::group(['prefix'=>'web', 'middleware'=>['verify_user']], function(){

	Route::get('/user-form', [UserController::class, 'create'])->name('user.form');//->middleware('user_auth');
	Route::post('/user-register', [UserController::class, 'store'])->name('user.register');
	Route::get('/user-list', [UserController::class, 'index'])->name('user.list')->middleware('verify_user');
	Route::get('/user-delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
	Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
	Route::post('/user-update/{id}', [UserController::class, 'update'])->name('user.update');
	

	Route::get('/user-list/trash', [UserController::class, 'trash'])->name('user.list.trash');
	Route::get('/user-delete-force/{id}', [UserController::class, 'forceDelete'])->name('user.force.delete');
	Route::get('/user-restore/{id}', [UserController::class, 'restore'])->name('user.restore');
});

//sessions

Route::get('all-session', function(){
	p(session()->all());

});
Route::get('set-session', function(Request $req){
	$req->session()->put('user_session', "Ravindra");
	$req->session()->put('user_id', ['id'=>1, 'name'=>"Ravindra Maurya"]);
	$req->session()->flash('success', "Flash Inserted");
});
Route::get('destroy-session', function(Request $req){
	// session()->forget('user_session');
	//or
	// session()->forget(['user_session', 'user_id']);
	session()->flush();
});


