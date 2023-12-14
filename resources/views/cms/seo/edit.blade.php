@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Edit Seo {{$page->page}}</h2>
          
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
      
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        
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
                        <form action="{{ route('seoUpdate',$page->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Meta Title</label>

                                <div class="col-sm-10"><textarea class="form-control" name="meta_title">{!!$page->meta_title !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>

            
                          
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Meta Keywords</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="meta_keywords">{!!$page->meta_keywords !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Meta Description</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="meta_description">{!!$page->meta_description !!}</textarea></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                          
                            <div class="form-group  row">
                                @if($page->og_image)
                                <img src="{{asset('seo/'.$page->og_image)}}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Og Image</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="og_image"></div>
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
