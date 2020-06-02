<?php

namespace App\Http\Controllers;

use App\Admin as AppAdmin;
use App\Http\Requests\newStaffRequest;
use App\Models\Admin;
use App\Models\Utente;
use App\User;

class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
    }

    public function index() {
        return view('layoutsAdmin.admin');
    }

    public function showAdminArea(){
        $staff = User::where('role', 'staff')->get();
        $users = User::where('role', 'user')->get();
        return view('viewsAdmin.areaAdmin')
            ->with('staffs', $staff)
            ->with('users', $users);
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

        $staffMemeber = new Admin;

        $staffMemeber->fill($request->validated());

        $staffMemeber->role = "staff";

        $staffMemeber->save();

        return redirect()->action('AdminController@showAdminArea');

    }

    public function showModificaStaff($username){

        $staff = User::where('username', $username)->first();
        return view('viewsAdmin.modificaStaff')
            ->with('staff', $staff);

    }

    public function modificaStaff(){
        
    }

}
