<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class StaffController extends Controller
{    
    protected $_categories, $_subCategories;

    public function __construct()
    {
        $this->_categories = Category::all();
        $this->_subCategories = SubCategory::all();
    }

    public function index(){
        return view('layouts.staff');
    }

    public function showMainCatalog(){
        $selectedProducts = Product::paginate(2);
        return view('staffCat')
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);
    }

    public function showSubCatCatalog($categoryID, $subCategoryID){
        $selectedCategory = Category::where('codCategoria', $categoryID)->get();
        $selectedProducts = Product::where('sottoCategoria', $subCategoryID)->paginate(2);
        $selectedSubCategory = SubCategory::where('codSottoCategoria', $subCategoryID)->get();

        return view('staffCat')
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);

    }

    public function removeElement($elementID){

        Product::find($elementID)->delete();
        return view('staffCat')
            ->with('prods', Product::paginate(2))
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);
    }
}
