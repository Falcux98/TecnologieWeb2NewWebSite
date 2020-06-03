<?php

namespace App\Http\Controllers;

use App\Admin as AppAdmin;
use App\Http\Requests\EditStaffRequest;
use App\Http\Requests\newStaffRequest;
use App\Models\Admin;
use App\Models\Utente;
use App\User;

class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
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

        $staffMember = new User;

        $staffMember->fill($request->validated());

        if(empty($staffMember->occupazione)) $staffMember->occupazione = '';
        if(empty($staffMember->residenza)) $staffMember->residenza = '';

        $staffMember->role = "staff";

        $staffMember->save();

        return redirect()->action('AdminController@showAdminArea');

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
