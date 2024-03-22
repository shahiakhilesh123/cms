<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoleModel;
use App\MenuModel;

class RoleController extends Controller
{
    public function index(){
        return view('/admin/role', ["roles"=>RoleModel::get()->toArray()]);
    }
    public function addRole(){
        return view('/admin/addRole', ["menues"=>MenuModel::where('menu_id', 0)->get()->toArray()]);
    }
    
}
