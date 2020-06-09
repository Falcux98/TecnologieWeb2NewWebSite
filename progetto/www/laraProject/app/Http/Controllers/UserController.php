<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\User;
use App\Http\Requests\EditStaffRequest;
use App\Models\Occupazione;
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


    public function showModificaUser($username){

        $user = User::where('username', $username)->first();
        $occupations = Occupazione::all();
        foreach($occupations as $occ){
            $occupation[$occ->nome] = $occ->nome;
        }
        return view('viewsUser.modificaProfilo')
            ->with('user', $user)
            ->with('occupations', $occupation);

    }


    public function modificaUser(EditStaffRequest $request){

        $userUpdate = new User;
        $userUpdate->fill($request->validated());

        if(empty($userUpdate->occupazione)) $userUpdate->occupazione = '';
        if(empty($userUpdate->residenza)) $userUpdate->residenza = '';

        User::where('username', $userUpdate->username)
            ->update(['nome' => $userUpdate->nome,
                      'cognome' => $userUpdate->cognome,
                      'dataNascita' => $userUpdate->dataNascita,
                      'occupazione' => $userUpdate->occupazione,
                      'residenza' => $userUpdate->residenza]);

        return redirect()->action('UserController@showAreaPersonale');
    }

}
