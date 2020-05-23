<?php

/*Per il momento è ancora tutto vuoto perchè non so come 
implementeremo le classi del database */

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use App\Catalog;

class PublicController extends Controller{

    protected $_catalog;

    public function __construct()
    {
        $this->_catalog = new Catalog;
    }

    /*chiamata accesso al catalogo totale senza selezione di categoria, ritorna la vista con tutte le categorie */
    public function showMainCatalog(){
        $products = $this->_catalog->getAllProds();
        return view('catalog')
        ->with('prods', $products);    
    }

    public function showCatCatalog($categoryID){
        $categories = $this->_catalog->getAllCategories();

        $selectedCategory = $this->$categories->where('categoryID', $categoryID)->first();

        $products = $this->_catalog->getProdsByCategoryID();

        return view('catalog')
            ->with('selectedCategory', $selectedCategory)
            ->with('prods', $products);
    }

    public function showSubCatCatalog($categoryID, $subCategoryID){

    }

}

?>