<?php

/*Per il momento è ancora tutto vuoto perchè non so come 
implementeremo le classi del database */

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\SubCategory;

class PublicController extends Controller{

    protected $_categories;
    protected $_subCategories;
    protected $_products;

    public function __construct()
    {
        $this->_categories = new Category;
        $this->_subCategories = new SubCategory;
        $this->_products = new Product;
    }

    /*chiamata accesso al catalogo totale senza selezione di categoria, ritorna la vista con tutte le categorie */
    public function showMainCatalog(){
        $selectedProducts = $this->_products->getAll();
        return view('catalog')
            ->with('prods', $selectedProducts);  
    }

    /* ritorna solo i prodotti della categoria selezionata e la categoria selezionata */
    public function showCatCatalog($categoryID){
        $selectedCategory = $this->_categories->getCategoryByID($categoryID);
        $selectedProducts = $this->_products->getProdsByCategoryID($categoryID);

        return view('catalog')
            ->with('category', $selectedCategory)
            ->with('prods', $selectedProducts);
    }

    /*ritorna i prodotti della sottocategiora selezionata, la categoria e la sottocategoria selezionate */
    public function showSubCatCatalog($categoryID, $subCategoryID){
        $selectedCategory = $this->_categories->getCategoryByID($categoryID);
        $selectedProducts = $this->_products->getProdsByCategoryID($categoryID);
        $selectedSubCategory = $this->_subCategories->getSubCategoryByID($subCategoryID);

        return view('catalog')
            ->with('category', $selectedCategory)
            ->with('subCategory', $selectedSubCategory)
            ->with('prods', $selectedProducts);

    }
}

?>