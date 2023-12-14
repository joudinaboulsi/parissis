<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
Use App\HElpers\FileUploadHelper;


class HomePageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $home = HomePage::find(1);
        return view('cms.home_page', compact('home'));
    }

    public function store(Request $request)
    {
        $home = HomePage::find(1);

         // Define an array to store file input names and corresponding database fields
         $fileFields = [
            'image' => 'image',
            'img1' => 'img1',
            'img2' => 'img2',
            'img3' => 'img3',
            'image_s2' => 'image_s2',
            'icon5_section2' => 'icon5_section2',
            'image_section3' => 'image_section3',
            'image1_section3' => 'image1_section3',
            'image_section4' => 'image_section4',
            'image1_section4' => 'image1_section4',
            'image_section5' => 'image_section5',
            'image1_section5' => 'image1_section5',
            'image_section6' => 'image_section6',
            'image1_section6' => 'image1_section6',
            'image_section7' => 'image_section7',
            'image1_section7' => 'image1_section7',
            'image_section8' => 'image_section8',
            'image1_section8' => 'image1_section8',
        ];

        // Loop through the file input names and handle file uploads
        foreach ($fileFields as $fileInputName => $dbField) {
            $image = FileUploadHelper::uploadFile($request, $fileInputName, 'home/');
            if($image!=null)
                $home->update([$dbField => $image]);
        }

        // Define an array to store other fields that are not files
        $otherFields = [
            'title_s1',
            'text_s1',
            'alt',
            'alt1',
            'alt2',
            'alt3',
            'title_s2',
            'text_s2',
            'subtitle_s2',
            'counter1',
            'subtitle_counter1',
            'counter2',
            'subtitle_counter2',
            'counter3',
            'subtitle_counter3',
            'link1',
            'link2',
            'title_project',
            'title_client',
            'title_news',
            't1',
            't2',
            't3',
            'p1',
            'p2',
            'p3',
        ];

        // Loop through other fields and update them
        foreach ($otherFields as $fieldName) {
            if ($request->filled($fieldName)) {
                $home->update([
                    $fieldName => $request->input($fieldName),
                ]);
            }
        }
        return redirect()->back();
    }
}
