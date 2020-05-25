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

Route::get('/Catalog', 'PublicController@showMainCatalog') -> name('Catalog');

Route::get('/AreaPersonale', 'PublicController@showPrivateArea') ->name('PrivateArea');

Route::view('/', 'Home') -> name('Home');

Route::view('/PrivacyPolicy', 'PrivacyPolicy') -> name('Privacy Policy');

Route::view('/DoveSiamo', 'DoveSiamo') -> name('Dove Siamo');

Route::view('/ChiSiamo', 'ChiSiamo') -> name('Chi Siamo');

Route::view('/LoginRegistrati', 'LoginRegistrati') -> name('Login Registrati');
