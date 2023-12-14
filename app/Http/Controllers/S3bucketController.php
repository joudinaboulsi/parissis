<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Aws\S3\S3Client;
use Intervention\Image\ImageManager;

class S3bucketController extends Controller
{

    public function __construct(ImageManager $imageManager)
    {
        $this->middleware('auth');
        $this->imageManager = $imageManager;
    }

    //function that fix the name of the image to be uploaded by removing the special character
    public function fixFileName($fileName)
    {
        $fileName = str_replace("#", "", $fileName);
        $fileName = str_replace("$", "", $fileName);
        $fileName = str_replace("%", "", $fileName);
        $fileName = str_replace("^", "", $fileName);
        $fileName = str_replace("&", "", $fileName);
        $fileName = str_replace("*", "", $fileName);
        $fileName = str_replace("?", "", $fileName);
        $fileName = str_replace("'","",$fileName);
        $fileName = str_replace("\"","",$fileName);
        $fileName = str_replace("\\","",$fileName);
        $fileName = str_replace("/","",$fileName);
        $fileName = str_replace(" ","",$fileName);
        $fileName = strtolower($fileName);
        return($fileName);
    }




    // uploadImage WITHOUT image processing
    public function uploadFile($file_input, $file_output_name, $destination_path)
    {    
        //Connection to the S3 Bucket
        $client = \Aws\S3\S3Client::factory(array(
            'version'     => 'latest',
            'region'      => getenv('S3_REGION'),
            'credentials' => [
                'key'    => getenv('S3_KEY'),
                'secret' => getenv('S3_SECRET'),
            ],
        ));

        // Upload an object to Amazon S3
        $result = $client->putObject(array(
            'Bucket' => getenv('S3_BUCKET'),
            'Key'    => getenv('S3_ROOT').$destination_path.'/'.$file_output_name,
            'Body'   => file_get_contents($file_input),
            'ACL'   => 'public-read',
            'ContentType'  => 'application/pdf'
        ));                      
    } 



    // uploadImage WITH image processing
    public function uploadAfterImgProcess($file_input, $file_output_name, $destination_path)
    {    
        //Connection to the S3 Bucket
        $client = \Aws\S3\S3Client::factory(array(
            'version'     => 'latest',
            'region'      => getenv('S3_REGION'),
            'credentials' => [
                'key'    => getenv('S3_KEY'),
                'secret' => getenv('S3_SECRET'),
            ],
        ));

        // Upload an object to Amazon S3
        $result = $client->putObject(array(
            'Bucket' => getenv('S3_BUCKET'),
            'Key'    => getenv('S3_ROOT').$destination_path.'/'.$file_output_name,
            'Body'   => $file_input,
            'ACL'   => 'public-read'
        ));                      
    } 



    // upload image to gallery + resize + create thumbnails 
    public function uploadResize($image, $original_dest, $thumb_dest, $max_original_width, $max_thumb_width, $max_thumb_height)
    {   

    //Renaming the image with the current time
    $imageFileName = rand(0,10000).'_'.time().'_'.$image->getClientOriginalName();
    //fix the name of the image
    $imageFileName = $this->fixFileName($imageFileName);

     // get the image 
     $image_original = $this->imageManager->make($image);
     $image_thumb = $image_original;
     // get the width and height of the image
     $width = $image_original->width();
     $height = $image_original->height();
     
     // =========== ORIGINAL IMAGE =======

     // if the image is wider than $max_original_width
     if($width > intval($max_original_width))
     $image_orignal = $image_original->widen(intval($max_original_width)); // resize to specified max width
     else
     $image_orignal = $image_original->resize($width, $height); //resize using the same size just for compression.
      // convert the output of the image for S3 bucket upload       
     $image_orignal =  $image_orignal->stream()->__toString();
     // upload the original image to the s3 bucket
     $this->uploadAfterImgProcess($image_orignal, $imageFileName, $original_dest);

     // =========== THUMB IMAGE =======

     //creating thumbs by resize the image to as a square image (change the variable)
   //  $image_thumb =  $image_thumb->crop(intval($max_thumb_width), intval($max_thumb_height)); 
   $image_thumb =  $image_thumb->widen(intval($max_thumb_width))->crop(intval($max_thumb_width), intval($max_thumb_height)); 
     // upload the original image to the s3 bucket
     $image_thumb =  $image_thumb->stream()->__toString();
     // upload the thumbn image to the s3 bucket
     $this->uploadAfterImgProcess($image_thumb, $imageFileName, $thumb_dest);

     // return the name of the processed images
     return $imageFileName;
    }


    // test if input has file, upload file and return image name
    public function fillInputWithFileForAdd(Request $request, $input_name, $s3_bucket_output)
    {
      // check if we have uploaded a photo for the candidate
      if ($request->hasFile($input_name)) {

          //Getting the image from the form
          $image = $request->file($input_name);
          //Renaming the image with the time
          $imageFileName = rand(0,10000).'_'.time().'_'.$image->getClientOriginalName();
          //Rename the file by fixing white spaces
          $imageFileName = $this->fixFileName($imageFileName);
          // upload the image to the users folder in the s3 bucket
          $this->uploadFile($image, $imageFileName, $s3_bucket_output);

          // get the name of the uploaded image and return it with the ajax response
          $file_name = $imageFileName;
        }

        else // if we didn't upload an image
          $file_name = NULL;


          return $file_name;
    }



     // test if input has file, upload file and return image name
    public function fillInputWithFileForEdit(Request $request, $input_name, $s3_bucket_output)
    {
      // check if we have uploaded a photo for the candidate
      if ($request->hasFile($input_name)) {

          //Getting the image from the form
          $image = $request->file($input_name);
          //Renaming the image with the time
          $imageFileName = rand(0,10000).'_'.time().'_'.$image->getClientOriginalName();
          //Rename the file by fixing white spaces
          $imageFileName = $this->fixFileName($imageFileName);
          // upload the image to the users folder in the s3 bucket
          $this->uploadFile($image, $imageFileName, $s3_bucket_output);

          // get the name of the uploaded image and return it with the ajax response
          $file_name = $imageFileName;
        }

        else // if we didn't upload an image
   
         $file_name = false;


        return $file_name;
    }



}
