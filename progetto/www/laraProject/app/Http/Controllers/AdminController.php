<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EditStaffRequest;
use App\Http\Requests\newStaffRequest;
use App\Models\Admin;
use App\Models\Occupazione;
use App\User;

class AdminController extends Controller {
    
    protected $_categories, $_subCategories;
    
    protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
         $this->_categories = Category::all();
        $this->_subCategories = SubCategory::all();
       
    }

    public function index() {
        return view('home');
    }

    public function showAdminArea(){
        $staff = User::where('role', 'staff')->get();
        $users = User::where('role', 'user')->get();
        $occupations  = Occupazione::select('nome')->get();

        /*riordino l'array */
        foreach($occupations as $occ){
            $occupation[$occ->nome] = $occ->nome;
        }

        return view('viewsAdmin.areaAdmin')
            ->with('staffs', $staff)
            ->with('users', $users)
            ->with('occupazione', $occupation);
    }

    public function removeConfermation($username){
        $user = User::where('username', $username)->first();

        return view('viewsAdmin.removeStaffConf')
            ->with('user', $user);
    }

    public function removeStaffMember(){
        $username = request('delete');
        Admin::where('username', $username)->delete();

        return redirect()->action('AdminController@showAdminArea');
    }

    public function addNewStaffMemeber(newStaffRequest $request){

        $staffMember = new User;

        $staffMember->fill($request->validated());

        if(empty($staffMember->occupazione)) $staffMember->occupazione = '';
        if(empty($staffMember->residenza)) $staffMember->residenza = '';

        $staffMember->role = "staff";

        $staffMember->password = Hash::make($request->password);

        $staffMember->save();

        return response()->json(['redirect' => route('AdminArea')]);

    }

    public function showModificaStaff($username){

        $staff = User::where('username', $username)->first();
        return view('viewsAdmin.modificaStaff')
            ->with('staff', $staff);

    }

    public function modificaStaff(EditStaffRequest $request){

        $staffUpdate = new User;
        $staffUpdate->fill($request->validated());

        if(empty($staffUpdate->occupazione)) $staffUpdate->occupazione = '';
        if(empty($staffUpdate->residenza)) $staffUpdate->residenza = '';

        User::where('username', $staffUpdate->username)
            ->update(['nome' => $staffUpdate->nome,
                      'cognome' => $staffUpdate->cognome,
                      'dataNascita' => $staffUpdate->dataNascita,
                      'occupazione' => $staffUpdate->occupazione,
                      'residenza' => $staffUpdate->residenza]);

        return redirect()->action('AdminController@showAdminArea');
    }
}
