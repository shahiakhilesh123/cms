<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get()->all();
        return view('admin/blogList')->with('blogs', $blogs);
    }
    public function addBlog()
    {
        $file = File::get()->all();
        $categories = Category::get()->all();
        return view('admin/blogAdd')->with('data',['categories' => $categories, 'file' => $file]);
    }
    public function blogAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'sort_desc' => 'required|string',
            'category' => 'required',
        ]);
        $image = '';
        foreach ($request->images as $image) {
            $images[] = $image;
        }
        $image = implode(',',$images);
        Blog::create([
            'name' => $request->name,
            'link' => $request->link,
            'sort_description' => $request->sort_desc,
            'image_ids' => $images,
            'description' => $request->description,
        ]);
    }
}
