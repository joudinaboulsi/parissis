@extends('cms.layouts.app')

@section('content')


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-4">
        <h2>Project Gallery</h2>
        <ol class="breadcrumb active">
            <li>
                <strong><a href="">Project Gallery Management</a></strong>
            </li>
        </ol>
    </div>

    <div class="col-lg-8">
        <div class="title-action">
            <a href="#" data-toggle="modal" data-target="#add_image" class="btn btn-primary">Add New Image(s)</a>
        </div>
    </div>

</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>List of project images</h5>
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
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    	
                    @foreach($gallery as $g)
                    <tr class="gradeX" id="rec_{{$g->id}}">
                        <td>{{$g->id}}</td> 
                        <td><img src="{{getenv('S3_URL')}}/projects/thumbs/{{$g->image}}"></td>
                        <td><a onclick="ajaxDelete({{$g->id}})"><i class="fa fa-trash"></i></a></td>
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


<!--Add New Image Modal -->
<div id="add_image" class="modal fade" role="dialog">
  <div class="modal-lg modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        {!! Form::open(array('route' => 'add_image_path', 'id' => 'addImg_form', 'class' => 'addImg_form', 'files' => true)) !!}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ADD NEW IMAGE</h4>
          </div>
          <div class="modal-body">   
            <div id="signupbox" class="mainbox col-md-12 col-sm-12">
                <div class="panel panel-info"> 
                    <div class="panel-body" >
                        <input type="hidden" name="p_id" id="p_id" value="{{request()->route('project_id')}}">
                        <div class="form-group">
                            <div class="custom-file-upload">
                                <label for="newImage" class="control-label col-md-4 requiredField"> Upload Image<span class="asteriskField">*</span> </label>
                                <p>You can upload multiple images at once</p>
                                <div class="controls col-md-8 ">
                                    <input id="file-upload" type="file" name="newImage[]" multiple />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
          </div>
          <div class="modal-footer" style="border-top: none;">
            <input type="submit" name="upload" value="Add" class="btn btn btn-primary" id="upload" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        {!! Form::close() !!} 
    </div>
  </div>
</div>


<script type="text/javascript">
   
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
});


// ajax call to delete project
 function ajaxDelete(id){

    var flag = confirm('are you sure');

    if(flag)
    {
       $.ajax({
             url: "/delete-image",
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