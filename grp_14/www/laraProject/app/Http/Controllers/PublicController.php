<?php

/*Per il momento è ancora tutto vuoto perchè non so come 
implementeremo le classi del database */

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\SubCategory;

class PublicController extends Controller{

    /*chiamata accesso al catalogo totale senza selezione di categoria, ritorna la vista con tutte le categorie */
    public function showMainCatalog(){
        $selectedProducts = Product::all();
        return view('catalog')
            ->with('prods', $selectedProducts);  
    }

    /* ritorna solo i prodotti della categoria selezionata e la categoria selezionata */
    public function showCatCatalog($categoryID){
        $selectedCategory = Category::where('codCategoria', $categoryID)->get();
        $selectedProducts = Product::where('categoria', $categoryID)->get();

        return view('catalog')
            ->with('category', $selectedCategory)
            ->with('prods', $selectedProducts);
    }

    /*ritorna i prodotti della sottocategiora selezionata, la categoria e la sottocategoria selezionate */
    public function showSubCatCatalog($categoryID, $subCategoryID){
        $selectedCategory = Category::where('codCategoria', $categoryID)->get();
        $selectedProducts = Product::where('sottoCategoria', $subCategoryID)->get();
        $selectedSubCategory = SubCategory::where('codSottoCategoria', $subCategoryID)->get();

        return view('catalog')
            ->with('category', $selectedCategory)
            ->with('subCategory', $selectedSubCategory)
            ->with('prods', $selectedProducts);

    }
}

?>