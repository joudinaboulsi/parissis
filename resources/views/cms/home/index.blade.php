@extends('cms.layouts.app')

@section('content')


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-4">
        <h2>Projects</h2>
        <ol class="breadcrumb active">
            <li>
                <strong><a href="">Projects Management</a></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-8">
        <div class="title-action">
            <a href="#" data-toggle="modal" data-target="#add_project" class="btn btn-primary">Add Project</a>
        </div>
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>List of projects</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="client_table" class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Client</th>
                                    <th>Architect</th>
                                    <th>Main Contractor</th>
                                    <th>Consultant</th>
                                    <th>Location</th>
                                    <th>Description</th>
                                    <th>Execution dates</th>
                                    <th>Type</th>
                                    <th>Gallery</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $p) 
                                    <tr class="gradeX" id="rec_{{$p->id}}">
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->title}}</td>
                                        <td>{{$p->client}}</td>
                                        <td>{{$p->architect}}</td>
                                        <td>{{$p->contractor}}</td>
                                        <td>{{$p->consultant}}</td>
                                        <td>{{$p->location}}</td>
                                        <td>{{$p->description}}</td>
                                        <td>{{$p->execution_date}}</td>
                                        <td id="type_{{ $p->id }}">
                                          <?php
                                              $types_tab = explode(", ", $p->type);   
                                          ?>
                                          @foreach($types_tab as $c)
                                          <span class="label label-primary">{{$c}}</span>
                                          @endforeach
                                        </td>
                                        <td><a href="{{ route('cms_gallery_path', $p->id) }}">View Gallery</a></td>
                                        <td>
                                            <a onclick="loadDataToEdit({{$p->id}})" data-toggle="modal" data-target="#update_project"><i class="fa fa-edit"></i></a> &nbsp
                                            <a onclick="ajaxDelete({{$p->id}})"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Modal Add Project -->
<div id="add_project" class="modal fade" role="dialog">
  <div class="modal-lg modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        {!! Form::open(array('route' => 'add_project_path', 'id' => 'add_form', 'class' => 'add-form', 'files' => true)) !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD NEW PROJECT</h4>
      </div>
      <div class="modal-body">   
        <div id="signupbox" class="mainbox col-md-12 col-sm-12">
            <div class="panel panel-info"> 
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="title" class="control-label requiredField"> Project title<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="title" maxlength="255" name="title" placeholder="Project title" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                         <div class="form-group required col-md-6">
                            <label for="type" class="control-labelrequiredField"> Project Type<span class="asteriskField">*</span> </label>
                            <select id="type" name="type[]" data-placeholder="Choose a Type..." class="chosen-select" multiple tabindex="4" style="width:350px !important;">
                                @foreach($typesList as $type)
                                  <option value="{{ $type->type_id }}" >{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="client" class="control-label requiredField"> Client<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="client" name="client" placeholder="Client" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="sub_type" class="control-label requiredField"> Sub Type </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="sub_type" maxlength="255" name="sub_type" placeholder="You can write a sub type here" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="architect" class="control-label requiredField"> Architect<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="architect" name="architect" placeholder="Architect" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="contractor" class="control-label requiredField"> Main Contractor<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="contractor" name="contractor" placeholder="Contractor" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="consultant" class="control-label requiredField"> Consultant<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="consultant" name="consultant" placeholder="Consultant" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="location" class="control-label requiredField"> Location<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="location" name="location" placeholder="Location" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="description" class="control-label requiredField"> Description<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="description" name="description" placeholder="Description" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="dates" class="control-label requiredField"> Execution dates<span class="asteriskField">*</span> </label>
                            <div class="controls ">
                                <input class="input-md textinput textInput form-control" id="dates" name="dates" placeholder="Execution dates" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="image" class="control-labelrequiredField"> Upload Image<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input id="file-upload" type="file" id="image" name="image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
      </div>
      <div class="modal-footer" style="border-top: none;">
        <input type="submit" name="add" value="Add Project" class="btn btn btn-primary" id="add" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
         {!! Form::close() !!}
    </div>
  </div>
</div>


<!-- Modal Update Project -->
<div id="update_project" class="modal fade" role="dialog">
  <div class="modal-lg modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
     {!! Form::open(array('route' => 'cms_projects', 'id' => 'update_form', 'class' => 'update-form', 'files' => true)) !!} 
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT PROJECT</h4>
      </div>
      <div class="modal-body">   
        <div id="signupbox" class="mainbox col-md-12 col-sm-12">
            <div class="panel panel-info"> 
                <div class="panel-body" >
                     
                    <input type="hidden" name="edit_id" id="edit_id">

                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="title" class="control-labelrequiredField"> Project title<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_title" maxlength="30" name="edit_title" placeholder="Project title" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="edit_type" class="control-labelrequiredField"> Project Type<span class="asteriskField">*</span> </label>
                            <select id="edit_type" name="edit_type[]" data-placeholder="Choose a Type..." class="chosen-select" multiple tabindex="4" style="width:350px !important;">
                                @foreach($typesList as $type)
                                  <option value="{{ $type -> type_id}}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="client" class="control-labelrequiredField"> Client<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_client" name="edit_client" placeholder="Client"  style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="edit_sub_type" class="control-label requiredField"> Sub Type </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_sub_type" maxlength="255" name="edit_sub_type" placeholder="You can write a sub type here" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="architect" class="control-label requiredField"> Architect<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_architect" name="edit_architect" placeholder="Architect" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="contractor" class="control-label requiredField"> Main Contractor<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_contractor" name="edit_contractor" placeholder="Contractor" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="consultant" class="control-label requiredField"> Consultant<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_consultant" name="edit_consultant" placeholder="Consultant" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div  class="form-group required col-md-6">
                            <label for="location" class="control-label requiredField"> Location<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_location" name="edit_location" placeholder="Location"  style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group required col-md-6">
                            <label for="description" class="control-label requiredField"> Description<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_description" name="edit_description" placeholder="Description" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="dates" class="control-label requiredField"> Execution dates<span class="asteriskField">*</span> </label>
                            <div class="controls">
                                <input class="input-md textinput textInput form-control" id="edit_dates" name="edit_dates" placeholder="Execution dates" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-md-12">
                            <div class="custom-file-upload">
                                <label for="image" class="control-label requiredField"> Upload Image<span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                    <img id="display_edit_img" src="" style="width:100px;">
                                    <input id="edit_image" type="file" name="edit_image"/>
                                    </div>
                            </div>
                        </div>  
                    </div>                      
                </div>
            </div>
        </div> 
     </div>
      <div class="modal-footer" style="border-top: none;">
        <input type="submit" name="update" value="Update Project" class="btn btn btn-primary" id="update" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
{!! Form::close() !!}      
    </div>
  </div>
</div>



<script type="text/javascript">
//script for Data Table
$(document).ready(function(){


    $('#client_table').DataTable({
    	order: [0, 'desc' ],
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            {extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},
            {extend: 'print',
             customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
            }
            }
        ]
    });

    //multi selection script
     var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

});


// ajax call to edit project
function loadDataToEdit(id){

   $.ajax({
         url: "/get-project-data-from-id",
         method: "POST",
         data: {
                 'id' : id
               },      
         headers: {
            'X-CSRF-Token': $('input[name=_token]').val()
         },                      
         dataType: "json",
         success: function (data) { console.log(data);
            // change the data of the pop up modal
              $('#edit_id').val(data[0].id);
              $('#edit_title').val(data[0].title);
              $('#edit_client').val(data[0].client);
              $('#edit_architect').val(data[0].architect);
              $('#edit_contractor').val(data[0].contractor);
              $('#edit_consultant').val(data[0].consultant);
              $('#edit_location').val(data[0].location);
              $('#edit_description').val(data[0].description);
              $('#edit_sub_type').val(data[0].sub_type);
              $('#edit_dates').val(data[0].execution_date);
              $('#display_edit_img').attr('src', '{{getenv('S3_URL')}}/projects/thumbs/'+data[0].main_image);

              //get all the related page types and store them in am array
              var type_arr = [];
              $("#type_"+id+ " span").each(function(index, elem){
                  type_arr.push($(this).text());
              });
              // remove the white space at the beginingof each element
              type_arr = type_arr.map(function (e) {
                return e.trim();
              });

                // filling the array in jquery 
                var val_type_arr =[];
                $("#edit_type > option").each(function() {
                    if(jQuery.inArray(this.text, type_arr ) !== -1)
                        val_type_arr.push(this.value);
                    
                    $('#edit_type').val(val_type_arr);
                    $('#edit_type').trigger("chosen:updated");        
                });
 
             },
         error: function(jqXHR, textStatus, errorThrown) {

             console.log('Status:'+jqXHR.status);
             console.log('Text status:'+textStatus);
             console.log('Error Thrown:'+errorThrown);

         }
     });
 }



// ajax call to delete project
 function ajaxDelete(id){

    var flag = confirm('are you sure');

    if(flag)
    {
       $.ajax({
             url: "/delete-project",
             method: "POST",
             data: {
                     'id' : id
                   },      
             headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
             },                      
             dataType: "json",
             success: function () { 
                // remove the deleted record
                $('#rec_'+id).remove();
                },
              error: function(jqXHR, textStatus, errorThrown) {

                 console.log('Status:'+jqXHR.status);
                 console.log('Text status:'+textStatus);
                 console.log('Error Thrown:'+errorThrown);

             }
         });
    }
 }







</script>

@endsection