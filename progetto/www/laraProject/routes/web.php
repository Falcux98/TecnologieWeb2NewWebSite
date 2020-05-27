<?php

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

Route::get('/categories/{categoriesID}', 'PublicController@showCatCatalog') -> name('Category');

Route::get('/catalog', 'PublicController@showMainCatalog') -> name('Catalog');

Route::get('/areapersonale', 'PublicController@showPrivateArea') ->name('PrivateArea');

Route::view('/loginregistrati', 'loginregistrati') ->name('Login Registrati');

Route::post('/LoginRegistrati', 'Auth\LoginController@Login') ->name('Login Registrati');

Route::view('/', 'home') -> name('Home');

Route::view('/privacypolicy', 'privacypolicy') -> name('Privacy Policy');

Route::view('/dovesiamo', 'dovesiamo') -> name('Dove Siamo');

Route::view('/chisiamo', 'chisiamo') -> name('Chi Siamo');


Route::get('/staff', 'StaffController@index') ->name('StaffHome');

Route::get('/staff/catalog', 'StaffController@showMainCatalog') -> name('StaffCatalog');

Route::get('/staff/catalog/remove/{removeID}', 'staffController@removeElement') ->name('removeElement');

Route::view('/staff/dovesiamo', 'dovesiamo') -> name('DoveSiamoStaff');

Route::get('staff/categories/{categoriesID}/subCategories/{subCategories}', 'StaffController@showSubCatCatalog') -> name('staffSubCategory');

Route::get('/admin', 'AdminController@index') ->name('admin');

/*Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');
*/

// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');
