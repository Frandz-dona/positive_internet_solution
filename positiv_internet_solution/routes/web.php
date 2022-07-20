<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LivreController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\Client\AuthClientController;

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

// route client
Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/service', [ClientController::class, 'service'])->name("service");
Route::get('/achat-vente-crypto', [ClientController::class, 'achat_vente'])->name('achat_vente_crypto');
Route::get('/livre', [ClientController::class, 'livre'])->name('livre');
Route::get('/affiliation', [ClientController::class, 'affiliation'])->name('affiliation');
Route::get('/formation', [ClientController::class, 'formation'])->name('formation');
Route::get('/a-propos', [ClientController::class, 'a_propos'])->name('a_propos');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/positive-academy', [ClientController::class, 'positive_academy'])->name('positive_academy');
Route::get('/mention-legale', [ClientController::class, 'mention_legale'])->name('mention_legale');
Route::get('/condition-de-vente', [ClientController::class, 'condition_de_vente'])->name('condition_de_vente');
Route::get('/crypto-actu', [ClientController::class, 'crypto_actu'])->name('crypto_actu');
Route::get('/livre-detail/{id}', [ClientController::class, 'livre_detail'])->name('livre_detail');
Route::get('/formation-detail/{id}', [ClientController::class, 'formation_detail'])->name('formation_detail');
//end route client



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/admin_login','interface_admin.login')->name('login');
        Route::post('/check', [AdminController::class,'check'])->name('check');
        // Route::view('/admin_register', 'interface_admin.register')->name('register');
        // Route::post('create',[AdminController::class,'create'])->name('create');
    });
        Route::middleware(['auth:admin'])->group(function(){
        Route::view('/admin-register', 'interface_admin.register')->name('register');
        Route::post('/create',[AdminController::class,'create'])->name('create');
        Route::view('/admin-home', 'interface_admin.home')->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/admin-liste', [AdminController::class, 'admin_liste'])->name('admin_liste');

        Route::get('/adminOne/{id}', [AdminController::class, 'getAdminById'])->name('adminOne');
        Route::get('/status-update/{id}',[AdminController::class, 'status_update'])->name('admin_status_update');



        //categorie
        Route::get('/categorie-liste', [CategorieController::class, 'index'])->name('categorie_liste');
        Route::post('/categorie-ajout', [CategorieController::class, 'store'])->name('store_categorie');
        Route::get('/categorieOne/{id}', [CategorieController::class, 'getCategorieById'])->name('categorieOne');
        Route::get('/categorie-status-update/{id}',[CategorieController::class, 'status_update'])->name('categorie_status_update');
        Route::put('/categorieUpdate', [CategorieController::class, 'categorieUpdate'])->name('categorieUpdate');
        Route::post('/categorieDelete', [CategorieController::class,'categorieDelete'])->name('categorieDelete');


        //livre
        Route::get('/livre-liste', [LivreController::class, 'index'])->name('livre_liste');
        Route::post('/livre-ajout', [LivreController::class, 'store'])->name('store_livre');
        Route::get('/livre-page-ajout', [LivreController::class, 'create'])->name('livre_page_ajout');
        Route::get('/livreOne/{id}', [LivreController::class, 'getLivreById'])->name('livreOne');
        Route::get('/livre-status-update/{id}',[LivreController::class, 'status_update'])->name('livre_status_update');
        Route::put('/livreUpdate', [LivreController::class, 'livreUpdate'])->name('livreUpdate');
        Route::post('/livreDelete', [LivreController::class,'livreDelete'])->name('livreDelete');

        //formationtion
        Route::get('/formation-liste', [FormationController::class, 'index'])->name('formation_liste');
        Route::get('/formation-ajouter', [FormationController::class, 'create'])->name('formation_ajout');
        Route::post('/formation-create', [FormationController::class, 'store'])->name('store_formation');
        Route::get('/formationOne/{id}', [FormationController::class, 'getFormationById'])->name('formationOne');
        Route::get('/formation-status-update/{id}',[FormationController::class, 'status_update'])->name('formation_status_update');
        Route::put('/formationUpdate', [FormationController::class, 'formationUpdate'])->name('formationUpdate');
        Route::post('/formationDelete', [FormationController::class,'formationDelete'])->name('formationDelete');

        //utilisateurs
        Route::get('/utilisateur_liste', [AdminController::class, 'utilisateur_liste'])->name('utilisateur_liste');
    });
});

// client
Route::prefix('client')->name('client.')->group(function(){
    Route::middleware(['guest:client'])->group(function(){
    Route::view('/client-login','interface_client/auth.login')->name('client_login');
    Route::view('/client-register', 'interface_client/auth.register')->name('client_register');
    Route::post('/create',[AuthClientController::class,'create'])->name('create');
    Route::post('/check', [AuthClientController::class,'check'])->name('check');
    });
        Route::middleware(['auth:client'])->group(function(){
        Route::view('/client_home', 'interface_client/auth/dashboard')->name('dashboard');
        Route::post('/logout', [AuthClientController::class, 'logout'])->name('logout');

    });
});


//client authentification

