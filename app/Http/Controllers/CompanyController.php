<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutPage;
use App\CompanySection;
use App\Helpers\FileUploadHelper;

class CompanyController extends Controller
{
    //
    public function index(){
        $company = AboutPage::find(1);
        return view("cms.company",compact('company'));
    }

    public function store(Request $request){
        $company = AboutPage::find(1);

        
        // Define an array to store file input names and corresponding database fields
        $fileFields = [
         
            'image_header' => 'image_header',
            'image_s1' => 'image_s1',
            'img1_s1' => 'img1_s1',
            'img2_s1' => 'img2_s1',
            'img3_s1' => 'img3_s1',
            'img4_s1' => 'img4_s1',
            'img5_s1' => 'img5_s1',
            'image_s3' => 'image_s3',
            'img_s5' => 'img_s5',
            'img2_s5' => 'img2_s5',
            'img3_s5' => 'img3_s5',
            'img4_s5' => 'img4_s5',
            'img5_s5' => 'img5_s5',
            'img6_s5' => 'img6_s5',
            'icon1' => 'icon1',
            'icon2' => 'icon2',
            'icon3' => 'icon3',
            'icon4' => 'icon4',
            'icon5' => 'icon5',
            'icon6' => 'icon6',
        
        ];

        // Loop through the file input names and handle file uploads
        foreach ($fileFields as $fileInputName => $dbField) {
            $image = FileUploadHelper::uploadFile($request, $fileInputName, 'company/');
            if($image!=null)
                $company->update([$dbField => $image]);
        }

        // Define an array to store other fields that are not files
        $otherFields = [
            'title_header',
            'subtitle_header',
        
            'title_s1',
           'text_s1',
            'link_s1',
            'link_url',
    
            'alt1',
    
            'img2_s1',
            'alt2',
         
            'alt3',
           
            'alt4',
    
            'alt5',
            'btn',
            'btn2',

            'title_s2',
           'text_s2',
            'title_s3',
            
            'alt1_s3',
            'alt2_s3',
            'alt3_s3',
            'alt4_s3',
            'alt5_s3',
            'alt6_s3',
            'p1',
            'p2',
            'p3',
            'p4',
            'p5',
            'p6',
            't1_s3',
            't2_s3',
            't3_s3',
            't4_s3',
            't5_s3',
            't6_s3',   
           'text_s3',       
            'title_s5',
           'text_s5',      
            'alt_s5',       
            'alt2_s5',
          
            'alt3_s5',
          
            'alt4_s5',
            'alt5_s5',
            'alt6_s5',
        ];

        // Loop through other fields and update them
        foreach ($otherFields as $fieldName) {
            if ($request->filled($fieldName)) {
                $company->update([
                    $fieldName => $request->input($fieldName),
                ]);
            }
        }

        return redirect()->back();
    }


    // section 3 content in AboutPage Page Frontend
    public function companySection(){
        $company_section = CompanySection::find(1);
        return view("cms.company_section",compact('company_section'));
    }

    public function storeCompanySection(Request $request){
        $section = CompanySection::find(1);

        
        // Define an array to store file input names and corresponding database fields
        $fileFields = [
         
            'img1' => 'img1',
            'img2' => 'img2',
            'img3' => 'img3',
            'image_tab1' => 'image_tab1',
            'image_tab2' => 'image_tab2',
            'image_tab3' => 'image_tab3',
            'image_tab4' => 'image_tab4',
            'image_tab5' => 'image_tab5',
        ];

        // Loop through the file input names and handle file uploads
        foreach ($fileFields as $fileInputName => $dbField) {
            $image = FileUploadHelper::uploadFile($request, $fileInputName, 'company/');
            if($image!=null)
                $section->update([$dbField => $image]);
        }

        // Define an array to store other fields that are not files
        $otherFields = [
            'title',
            'subtitle',

            'alt1',
            'p1',
           
            'alt2',
            'p2',
        
            'alt3',
            'p3',
            'title_tab1',
            'title_tab2',
            'title_tab3',
            'title_tab4',
            'title_tab5',
            'subtitle_tab1',
            'text_tab1',
           
            'alt1_tab1',
         
            'subtitle_tab2',
            'text_tab2',
         
            'alt1_tab2',

            'subtitle_tab3',
            'text_tab3',
        
            'alt1_tab3',

            'subtitle_tab4',
            'text_tab4',
          
            'alt1_tab4',

            'subtitle_tab5',
            'text_tab5',
        
            'alt1_tab5',

            'sub1',
            'sub2',
            'sub3',
        ];

        // Loop through other fields and update them
        foreach ($otherFields as $fieldName) {
            if ($request->filled($fieldName)) {
                $section->update([
                    $fieldName => $request->input($fieldName),
                ]);
            }
        }

        return redirect()->back();
    }
}
