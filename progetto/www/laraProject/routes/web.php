<?php

use App\Http\Controllers\StaffController;
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

Route::get('/categories/{categoriesID}/subCategories/{subCategories}', 'PublicController@showSubCatCatalog') -> name('subCategory');

Route::get('/catalog', 'PublicController@showMainCatalog') -> name('Catalog');

Route::view('/loginregistrati', 'loginregistrati') ->name('Login Registrati');

//oute::get('/LoginRegistrati', 'Auth\LoginController@Login') ->name('Login Registrati');

Route::view('/', 'home') -> name('Home');

Route::view('/privacypolicy', 'privacypolicy') -> name('Privacy Policy');

Route::view('/dovesiamo', 'dovesiamo') -> name('Dove Siamo');

Route::view('/chisiamo', 'chisiamo') -> name('Chi Siamo');



Route::get('/staff', 'StaffController@index') ->name('StaffHome');

Route::get('/staff/catalog', 'StaffController@showMainCatalog') -> name('StaffCatalog');

Route::get('/staff/catalog/remove/{removeID}', 'staffController@removeElementConfirm') ->name('removeElementConf');

Route::delete('/staff/catalog', 'StaffController@removeElement') ->name('removeElement');

Route::view('/staff/dovesiamo', 'dovesiamo') -> name('DoveSiamoStaff');

Route::get('staff/categories/{categoriesID}/subCategories/{subCategories}', 'StaffController@showSubCatCatalog') -> name('staffSubCategory');

Route::get('/staff/areaStaff', 'StaffController@showStaffArea') -> name('StaffArea');

Route::post('/staff/areaStaff', 'StaffController@storeNewProduct') -> name('StaffArea.store');



Route::get('/admin', 'AdminController@index') ->name('admin');



Route::get('/user', 'UserController@index')
        ->name('user'); // per attivare l'autorizzazione

