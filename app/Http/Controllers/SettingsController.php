<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Helpers\FileUploadHelper;

class SettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $settings = Settings::find(1);
        return view('cms.settings',compact('settings'));
    }


    public function store(Request $request)
    {
        $settings = Settings::find(1);

        $logo = FileUploadHelper::uploadFile($request, 'logo', 'settings/');
        if($logo!=null)
            $settings->update(['logo' => $logo]);
    $logo_dark = FileUploadHelper::uploadFile($request, 'logo_dark', 'settings/');
    if($logo_dark!=null)
        $settings->update(['logo_dark' => $logo_dark]);

            $pdf = FileUploadHelper::uploadFile($request, 'pdf', 'settings/');
           if($pdf!=null)
            $settings->update(['pdf' => $pdf]);

        $settings->update([

            'alt'  => $request->alt,
            'location'  => $request->location,
            'address'  => $request->address,
            'location2'  => $request->location2,
            'address2'  => $request->address2,
            'location3'   => $request->location3,
            'address3'   => $request->address3,
            'phone'   => $request->phone,
            'fax'   => $request->fax,
            'email'   => $request->email,
            'phone2'   => $request->phone2,
            'email2'   => $request->email2,
            'phone3'   => $request->phone3,
            'fax3'   => $request->fax3,
            'email3'   => $request->email3,
            'facebook'   => $request->facebook,
            'instagram'   => $request->instagram,
           'linkedin' => $request->linkedin,
           'location4'  => $request->location4,
           'address4'  => $request->address4,
           'email4'  => $request->email4,
           'phone4'  => $request->phone4,
   
           
        ]);

        return redirect()->back();
    }
}
