<?php

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class PublicController extends Controller{

    protected $_categories, $_subCategories;

    public function __construct()
    {
        $this->_categories = Category::all();
        $this->_subCategories = SubCategory::all();
    }

    /*chiamata accesso al catalogo totale senza selezione di categoria, ritorna la vista con tutte le categorie */
    public function showMainCatalog(){
        $selectedProducts = Product::paginate(2);
        return view('catalog')
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);
    }

    /* ritorna solo i prodotti della categoria selezionata e la categoria selezionata */
    public function showCatCatalog($categoryID){
        $selectedCategory = Category::where('codCategoria', $categoryID)->get();
        $selectedProducts = Product::where('categoria', $categoryID)->get();

        return view('catalog')
            ->with('selCategory', $selectedCategory)
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);
    }

    /*ritorna i prodotti della sottocategiora selezionata, la categoria e la sottocategoria selezionate */
    public function showSubCatCatalog($categoryID, $subCategoryID){
        $selectedCategory = Category::where('codCategoria', $categoryID)->get();
        $selectedProducts = Product::where('sottoCategoria', $subCategoryID)->paginate(2);
        $selectedSubCategory = SubCategory::where('codSottoCategoria', $subCategoryID)->get();

        return view('catalog')
            ->with('selCategory', $selectedCategory)
            ->with('selSubCategory', $selectedSubCategory)
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);

    }
}

?>