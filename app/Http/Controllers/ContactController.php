<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Helpers\FileUploadHelper;

class ContactController extends Controller
{
    //
    public function index(){
        $contact = Contact::find(1);
        return view('cms.contact',compact('contact'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $contact = Contact::find(1);

        $image = FileUploadHelper::uploadFile($request, 'image_header', 'assets/contact');
        if ($image != null)
            $contact->update(['image_header' => $image ]);


        $contact->update([
            'title_header' => $request->title_header,
            'subtitle_header' => $request->subtitle_header,
            'title_main'  => $request->title_main,
        ]);

        return redirect()->back();
    }

}
