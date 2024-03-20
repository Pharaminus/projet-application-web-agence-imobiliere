<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UtilisateurController;
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

Route::get('/',[HomeController::class, 'home'])
    ->name('app_home');


// route de teste

// Route::get('/app_acceuil', function(){

//     return view('henga_tchop/acceuil');
// })->name('acceuil');

Route::get('/home', [HomeController::class, 'home'])->name('app_home');


Route::get('/presentation', [HomeController::class, 'presentation'])
    ->name('app_presentation');

//

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('app_logout');

// ==================( routes pour les utilisateurs )====================

Route::match(['get', 'post'], '/dashbord', [UtilisateurController::class, 'dashbord'])
    ->name('app_dashbord');

Route::match(['get', 'post'], '/utilisateur/dashbord-admin', [UtilisateurController::class, 'admin']);
