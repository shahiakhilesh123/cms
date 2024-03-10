<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menus =  Menu::all();
        return response()->json([
            'status' => 'success',
            'menu' => $menus,
        ]);
    }

    public function MenuList(Request $request){
        $data = Menu::all();
        return view('admin/menuList')->with('data', $data);
    } 
    public function add(Request $request) {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'type' => 'required|integer',
            'menu_link' => 'required|string|max:255',
            'menu_class'=>'required|string|max:255',
        ]);
        $menu = Menu::create([
            'menu_name' => $request->menu_name,
            'menu_id' => $request->menu_id,
            'status' => '1',
            'type' => $request->type,
            'menu_link' => $request->menu_link,
            'menu_class' => $request->menu_class,
        ]);
        return response()->json([
            'status' => 'success',
            'menu' => $menu,
        ]);
    }

    public function edit(Request $request) {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'type' => 'required|integer',
            'menu_link' => 'required|string|max:255',
            'menu_class'=>'required|string|max:255',
        ]);
        $menu = Menu::where('id', $request->id)->update([
            'menu_name' => $request->menu_name,
            'menu_id' => $request->menu_id,
            'status' => '1',
            'type' => $request->type,
            'menu_link' => $request->menu_link,
            'menu_class' => $request->menu_class,
        ]);
        return response()->json([
            'status' => 'success',
            'menu' => $menu,
        ]);
    }
}
