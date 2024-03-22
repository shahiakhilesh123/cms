<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFileRequest;
use App\Models\Category;
use App\Models\File;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get()->all();
        return view('admin/category')->with('categories', $categories);
    }

    public function addCategory()
    {
        $categories = Category::get()->all();
        return view('admin/addCategory')->with('categories', $categories);
    }
    public function categoryAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        $file = File::create(
            [
                "user_id" => '1',
                "file_name" => time() . '.'. $request->file->extension(),
                "file_type" => $request->file->getClientMimeType(),
                "file_size" => $request->file->getSize(),
                "full_path" => public_path('file'),
            ]
        );
        Category::create([
            'name' => $request->name,
            'image_name' => $file->id,
            'home_page_status' => 1,
            'category_id' => $request->category,
        ]);
        return redirect('/categories');
    }
    public function categoryEdit(Request $request)
    {
        echo "this is test";
    }
}
