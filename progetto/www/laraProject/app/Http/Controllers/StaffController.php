<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\NewCatRequest;
use App\Http\Requests\NewSubcatRequest;

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

    public function removeElementConfirm($elementID){

        $product = Product::where('codProdotto', $elementID)->first();
        return view('viewsStaff.removeConfirm')
            ->with('prod', $product);
    }

    public function removeElement(){
        $codProdotto = request('delete');
        Product::where('codprodotto', $codProdotto)->delete();

        $selectedProducts = Product::paginate(2);

        return redirect()->action('PublicController@showMainCatalog');
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

        /*return redirect()->action('PublicController@showMainCatalog');*/
        return response()->json(['redirect' => route('StaffArea')]); 
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


        Product::where('codProdotto',$productUpdate->codProdotto)
            ->update(['nome' =>$productUpdate->nome,
                      'descrizioneBreve' =>$productUpdate->descrizioneBreve,
                      'descrizioneEstesa' =>$productUpdate->descrizioneEstesa,
                      'prezzo' =>$productUpdate->prezzo,
                      'foto' =>$productUpdate->foto,
                      'percentualeSconto' =>$productUpdate->percentualeSconto,
                      'inPromozione' =>$productUpdate->inPromozione,
                      'categoria' =>$productUpdate->categoria,
                      'sottocategoria' =>$productUpdate->sottocategoria]);

        return redirect()->action('PublicController@showMainCatalog');
    }

    public function addNewCategory(NewCatRequest $request){
         
        $category = new Category;
        $category->nome = $request->nome;
        $category->save();

        return redirect()->action('StaffController@showStaffArea');

    }

    public function addNewSubCategory(NewSubcatRequest $request){

        $subCategory = new SubCategory;
        $subCategory->categoria = $request->categoria;
        $subCategory->nome = $request->nome;
        $subCategory->save();

        return redirect()->action('StaffController@showStaffArea');
    }
}
