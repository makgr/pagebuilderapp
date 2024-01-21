<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AssetController extends Controller
{
    public function upload(Request $request)
    {
        // Retrieve additional parameters
        $category = $request->input('category');
        $userId = $request->input('user_id');

        // Handle file upload
        $uploadedFile = $request->file('asset');
        $filename = $uploadedFile->getClientOriginalName();
        $imageName = time() . '.' . $request->asset->getClientOriginalExtension();
        // $path = $uploadedFile->storeAs('assets', $filename, 'public');
        $uploadedFile->move(public_path('/uploads'), $imageName);
        $path = env('APP_URL') . '/' . 'uploads' . '/' . $imageName;

        // $data = [
        //     'data' => [
        //         'http://localhost/pagebuilderapp/public/uploads/' . $imageName,
        //         [
        //             // 'src'    => $path,
        //             'src'    => 'http://localhost/pagebuilderapp/public/uploads/' . $imageName,
        //             'type'   => 'image',
        //             'height' => 100,
        //             'width'  => 200,
        //         ],
        //         // ... other elements
        //     ],
        // ];


        return response()->json(['success' => true, 'file' => $path, 'name' => $imageName]);
        // return response()->json($data);
    }
}
