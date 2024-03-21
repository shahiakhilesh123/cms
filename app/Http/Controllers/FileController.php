<?php

namespace App\Http\Controllers;
use App\Models\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
        $files = File::get()->all();
        return view('admin/files')->with('files',$files);
    }
}

