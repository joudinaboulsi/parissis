@extends('cms.layouts.app')

@section('content')


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-4">
        <h2>News</h2>
        <ol class="breadcrumb active">
            <li>
                <strong><a href="">News Management</a></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-8">
        <div class="title-action">
            <a href="#" data-toggle="modal" data-target="#add_news" class="btn btn-primary">Add News</a>
        </div>
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>List of news</h5>
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
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $n) 
                                    <tr class="gradeX" id="rec_{{$n->news_id}}">
                                        <td>{{$n->news_id}}</td>
                                        <td><img alt="image" class="img-responsive" src="{{getenv('S3_URL')}}/news/thumbs/{{$n->img}}"></td>
                                        <td>{{$n->news_title}}</td>
                                        <td><?php echo htmlspecialchars_decode($n->news_body);?></td>
                                        <td>{{ date('d M Y', strtotime($n->date)) }}</td>
                                        <td>
                                            <a onclick="loadDataToEdit({{$n->news_id}})" data-toggle="modal" data-target="#update_news"><i class="fa fa-edit"></i></a> &nbsp
                                            <a onclick="ajaxDelete({{$n->news_id}})"><i class="fa fa-trash"></i></a>
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


<!--Modal Add news -->
<div id="add_news" class="modal fade" role="dialog">
  <div class="modal-lg modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    {!! Form::open(array('route' => 'cms_add_news_path', 'id' => 'add_form', 'class' => 'add-form', 'files' => true)) !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD NEWS</h4>
      </div>
      <div class="modal-body">   
        <div id="signupbox" class="mainbox col-md-12 col-sm-12">
            <div class="panel panel-info"> 
                <div class="panel-body">
                    <div class="form-group required">
                        <label for="title" class="font-normal">News Title<span class="asteriskField">*</span> </label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="title" maxlength="255" name="title" placeholder="News title" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="body" class="font-normal">News Body<span class="asteriskField">*</span></label>
                        <div class="input-group col-md-12">
                          <textarea class="input-md textinput textInput form-control summernote" name="body" id="body" placeholder="News body" required="required"></textarea>
                        </div>  
                    </div>
                    <div class="form-group">
                        <label for="date" class="font-normal">News Date<span class="asteriskField">*</span></label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="date" name="date" type="date" required>
                        </div>
                    </div>
                    <!--  <div class="form-group required">
                        <label for="link" class="font-normal">News Link </label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="link" maxlength="255" name="link" placeholder="News URL" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>
                     <div class="form-group required">
                        <label for="author" class="font-normal">News Author </label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="author" maxlength="255" name="author" placeholder="News author" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="image" class="control-label requiredField"> Upload Image<span class="asteriskField">*</span> </label>
                        <div class="controls">
                            <input id="file-upload" type="file" name="image"/>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
      </div>
      <div class="modal-footer" style="border-top: none;">
        <input type="submit" name="add" value="Add News" class="btn btn btn-primary" id="add" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    {!! Form::close() !!}
    </div>
  </div>
</div>


<!-- Modal Update news -->
<div id="update_news" class="modal fade" role="dialog">
  <div class="modal-lg modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
     {!! Form::open(array('route' => 'cms_edit_news_path', 'id' => 'update_form', 'class' => 'update-form', 'files' => true)) !!} 
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT News</h4>
      </div>
      <div class="modal-body">   
        <div id="signupbox" class="mainbox col-md-12 col-sm-12">
            <div class="panel panel-info"> 
                <div class="panel-body" >
                     
                    <input type="hidden" name="edit_id" id="edit_id">

                    <div class="form-group required">
                        <label for="edit_title" class="font-normal"> News title<span class="asteriskField">*</span> </label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="edit_title" maxlength="30" name="edit_title" placeholder="News title" style="margin-bottom: 10px" type="text" required />
                        </div>
                    </div>
                     <div class="form-group required">
                        <label for="edit_body" class="font-normal">News Body<span class="asteriskField">*</span></label>
                        <div class="input-group col-md-12">
                          <textarea class="input-md textinput textInput form-control summernote" name="edit_body" id="edit_body" placeholder="News body" required="required"></textarea>
                        </div>  
                    </div>
                    <div class="form-group">
                        <label for="date" class="font-normal">News Date<span class="asteriskField">*</span></label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="edit_date" name="edit_date" type="date" required>
                        </div>
                    </div>
                    <!-- <div class="form-group required">
                        <label for="edit_link" class="font-normal"> News Link </label>
                        <div class="input-group col-md-12">
                            <input class="input-md textinput textInput form-control" id="edit_link" name="edit_link" placeholder="News URL" style="margin-bottom: 10px" type="text" />
                        </div>     
                    </div>
                    <div class="form-group required">
                        <label for="edit_author" class="font-normal"> News Author </label>
                        <div class="input-group col-md-12 ">
                            <input class="input-md textinput textInput form-control" id="edit_author" name="edit_author" placeholder="News author" style="margin-bottom: 10px" type="text" />
                        </div>     
                    </div> -->
                     <div class="form-group">
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
      <div class="modal-footer" style="border-top: none;">
        <input type="submit" name="update" value="Save Changes" class="btn btn btn-primary" id="update" />
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


    // script to activate the summer note
    $('.summernote').summernote({
           toolbar: [
                   ['font', ['bold', 'italic', 'underline', 'clear']],
                   ['fontname', ['fontname']],
                   ['fontsize', ['fontsize']],
                   ['color', ['color']],
                   ['para', ['ul', 'ol', 'paragraph']],
                   ['height', ['height']],
                   ['table', ['table']],
                   ['insert', ['link', 'hr']],
                   ['view', ['fullscreen', 'codeview']],
                 ],

               fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '18', '24', '36', '48']
       });

});


// ajax call to edit project
function loadDataToEdit(id){

   $.ajax({
         url: "/get-news-data-from-id",
         method: "POST",
         data: {
                 'id' : id
               },      
         headers: {
            'X-CSRF-Token': $('input[name=_token]').val()
         },                      
         dataType: "json",
         success: function (data) { 
            // change the data of the pop up modal
              $('#edit_id').val(data[0].news_id);
              $('#edit_title').val(data[0].news_title);
              $('#edit_body').summernote('code',data[0].news_body);
              $('#edit_link').val(data[0].link);
              $('#edit_author').val(data[0].author);
              $('#edit_date').val(data[0].date);
              $('#display_edit_img').attr('src', '{{getenv('S3_URL')}}/news/thumbs/'+data[0].img);

 
             },
         error: function(jqXHR, textStatus, errorThrown) {

             console.log('Status:'+jqXHR.status);
             console.log('Text status:'+textStatus);
             console.log('Error Thrown:'+errorThrown);

         }
     });
 }



// ajax call to delete news
 function ajaxDelete(id){

    var flag = confirm('are you sure');

    if(flag)
    {
       $.ajax({
             url: "/delete-news",
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