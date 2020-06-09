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

       if($request->hasFile('newfoto')){
        $image = $request->file('newfoto');
        $imageName = $image->getClientOriginalName();

        //se il prodotto aveva una foto la rimuovo
        if(strcmp($request->foto, 'noImage.jpg') != 0){
            //ottengo il path della vecchia foto
            $oldImage = getcwd() . '/images/products/' . $request->foto;
            //rimuovo la vecchia foto
            unlink($oldImage);
        }
        
        } else {
            $image = null;
            $imageName = $request->foto;
        }

        if($request->percentualeSconto != 0){
            $inpromozione = TRUE;
        } else {
            $inpromozione = FALSE;
        }

        $subCategory = SubCategory::where('codSottocategoria', $request->sottocategoria)->first();
        $category = $subCategory->categoria;


        Product::where('codProdotto',$request->codProdotto)
            ->update(['nome' =>$request->nome,
                      'descrizioneBreve' =>$request->descrizioneBreve,
                      'descrizioneEstesa' =>$request->descrizioneEstesa,
                      'prezzo' =>$request->prezzo,
                      'foto' =>$imageName,
                      'percentualeSconto' =>$request->percentualeSconto,
                      'inPromozione' =>$inpromozione,
                      'categoria' =>$subCategory->categoria,
                      'sottocategoria' =>$subCategory->codSottocategoria]);

        if(strcmp($imageName, 'noImage.jpg') != 0 && $image!=null){
            $path = public_path() . '/images/products';
            $image->move($path, $imageName);
        }

        return response()->json(['redirect' => route('Catalog')]);
    }

    public function addNewCategory(NewCatRequest $request){
         
        $category = new Category;
        $category->nome = $request->nomeCategoria;
        $category->save();

        return response()->json(['redirect' => route('StaffArea')]); 

    }

    public function addNewSubCategory(NewSubcatRequest $request){

        $subCategory = new SubCategory;
        $subCategory->categoria = $request->categoria;
        $subCategory->nome = $request->nomeSottoCategoria;
        $subCategory->save();

        return response()->json(['redirect' => route('StaffArea')]);
    }
}
