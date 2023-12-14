<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceSection;
use App\Helpers\FileUploadHelper;
class ServiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $service = ServiceSection::find(1);
        return view('cms.service_section',compact('service'));
    }


    public function store(Request $request)
    {
        $service = ServiceSection::find(1);

       // Define an array to store file input names and corresponding database fields
       $fileFields = [
         
        'image1' => 'image1',
        'image2' => 'image2',
        'image3' => 'image3',
        'image4' => 'image4',
        'image5' => 'image5',
       
       
    ];

    // Loop through the file input names and handle file uploads
    foreach ($fileFields as $fileInputName => $dbField) {
        $image = FileUploadHelper::uploadFile($request, $fileInputName, 'service/');
        if($image!=null)
            $service->update([$dbField => $image]);
    }


    // Define an array to store other fields that are not files
    $otherFields = [
       
       
        'alt1',
        'title1',
        'p1',
        'text1',

      
        'alt2',
        'title2',
        'p2',
        'text2',
        'alt3',
        'title3',
        'p3',
        'text3',
        'alt4',
        'title4',
        'p4',
        'text4',

        'alt5',
        'title5',
        'p5',
        'text5',
    ];

    // Loop through other fields and update them
    foreach ($otherFields as $fieldName) {
        if ($request->filled($fieldName)) {
            $service->update([
                $fieldName => $request->input($fieldName),
            ]);
        }
    }
    return redirect()->back();
}

   
}
