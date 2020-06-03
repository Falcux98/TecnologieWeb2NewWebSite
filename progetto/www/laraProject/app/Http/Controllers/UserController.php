<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class UserController extends Controller {
 protected $_categories, $_subCategories, $_users;
 
    public function __construct() {
       
        $this->_categories = Category::all();
        $this->_subCategories = SubCategory::all();
        $this->middleware('can:isUser');
    }

    public function index() {
        return view('home');
    }
    
   public function showAreaPersonale(){
   return view('viewsUser.areapersonale');
 
 }
 
 
 
    public function showMainCatalog(){
        $selectedProducts = Product::paginate(2);
        return view('catalog')
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);
    }

    public function showSubCatCatalog($categoryID, $subCategoryID){
        $selectedCategory = Category::where('codCategoria', $categoryID)->get();
        $selectedProducts = Product::where('sottoCategoria', $subCategoryID)->paginate(2);
        $selectedSubCategory = SubCategory::where('codSottoCategoria', $subCategoryID)->get();

        return view('viewsStaff.staffCat')
            ->with('prods', $selectedProducts)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);

    }
}
