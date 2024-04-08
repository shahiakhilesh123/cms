<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class StoryController extends Controller
{
    public function showStory($name){
        $blog_name = str_replace('-', ' ', $name);
        $blog = Blog::where('name', $blog_name)->first();
        return view('detail')->with('blog', $blog);
    }
}
