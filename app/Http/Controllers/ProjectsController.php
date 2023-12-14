<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\S3bucketController;
use App\Http\Repositories\ProjectsRepository;
use Auth;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProjectsRepository $projectsRepository, S3bucketController $s3bucketController)
    {
        $this->ProjectsRepository = $projectsRepository;
        $this->S3bucketController = $s3bucketController;
        $this->middleware('auth');
    }


    //Shows the list of projects
    public function index()
    {
        // Returns the list of projects
        $projects = $this->ProjectsRepository->show();

        // Returns the list of types
        $typesList = $this->ProjectsRepository->showTypesList();

        return view('cms/home/index', array('projects' => $projects,'typesList' => $typesList));
    }


    //Allows to add a new project
    public function add(Request $request)
    {
        // If the form is filled
        if ($request->filled(['title']))
        {
            // check if we have uploaded a new image
            if ($request->hasFile('image')) { 
              //Getting the images from the form
              $image = $request->file('image');
              // process the image, compress and resize to create original img and thumb img. Return the image name
              $imageFileName = $this->S3bucketController->uploadResize($image, 'projects', 'projects/thumbs', 951, 100, 100);
            }
            else // if we didn't change the old image or we did not select any image
                $imageFileName = NULL;

            // Adding a project
            $this->ProjectsRepository->add($request, $imageFileName); 
        }
           
        return redirect()->back();
    }


   
   // get project details from project id
   public function getProjectDataFromId(Request $request)
   {   

      $data = $this->ProjectsRepository->getProjectDataFromId($request->input('id'));
       
      $data2 = $this->ProjectsRepository->getProjectTypesList($request->input('id'));

      array_push($data, $data2);
      // return the info to the ajax call
      return response()->json($data);  
   }


   // Allows to delete a project
   public function delete(Request $request)
   {
       $this->ProjectsRepository->delete($request);

       // return the info to the ajax call
       return response()->json();  
   }


    //Allows to add a new project
    public function update(Request $request)
    {
        // If the form is filled
        if ($request->filled(['edit_title']))
        {
            // check if we have uploaded a new image
            if ($request->hasFile('edit_image')) {
              //Getting the images from the form
              $image = $request->file('edit_image');
              // process the image, compress and resize to create original img and thumb img. Return the image name
              $imageFileName = $this->S3bucketController->uploadResize($image, 'projects', 'projects/thumbs', 951, 100, 100);
            }
            else // if we didn't change the old image or we did not select any image
            {
                $info = $this->ProjectsRepository->getProjectDataFromId($request->input('edit_id'));
        
                $imageFileName = $info[0]->main_image;
            }

            // Adding a project
            $this->ProjectsRepository->update($request, $imageFileName); 
        }

        return redirect()->back();
    }


     //Shows the list of photo associated to one specific project.
    public function showGallery($project_id)
    {
        // Returns the list of project images
        $gallery = $this->ProjectsRepository->showGallery($project_id);
        return view('cms/home/gallery', array('gallery' => $gallery));
    }


    //Allows to add a new image
    public function addImage(Request $request)
    {
        $images_array = array();

        // check if we have uploaded a new image
        if ($request->hasFile('newImage')) 
        { 
            //Getting the images from the form
            $images = $request->file('newImage');

            foreach($images as $image)
            {
                // process the image, compress and resize to create original img and thumb img. Return the image name
                $imageFileName = $this->S3bucketController->uploadResize($image, 'projects', 'projects/thumbs', 951, 100, 100);

                // push the new image name in the array
                array_push($images_array, $imageFileName);
            }

            // store the images name in an array then pass the array to the repository for 1 single insert
            $this->ProjectsRepository->addImage($request, $images_array); 

        }

        // Returns the list of project images
        $gallery = $this->ProjectsRepository->showGallery($request->input('p_id'));
        return redirect()->back();
    }
           
      
    // Allows to delete an image
     public function deleteImage(Request $request)
     {
         $this->ProjectsRepository->deleteImage($request);
         // return the info to the ajax call
         return response()->json();  
     }

    

    //Shows the list of news.
    public function showNews()
    {
        // Returns the list of project images
        $news = $this->ProjectsRepository->showNews();
        return view('cms/home/news', array('news' => $news));
    }


    //Allows to add news
    public function addNews(Request $request)
    {
          // check if we have uploaded a new image
          if ($request->hasFile('image')) { 
            //Getting the images from the form
            $image = $request->file('image');
            // process the image, compress and resize to create original img and thumb img. Return the image name
            $imageFileName = $this->S3bucketController->uploadResize($image, 'news', 'news/thumbs', 951, 100, 100);
          }
          else // if we didn't change the old image or we did not select any image
              $imageFileName = NULL;

          // Adding a new
          $this->ProjectsRepository->addNews($request, $imageFileName); 
        
        return redirect()->back();
    }


    //Allows to get news data to edit
    public function getNewsDataFromId(Request $request)
    {
        $data = $this->ProjectsRepository->getNewsDataFromId($request->input('id'));

        // return the info to the ajax call
        return response()->json($data); 
      }


    //Allows to update News
    public function updateNews(Request $request)
    {
        // check if we have uploaded a new image
        if ($request->hasFile('edit_image')) {
          //Getting the images from the form
          $image = $request->file('edit_image');
          // process the image, compress and resize to create original img and thumb img. Return the image name
          $imageFileName = $this->S3bucketController->uploadResize($image, 'news', 'news/thumbs', 951, 100, 100);
        }
        else // if we didn't change the old image or we did not select any image
        {
            $info = $this->ProjectsRepository->getNewsDataFromId($request->input('edit_id'));
   
            $imageFileName = $info[0]->img;
        }

        // updating News
        $this->ProjectsRepository->updateNews($request, $imageFileName); 

        return redirect()->back();
    }


    // Allows to delete a new
    public function deleteNews(Request $request)
    {
       $this->ProjectsRepository->deleteNews($request);

       // return the info to the ajax call
       return response()->json();  
    }



}
