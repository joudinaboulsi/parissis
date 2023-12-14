<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\SeoPage;

class SeoPageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = SeoPage::all();
        return view('cms.seo.index', compact('pages'));
    }

    public function edit($id)
    { 
        $page = SeoPage::findOrFail($id);
        return view('cms.seo.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = SeoPage::findOrFail($id);

        $og_image = FileUploadHelper::uploadFile($request, 'og_image', 'seo/');
        if($og_image!=null)
            $page->update(['og_image' => $og_image]);

        $page->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return redirect()->route('seoCms');
    }
}
