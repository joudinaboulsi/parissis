<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Helpers\FileUploadHelper;

class CareerController extends Controller
{
    //
   

    public function index(){
        $career = Career::find(1);
        return view('cms.career',compact('career'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $career = Career::find(1);

        $image = FileUploadHelper::uploadFile($request, 'image_header', 'career/');
        if ($image != null)
            $career->update(['image_header' => $image ]);


        $career->update([
            'title_header' => $request->title_header,
            'subtitle_header' => $request->subtitle_header,
            'title_main'  => $request->title_main,
        ]);

        return redirect()->back();
    }

}
