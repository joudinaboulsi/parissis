<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicePage;
use App\Helpers\FileUploadHelper;
class ServicePageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $service = ServicePage::find(1);
        return view('cms.service_page',compact('service'));
    }


    public function store(Request $request)
    {
        $service = ServicePage::find(1);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'service/');
        if($image_header!=null)
            $service->update(['image_header' => $image_header]);

        $image1 = FileUploadHelper::uploadFile($request, 'image1', 'service/');
        if($image1!=null)
            $service->update(['image1' => $image1]);

        $video = FileUploadHelper::uploadFile($request, 'video', 'service/');
        if($video!=null)
            $service->update(['video' => $video]);

        $bg = FileUploadHelper::uploadFile($request, 'bg', 'service/');
        if($bg!=null)
            $service->update(['bg' => $bg]);

        $service->update([
            'title_header' => $request->title_header,
            'subtitle_header' => $request->subtitle_header,
            'title_section1' => $request->title_section1,
            'text_section1' => $request->text_section1,
            'alt1' => $request->alt1,

            'title_section2' => $request->title_section2,
            'text_section2' => $request->text_section2,
            'title_section3' => $request->title_section3,
            'link' => $request->link,
            'link_url' => $request->link_url,
        ]);

        return redirect()->back();
    }
}
