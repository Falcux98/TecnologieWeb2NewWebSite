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

Route::get('/user', 'UserController@index')->name('UserHome')->middleware('can:isUser'); // per attivare l'autorizzazione

Route::get('/user/areaPersonale', 'UserController@showAreaPersonale') -> name('AreaPersonale');

Route::get('/user/catalog', 'UserController@showMainCatalog') -> name('UserCatalog');

Route::view('/user/dovesiamo', 'dovesiamo') -> name('DoveSiamoUser');


//AREA STAFF
Route::get('/staff', 'StaffController@index') ->name('StaffHome');

Route::get('/staff/catalog', 'StaffController@showMainCatalog') -> name('StaffCatalog');

Route::get('/staff/catalog/remove/{removeID}', 'staffController@removeElementConfirm') ->name('removeElementConf');

Route::delete('/staff/catalog', 'StaffController@removeElement') ->name('removeElement');

Route::view('/staff/dovesiamo', 'dovesiamo') -> name('DoveSiamoStaff');

Route::get('staff/categories/{categoriesID}/subCategories/{subCategories}', 'StaffController@showSubCatCatalog') -> name('staffSubCategory');

Route::get('/staff/areaStaff', 'StaffController@showStaffArea') -> name('StaffArea');

Route::post('/staff/areaStaff', 'StaffController@storeNewProduct') -> name('StaffArea.store');


//AREA ADMIN
Route::get('/admin', 'AdminController@index') ->name('AdminHome')->middleware('can:isAdmin');

Route::get('/admin/removeConfirm/{staffUsername}', 'AdminController@removeConfermation') -> name('removeConf');

Route::get('admin/modificaStaff/{staffUsername}', 'AdminController@showModificaStaff') -> name('showModificaStaff');

Route::post('admin/modificaStaff', 'AdminController@modificaStaff') -> name('modificaStaff.modifica');

Route::get('/admin/areaAdmin', 'AdminController@showAdminArea') -> name('AdminArea');

Route::post('/admin/areadAdmin', 'AdminController@addNewStaffMemeber') -> name('AdminArea.addStaff');

Route::post('/admin/removeStaffConfirm', 'AdminController@removeStaffMember') -> name('AdminArea.removeStaff');







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
