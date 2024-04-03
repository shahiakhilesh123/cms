<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class TestController extends Controller
{
    public function index()
    {
        $data = Menu::all();
        return view('admin/test23')->with('menus', $data);
    }
}
