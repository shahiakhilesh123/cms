<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class StoryController extends Controller
{
    public function showStory($name){
        $blog_name = str_replace('-', ' ', $name);
        $blog = Blog::where('eng_name', $blog_name)->with('images')->first();
        $other_blog = Blog::where('id','!=', $blog->id)->with('thumbnail')->where('categories_ids', $blog->categories_ids)->with('images')->get()->all();
        $latests = Blog::where('id','!=', $blog->id)->with('thumbnail')->with('images')->orderBy('id', 'DESC')->get()->all();
        return view('detail')->with('data', ['blog'=> $blog, 'relates'=> $other_blog, 'latests' => $latests]);
    }
}
