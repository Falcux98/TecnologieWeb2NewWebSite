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

Route::get('/areaPersonale', 'PublicController@showPrivateArea') ->name('PrivateArea');

Route::view('/', 'home') -> name('Home');

Route::view('/privacyPolicy', 'privacypolicy') -> name('Privacy Policy');

Route::view('/doveSiamo', 'dovesiamo') -> name('Dove Siamo');

Route::view('/chiSiamo', 'chisiamo') -> name('Chi Siamo');

Route::view('/loginRegistrati', 'loginregistrati') -> name('Login Registrati');
