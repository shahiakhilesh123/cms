<?php

namespace App\Http\Controllers;
use App\Models\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::orderBy('id', 'DESC')->get()->all();
        return view('admin/files')->with('files',$files);
    }
    public function fileAdd(Request $request)
    {
       return view('admin/addFile');
    }
    public function addFile(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);
        $destinationPath = public_path('file');
        $fileName = $request->file->getClientOriginalName();
        $fileName = pathinfo($fileName, PATHINFO_FILENAME).time() . '.'. $request->file->extension();
        File::create(
                [
                    "user_id" => '1',
                    "file_name" => $fileName,
                    "file_type" => $request->file->getClientMimeType(),
                    "file_size" => $request->file->getSize(),
                    "full_path" => public_path('file'),
                ]
        );
        $request->file->move($destinationPath,$fileName);
        return redirect('/files');
    }
}

