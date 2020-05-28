<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function removeElementConfirm($elementID){

        $product = Product::where('codProdotto', $elementID)->first();
        return view('removeConfirm')
            ->with('prod', $product);
    }

    public function removeElement(){
        $codProdotto = request('delete');
        Product::where('codprodotto', $codProdotto)->delete();

        $selectedProducts = Product::paginate(2);

        return view('staffCat')
        ->with('prods', $selectedProducts)
        ->with('categories', $this->_categories)
        ->with('subCategories', $this->_subCategories);
    }

    public function showStaffArea(){
        return view('staffArea')
        ->with('categories', $this->_categories)
        ->with('subCategories', $this->_subCategories);
    }

    public function storeNewProduct(NewProductRequest $request){

        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->foto = $imageName;
        

        if($product->percentualeSconto != 0){
            $product->inPromozione = TRUE;
        } else {
            $product->inPromozione = FALSE;
        }

        $category = SubCategory::where('sottocategoria', $product->sottocategoria)->get();

        $product->categoria = $category->codCategoria;

        $product->save();

        if(!is_null($imageName)){
            $path = public_path() . 'images/products';
            $image->move($path, $imageName);
        }

        return view('StaffHome');
    }
}
