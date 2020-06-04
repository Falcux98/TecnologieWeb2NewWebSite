<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EditProductRequest;

class StaffController extends Controller
{
    protected $_categories, $_subCategories;


    public function __construct()
    {
        $this->_categories = Category::all();
        $this->_subCategories = SubCategory::all();
        $this->middleware('can:isStaff');
    ;
    }

    public function index(){
        return view('home');
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



    public function showModificaProdotto($codProdotto){

        $product = Product::where('codProdotto', $codProdotto)->first();
        return view('viewsStaff.modificaProdotto')
            ->with('prod', $product)
            ->with('categories', $this->_categories)
            ->with('subCategories', $this->_subCategories);

    }


    public function modificaProdotto(EditProductRequest $request){

        $productUpdate = new Product;
       $productUpdate->fill($request->validated());

        if(empty($productUpdate->occupazione))$productUpdate->occupazione = '';
        if(empty($productUpdate->residenza))$productUpdate->residenza = '';

        User::where('codProdotto',$productUpdate->codProdotto)
            ->update(['nome' =>$productUpdate->nome,
                      'descrizioneBreve' =>$productUpdate->descrizioneBreve,
                      'descrizioneEstesa' =>$productUpdate->descrizioneEstesa,
                      'prezzo' =>$productUpdate->prezzo,
                      'foto' =>$productUpdate->foto,
                      'percentualeSconto' =>$productUpdate->percentualeSconto,
                      'inPromozione' =>$productUpdate->inPromozione,
                      'categoria' =>$productUpdate->categoria,
                      'sottocategoria' =>$productUpdate->sottocategoria]);

        return redirect()->action('StaffController@showMainCatalog');
    }
}
