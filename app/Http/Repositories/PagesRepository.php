<?php namespace App\Http\Repositories;

class PagesRepository {
    
    /*----------------------------------
    Displays the list of Projects
    ------------------------------------*/
    public function getProjectList(){
      $q = \DB::select("SELECT * FROM projects");
        return $q;
    }

    /*----------------------------------
    Displays the list of Projects information
    ------------------------------------*/
    public function getProjectInformationById($projectId){
      $q = \DB::select("SELECT * FROM projects WHERE id = :projectId",
            array(':projectId' => $projectId));
        return $q[0];
    }



}