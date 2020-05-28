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
        return view('layoutsStaff.staff');
    }

    public function showMainCatalog(){
        $selectedProducts = Product::paginate(2);
        return view('viewsStaff.staffCat')
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

    public function removeElementConfirm($elementID){

        $product = Product::where('codProdotto', $elementID)->first();
        return view('viewsStaff.removeConfirm')
            ->with('prod', $product);
    }

    public function removeElement(){
        $codProdotto = request('delete');
        Product::where('codprodotto', $codProdotto)->delete();

        $selectedProducts = Product::paginate(2);

        return view('viewsStaff.staffCat')
        ->with('prods', $selectedProducts)
        ->with('categories', $this->_categories)
        ->with('subCategories', $this->_subCategories);
    }

    public function showStaffArea(){
        return view('viewsStaff.staffArea')
        ->with('categories', $this->_categories)
        ->with('subCategories', $this->_subCategories);
    }

    public function storeNewProduct(NewProductRequest $request){

        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = 'noImage.jpg';
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->foto = $imageName;
        

        if($product->percentualeSconto != 0){
            $product->inPromozione = TRUE;
        } else {
            $product->inPromozione = FALSE;
        }

        $subCategory = SubCategory::where('codSottocategoria', $product->sottocategoria)->first();

        $product->categoria = $subCategory->categoria;

        $product->save();

        if(strcmp($imageName, 'noImage.jpg') != 0){
            $path = public_path() . '/images/products';
            $image->move($path, $imageName);
        }

        return redirect()->action('StaffController@showMainCatalog');
    }
}
