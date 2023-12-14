@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Basic Form</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Forms</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Basic Form</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
      
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{route('contact_cms_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
    

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_header" value="{{$contact->title_header}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_header" value="{{$contact->subtitle_header}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                
                            <div class="form-group  row">
                                @if($contact->image_header)
                                <img src="{{asset('assets/contact/'.$contact->image_header)}}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image header</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_header"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Main</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_main" value="{{$contact->title_main}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Team</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_team" value="{{$contact->title_team}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link" value="{{$contact->link}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                     
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link url</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link_url" value="{{$contact->link_url}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
