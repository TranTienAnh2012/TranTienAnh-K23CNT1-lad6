<?php
use App\Http\Controllers\ttaSessioncontroller;
use App\Http\Controllers\ttaSessionLoginController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tta-session-get',[ttaSessioncontroller::class,'TTaGetSession'])->name('session.get');
Route::get('/tta-session-store',[ttaSessioncontroller::class,'ttastoreSessionData'])->name('session.store');
Route::get('/tta-session-delete',[ttaSessioncontroller::class,'ttadeleteSession'])->name('session.delete');

Route::get('/tta-login',[ttaSessionLoginController::class,'ttalogin'])->name('session.login');
Route::get('/tta-logout',[ttaSessionLoginController::class,'ttalogin'])->name('session.login');
Route::post('/tta-login',[ttaSessionLoginController::class,'ttaloginSubmit'])->name('session.submit');

