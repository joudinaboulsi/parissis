<?php 

namespace App\Http\Repositories;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Illuminate\Database\QueryException;

class ProjectsRepository {

  
    /*----------------------------------
    Displays the list of searched Projects
    ------------------------------------*/
    public function getProjectSearch($query)
    {
      $q = \DB::select("SELECT A.*, GROUP_CONCAT(C.type SEPARATOR ', ') as type
                            FROM projects as A
                            LEFT JOIN project_has_type as B ON A.id=B.project_id
                            LEFT JOIN type as C ON B.type_id=C.type_id
                            WHERE A.hidden=0
                            AND title LIKE '%".$query."%'
                            OR client LIKE '%".$query."%'
                            OR architect LIKE '%".$query."%'
                            OR contractor LIKE '%".$query."%'
                            OR consultant LIKE '%".$query."%'
                            OR location LIKE '%".$query."%'
                            OR description LIKE '%".$query."%'
                            OR sub_type LIKE '%".$query."%'
                            GROUP BY A.id
                            ORDER BY A.id DESC");
        return $q;
    }

  /*----------------------------------
    get the list of the 8 top Projects
    ------------------------------------*/
    public function showTop()
    {
        $p = \DB::select("SELECT A.*, GROUP_CONCAT(C.class SEPARATOR ', ') as class, GROUP_CONCAT(C.type SEPARATOR ', ') as type
                          FROM projects as A
                          LEFT JOIN project_has_type as B ON A.id=B.project_id
                          LEFT JOIN type as C ON B.type_id=C.type_id
                          WHERE A.hidden=0
                          GROUP BY A.id
                          ORDER BY A.id DESC
                          LIMIT 8");
        return $p;
    }

	/*----------------------------------
    get the list of all Projects
    ------------------------------------*/
    public function show()
    {
        $p = \DB::select("SELECT A.*, GROUP_CONCAT(C.class SEPARATOR ', ') as class, GROUP_CONCAT(C.type SEPARATOR ', ') as type
                          FROM projects as A
                          LEFT JOIN project_has_type as B ON A.id=B.project_id
                          LEFT JOIN type as C ON B.type_id=C.type_id
                          WHERE A.hidden=0
                          GROUP BY A.id
                          ORDER BY A.id DESC");
        return $p;
    }


    /*----------------------------------
    get the list of all Projects
    ------------------------------------*/
    public function showTypesList()
    {
        $p = \DB::select("SELECT * 
                  FROM type
                  WHERE hidden=0");
        return $p;
    }


    /*----------------------------------
    Get the types list to which a project is assigned
    ------------------------------------*/
    public function getProjectTypesList($project_id)
    {

        $q = \DB::select("SELECT A.type_id, A.type, B.project_id
                          FROM type as A
                          JOIN project_has_type as B ON A.type_id = B.type_id AND B.project_id = :project_id",
             array(':project_id' => $project_id));
        return $q;
    }


    /*----------------------------------
    Insert a new Project
    ------------------------------------*/
    public function add($request, $file_name)
    {

      try
      {

        \DB::transaction(function () use ($request, $file_name){

          $project_id = \DB::table('projects')->insertGetId(
                  		   array('title' => $request->input('title'),
                  		   'client' => $request->input('client'),
                  		   'architect' => $request->input('architect'),
                  		   'contractor' => $request->input('contractor'),
                  		   'consultant' => $request->input('consultant'),
                  		   'location' => $request->input('location'),
                  		   'description' =>$request->input('description'),
                  		   'execution_date' => $request->input('dates'),
                  		   'main_image' => $file_name,
                         'sub_type' => $request->input('sub_type'),
                  		   'hidden' => 0
                  			)
                   		);   

        // Check if the project has type(s)
        if($request->input('type') != NULL)
         {
            $types = []; //declare an empty array

            foreach($request->input('type') as $t)
               {
                 // build the component table
                 array_push($types, array('type_id' => $t,
                                             'project_id' => $project_id
                                            ));
               }
            // insert the all the products of the products
            \DB::table('project_has_type')->insert($types); // Query Builder
          }

        });

      }

      catch(QueryException $ex)
      { 
         dd($ex->getMessage());
         //dd('Error while adding a Prodcut');
      }   
         
    }



    /*----------------------------------
    get the the data of a project from its id
    ------------------------------------*/
    public function getProjectDataFromId($project_id)
    {
        $q = \DB::select("SELECT * 
				          FROM projects 
				          WHERE id=:project_id",
            array(':project_id' => $project_id));
        return $q;

    }

  

    /*----------------------------------
    Update a Project
    ------------------------------------*/
    public function update($request, $file_name)
    {	

      try
        {

          \DB::transaction(function() use ($request, $file_name) {

            // update the selected project
            \DB::table('projects')
                   ->where('id', '=', $request->input('edit_id'))
                   ->update(
                       array('title' => $request->input('edit_title'),
                             'client' => $request->input('edit_client'),
                             'architect' => $request->input('edit_architect'),
                             'contractor' => $request->input('edit_contractor'),
                             'consultant' => $request->input('edit_consultant'),
                             'location' => $request->input('edit_location'),
                             'description' =>$request->input('edit_description'),
                             'execution_date' => $request->input('edit_dates'),
                             'sub_type' => $request->input('edit_sub_type'),
                             'main_image' => $file_name,
                             'hidden' => 0
                             )
                   ); 

              //delete the previous data for the blog
              \DB::select("DELETE FROM project_has_type WHERE project_id =:project_id",
                array(':project_id' => $request->input('edit_id')));

              // Replace by the new ones if the inputs are not empty
              if($request->input('edit_type') != NULL)
              { 
                  $types = []; //declare an empty array 
                  foreach($request->input('edit_type') as $c)
                  {
                      // build the page category table
                      array_push($types, array('project_id' => $request->input('edit_id'),
                                'type_id' => $c
                              ));
                  }

                  // insert the all page categories of the page
                  \DB::table('project_has_type')->insert($types); // Query Builder
              }

          });

        }

        catch(QueryException $ex)
        { 
           dd($ex->getMessage());
        }   

    }



    /*----------------------------------
    Delete a Project
    ------------------------------------*/
    public function delete($request)
    {
         try
        {

          \DB::transaction(function () use ($request){

        		\DB::table('projects')
                   ->where('id', '=', $request->input('id'))
                   ->update(
                       array('hidden' => 1)
                   );   

                    });

        }

        catch(QueryException $ex)
        { 
           dd($ex->getMessage());
           //dd('Error while adding a Prodcut');
        }   

    }


	/*----------------------------------
    get the images of a project
    ------------------------------------*/
    public function showGallery($project_id)
    {
        $q = \DB::select("SELECT * 
				          FROM gallery 
				          WHERE project_id=:project_id
                          AND hidden=0",
            array(':project_id' => $project_id));
        return $q;

    }


    /*----------------------------------
    Add new images of a project
    ------------------------------------*/
    public function addImage($request, $images_array)
    {
      // create an empty array
      $data = [];

      foreach($images_array as $a)
      {
        $image_record =  array('project_id'=> $request->input('p_id'),
                               'image'=> $a,
                               'hidden' => 0
                               );

        array_push($data, $image_record);
      }

      // insert the images 
      \DB::table('gallery')->insert($data);       

    }


    /*----------------------------------
    Delete an image
    ------------------------------------*/
    public function deleteImage($request)
    {
        \DB::table('gallery')
           ->where('id', '=', $request->input('id'))
           ->update(
               array('hidden' => 1)
           );     
    }


    /*----------------------------------
    get the list of all the news
    ------------------------------------*/
    public function showNews()
    {
        $p = \DB::select("SELECT * 
                          FROM news
                          WHERE hidden=0
                          ORDER BY news_id DESC
                          LIMIT 3");
        return $p;
    }

    	
    /*----------------------------------
    Insert news
    ------------------------------------*/
    public function addNews($request, $file_name)
    {

       \DB::table('news')->insert(
       array('news_title' => $request->input('title'),
       'news_body' => $request->input('body'),
       'date' => $request->input('date'),
       'link' => $request->input('link'),
       'author' => $request->input('author'),
       'img' => $file_name,
       'hidden' => 0,
       'created_by' => Auth::id(),
       'updated_by' => Auth::id(),
       'created_at' => Carbon::now('Asia/Beirut'),
       'updated_at' => Carbon::now('Asia/Beirut')
      )
    ); 

    }


    /*----------------------------------
    get the the data of a project from its id
    ------------------------------------*/
    public function getNewsDataFromId($news_id)
    {
        $q = \DB::select("SELECT * 
                  FROM news 
                  WHERE news_id=:news_id",
            array(':news_id' => $news_id));
        return $q;

    }



    /*----------------------------------
    Update a new
    ------------------------------------*/
    public function updateNews($request, $file_name)
    { 
    
        \DB::table('news')
           ->where('news_id', '=', $request->input('edit_id'))
           ->update(
               array('news_title' => $request->input('edit_title'),
                     'news_body' => $request->input('edit_body'),
                     'date' => $request->input('edit_date'),
                     'link' => $request->input('edit_link'),
                     'author' => $request->input('edit_author'),
                     'img' => $file_name,
                     )
           );          
    }

    
    
    /*----------------------------------
    Delete a new
    ------------------------------------*/
    public function deleteNews($request)
    {
    \DB::table('news')
           ->where('news_id', '=', $request->input('id'))
           ->update(
               array('hidden' => 1)
           );     
    }


    /*----------------------------------
    Displays the list of Projects related to a specific type
    ------------------------------------*/
    public function getRelatedProjects($type_id){
      
      $q = \DB::select("SELECT B.*, A.type_id 
                        FROM project_has_type as A
                        RIGHT JOIN projects as B ON A.project_id=B.id
                        WHERE type_id=:type_id LIMIT 3",
          array(':type_id' => $type_id));
      return $q;

    }

   
}