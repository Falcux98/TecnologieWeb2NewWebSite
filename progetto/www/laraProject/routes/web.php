<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;
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








//AREA PUBBLICA

Route::get('/categories/{categoriesID}/subCategories/{subCategories}', 'PublicController@showSubCatCatalog') -> name('subCategory');

Route::get('/catalog', 'PublicController@showMainCatalog') -> name('Catalog');

Route::view('/', 'home') -> name('Home');

Route::view('/privacypolicy', 'privacypolicy') -> name('Privacy Policy');

Route::view('/dovesiamo', 'dovesiamo') -> name('Dove Siamo');

Route::view('/chisiamo', 'chisiamo') -> name('Chi Siamo');





//AREA USER

Route::prefix('user')->group(function(){
    Route::get('/', 'UserController@index')->name('UserHome')->middleware('can:isUser'); // per attivare l'autorizzazione

    Route::get('/areaPersonale', 'UserController@showAreaPersonale') -> name('AreaPersonale');

    Route::get('/modificaProfilo/{username}', 'UserController@showModificaUser') -> name('showModificaUser');

    Route::post('/modificaProfilo', 'UserController@modificaUser') -> name('modificaUser.modifica');
});



//AREA STAFF
Route::prefix('staff')->group(function(){
    Route::get('/', 'StaffController@index') ->name('StaffHome');

    Route::get('/catalog/remove/{removeID}', 'staffController@removeElementConfirm') ->name('removeElementConf');

    Route::delete('/catalog', 'StaffController@removeElement') ->name('removeElement');

    Route::get('/areaStaff', 'StaffController@showStaffArea') -> name('StaffArea');

    Route::post('/areaStaff', 'StaffController@storeNewProduct') -> name('StaffArea.store');

    Route::post('/areaStaff/addCat', 'StaffController@addNewCategory') -> name('StaffArea.aggiungiCategoria');

    Route::post('/areaStaff/addSubCat', 'StaffController@addNewSubCategory') -> name('StaffArea.aggiungiSottocategoria');

});


Route::prefix('admin')->group(function(){

     Route::get('/', 'AdminController@index') ->name('AdminHome')->middleware('can:isAdmin');

     Route::get('/removeConfirm/{staffUsername}', 'AdminController@removeConfermation') -> name('removeConf');

     Route::get('/modificaStaff/{staffUsername}', 'AdminController@showModificaStaff') -> name('showModificaStaff');

     Route::post('/modificaStaff', 'AdminController@modificaStaff') -> name('modificaStaff.modifica');

     Route::get('/areaAdmin', 'AdminController@showAdminArea') -> name('AdminArea');

     Route::post('/areadAdmin', 'AdminController@addNewStaffMemeber') -> name('AdminArea.addStaff');

     Route::post('/removeStaffConfirm', 'AdminController@removeStaffMember') -> name('AdminArea.removeStaff');
});









//Area AUTENTICAZIONE

//Auth::routes();

Route::get('loginregistrati', 'Auth\LoginController@showLoginForm')
        ->name('loginregistrati');

Route::post('loginregistrati', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

 Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


//Route::post('/accesso/gestiscilogin', 'AccessoController@gestisciLogin');
//Route::get('/accesso/loginok', 'AccessoController@loginok');



//Rotte inseritee dal comando artisan "ui vue --auth"
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
