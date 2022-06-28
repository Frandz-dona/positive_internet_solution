<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LivreController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\FormationController;

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
Route::get('/achat_vente_crypto', [ClientController::class, 'achat_vente'])->name('achat_vente_crypto');
Route::get('/livre', [ClientController::class, 'livre'])->name('livre');
Route::get('/affiliation', [ClientController::class, 'affiliation'])->name('affiliation');
Route::get('/formation', [ClientController::class, 'formation'])->name('formation');
Route::get('/a_propos', [ClientController::class, 'a_propos'])->name('a_propos');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/positive_academy', [ClientController::class, 'positive_academy'])->name('positive_academy');
Route::get('/mention_legale', [ClientController::class, 'mention_legale'])->name('mention_legale');
Route::get('/condition_de_vente', [ClientController::class, 'condition_de_vente'])->name('condition_de_vente');
Route::get('/crypto_actu', [ClientController::class, 'crypto_actu'])->name('crypto_actu');
Route::get('/livre_detail/{id}', [ClientController::class, 'livre_detail'])->name('livre_detail');

//end route client



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/admin_connexion_login','interface_admin.login')->name('login');
        Route::post('/check', [AdminController::class,'check'])->name('check');
        // Route::view('/admin_register', 'interface_admin.register')->name('register');
        // Route::post('create',[AdminController::class,'create'])->name('create');
    });
    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/admin_register', 'interface_admin.register')->name('register');
        Route::post('/create',[AdminController::class,'create'])->name('create');
        Route::view('/admin_home', 'interface_admin.home')->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/admin_liste', [AdminController::class, 'admin_liste'])->name('admin_liste');

        Route::get('/adminOne/{id}', [AdminController::class, 'getAdminById'])->name('adminOne');
        Route::get('/status_update/{id}',[AdminController::class, 'status_update'])->name('admin_status_update');



        //categorie
        Route::get('/categorie_liste', [CategorieController::class, 'index'])->name('categorie_liste');
        Route::post('/categorie_ajout', [CategorieController::class, 'store'])->name('store_categorie');
        Route::get('/categorieOne/{id}', [CategorieController::class, 'getCategorieById'])->name('categorieOne');
        Route::get('/categorie_status_update/{id}',[CategorieController::class, 'status_update'])->name('categorie_status_update');
        Route::put('/categorieUpdate', [CategorieController::class, 'categorieUpdate'])->name('categorieUpdate');
        Route::post('/categorieDelete', [CategorieController::class,'categorieDelete'])->name('categorieDelete');


        //livre
        Route::get('/livre_liste', [LivreController::class, 'index'])->name('livre_liste');
        Route::post('/livre_ajout', [LivreController::class, 'store'])->name('store_livre');
        Route::get('/livre_page_ajout', [LivreController::class, 'create'])->name('livre_page_ajout');
        Route::get('/livreOne/{id}', [LivreController::class, 'getLivreById'])->name('livreOne');
        Route::get('/livre_status_update/{id}',[LivreController::class, 'status_update'])->name('livre_status_update');
        Route::put('/livreUpdate', [LivreController::class, 'livreUpdate'])->name('livreUpdate');
        Route::post('/livreDelete', [LivreController::class,'livreDelete'])->name('livreDelete');

        //formationtion
        Route::get('/formation_liste', [FormationController::class, 'index'])->name('formation_liste');
        Route::get('/formation_ajouter', [FormationController::class, 'create'])->name('formation_ajout');
        Route::post('/formation_create', [FormationController::class, 'store'])->name('store_formation');
        Route::get('/formationOne/{id}', [FormationController::class, 'getFormationById'])->name('formationOne');
        Route::get('/formation_status_update/{id}',[FormationController::class, 'status_update'])->name('formation_status_update');
        Route::put('/formationUpdate', [FormationController::class, 'formationUpdate'])->name('formationUpdate');
        Route::post('/formationDelete', [FormationController::class,'formationDelete'])->name('formationDelete');
    });
});


//client authentification
Route::view('/client_login','interface_client/auth.login')->name('client_login');
Route::view('/client_register', 'interface_client/auth.register')->name('client_register');
