<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\File;
class CategoryController extends Controller
{
    public function index()
    {
        return view('admin/category');
    }

    public function addCategory()
    {
        $categories = Category::get()->all();
        return view('admin/addCategory')->with('categories', $categories);
    }
    public function categoryAdd(Request $request)
    {
        echo auth()->id();
        echo "this is test";
        echo $fileName = time() . '.'. $request->file->extension();  
        echo "</br>";
        echo $type = $request->file->getClientMimeType();
        echo "</br>";
        echo $size = $request->file->getSize();
        echo "</br>";
        echo $request->file->move(public_path('file'), $fileName);
    }
}
