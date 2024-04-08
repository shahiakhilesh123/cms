<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\File;
use App\Models\State;
use App\Models\District;

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
        $state = State::get()->all();
        $district = District::get()->all();
        return view('admin/blogAdd')->with('data',['categories' => $categories, 'file' => $file, 'states'=>$state, 'district'=> $district]);
    }
    public function blogAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'sort_desc' => 'required|string',
            'category' => 'required',
        ]);
        $images = [];
        if(isset($request->images)) {
            foreach ($request->images as $image) {
                $images[] = $image;
            }
        }
        foreach ($request->category as $category) {
            $categories[] = $category;
        }
        foreach ($request->state as $state) {
            $states[] = $state;
        }
        foreach ($request->district as $district) {
            $districts[] = $district;
        }
        $ima = implode(',', $images);
        $cat = implode(',', $categories);
        $state = implode(',', $states);
        $district = implode(',', $districts);
        $home_page_status = 0;
        if($request->home_page_status) {
            $home_page_status = 1;
        }
        $header_sec = 0;
        if($request->header_sec) {
            $header_sec = 1;
        }
        Blog::create([
            'name' => $request->name,
            'link' => $request->link,
            'home_page_status' => $home_page_status,
            'header_sec' => $header_sec,
            'sort_description' => $request->sort_desc,
            'keyword' => $request->keyword,
            'state_ids' => $state,
            'district_ids' => $district,
            'thumb_images' => $request->thumb_images,
            'image_ids' => $ima,
            'categories_ids' => $cat,
            'description' => $request->description,
        ]);
        return redirect('posts');
    }
    public function edit($id)
    {
        $blogs = Blog::where('id', $id)->first();
        $file = File::get()->all();
        $categories = Category::get()->all();
        $state = State::get()->all();
        $district = District::get()->all();
        return view('admin/blogEdit')->with('data',['categories' => $categories, 'file' => $file, 'states'=>$state, 'district'=> $district, 'blogs' => $blogs]);
    }
    public function editSave($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'sort_desc' => 'required|string',
            'category' => 'required',
        ]);
        $images = [];
        if(isset($request->images)) {
            foreach ($request->images as $image) {
                $images[] = $image;
            }
        }
        foreach ($request->category as $category) {
            $categories[] = $category;
        }
        foreach ($request->state as $state) {
            $states[] = $state;
        }
        foreach ($request->district as $district) {
            $districts[] = $district;
        }
        $ima = implode(',', $images);
        $cat = implode(',', $categories);
        $state = implode(',', $states);
        $district = implode(',', $districts);
        $home_page_status = 0;
        if($request->home_page_status) {
            $home_page_status = 1;
        }
        $header_sec = 0;
        if($request->header_sec) {
            $header_sec = 1;
        }
        Blog::where('id', $id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'home_page_status' => $home_page_status,
            'header_sec' => $header_sec,
            'sort_description' => $request->sort_desc,
            'keyword' => $request->keyword,
            'state_ids' => $state,
            'district_ids' => $district,
            'thumb_images' => $request->thumb_images,
            'image_ids' => $ima,
            'categories_ids' => $cat,
            'description' => $request->description,
        ]);
        return redirect('posts');
    }
   
}
