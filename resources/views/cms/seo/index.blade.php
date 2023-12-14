@extends('cms.layouts.app')

@section('content')


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Seo Pages</h2>
       
    </div>
  
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>List of seo pages</h5>
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
                                    <th>Page</th>
                                    <th>Meta Title</th>
                                    <th>Meta Keywords</th>
                                    <th>Meta description</th>
                                    <th>OG Image</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page) 
                                    <tr class="gradeX" id="rec_{{$page->id}}">
                                        <td>{{$page->page}}</td>
                                        <td>{!!$page->meta_title!!}</td>
                                        <td>{!!$page->meta_keywords!!}</td>
                                        <td>{!!$page->meta_description!!}</td>
                                        <td>
                                            @if($page->og_image)
                                            <img src="{{asset('seo/'.$page->og_image)}}" alt="services" height="100">
                                            @endif
                                        </td>
                                      
                                     
                                        <td class="flex">
                                            <a href="{{route('seoEdit',$page->id)}}"><i class="fa fa-edit"></i></a> 
                                           
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

// ajax call to delete project
 function ajaxDelete(id){

    var flag = confirm('are you sure');

    if(flag)
    {
       $.ajax({
             url: "/cms/delete/service/",
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
})
</script>

@endsection