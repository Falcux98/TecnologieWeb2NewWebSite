<?php

namespace App\Http\Controllers;

use App\Admin as AppAdmin;
use App\Http\Requests\newStaffRequest;
use App\Models\Admin;

class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
       // $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
    }

    public function index() {
        return view('layoutsAdmin.admin');
    }

    public function showAdminArea(){
        $staff = Admin::where('role', 'staff')->get();
        return view('viewsAdmin.areaAdmin')
            ->with('staffs', $staff);
    }

    public function removeConfermation($staffUsername){
        $staff = Admin::where('username', $staffUsername)->first();

        return view('viewsAdmin.removeStaffConf')
            ->with('staff', $staff);
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

}
