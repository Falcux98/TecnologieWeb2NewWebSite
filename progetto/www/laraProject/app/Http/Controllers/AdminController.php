<?php

namespace App\Http\Controllers;

use App\Admin as AppAdmin;
use App\Http\Requests\newStaffRequest;
use App\Models\Admin;

class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
     //   $this->_adminModel = new Admin;
    }

    public function index() {
        return view('layoutsAdmin.admin');
    }

    public function showAdminArea(){
        $staff = Admin::where('role', 'staff')->get();
        return view('viewsAdmin.areaAdmin')
            ->with('staffs', $staff);
    }

    public function addNewStaffMemeber(newStaffRequest $request){

        $staffMemeber = new Admin;

        $staffMemeber->fill($request->validated());

        $staffMemeber->role = "staff";

        $staffMemeber->save();

        return redirect()->action('AdminController@index');

    }

}
