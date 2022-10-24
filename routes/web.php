<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


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


Route::get('/register', [AuthController::class, 'registerpage']);

Route::get('/login', [AuthController::class, 'loginpage']);

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');




// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::middleware(['is_admin'])->group (function() {

Route::get('/home', [AuthController::class, 'index'])->name('index');

});
