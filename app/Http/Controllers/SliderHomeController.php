<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderHome;
use App\Helpers\FileUploadHelper;

class SliderHomeController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $sliders = SliderHome::all();
        return view('cms.sliders.index',compact('sliders'));
    }

    public function create(){
        return view('cms.sliders.create');
    }


    public function store(Request $request){
        $image = FileUploadHelper::uploadFile($request, 'image', 'home/');
     
        SliderHome::create([
            'image' => $image,
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return redirect()->route('sliders_cms');
    }


    public function edit($id){
        $slider = SliderHome::find($id);
        return view('cms.sliders.edit',compact('slider'));

    }


    public function update(Request $request, $id)
    {
        $slider = SliderHome::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'home/');
        if($image!=null)
            $slider->update(['image' => $image]);

        $slider->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return redirect()->route('sliders_cms');
    }

    public function delete($id)
    {
        SliderHome::find($id)->delete();
        return redirect()->back();
    }
}
