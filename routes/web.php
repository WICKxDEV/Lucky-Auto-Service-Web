<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->name('home')->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /* Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('home'); */
    Route::get('/dashboard',[HomeController::class,'redirect'])->name('home');
}); 

Route::get('/add_package_view',[AdminController::class,'addview']);

Route::post('/upload_package',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showpackages',[AdminController::class,'showpackages']);

Route::get('/deletepackge/{id}',[AdminController::class,'deletepackge']);

Route::get('/updatepackage/{id}',[AdminController::class,'updatepackage']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/dashboard', [AdminController::class, 'showappointmentstatus'])->name('admin.showappointmentstatus');




Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');

Route::get('/service', function () {
    return view('user.service');
})->name('service');


