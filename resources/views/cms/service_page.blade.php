@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Service Page</h2>
           
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
                        <form action="{{ route('cms_store_service_page') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_header"
                                        value="{{ $service->title_header }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_header"
                                        value="{{ $service->subtitle_header }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row">
                                @if ($service->image_header)
                                    <img src="{{ asset('service/' . $service->image_header) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image header</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_header"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_section1"
                                        value="{{ $service->title_section1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Text Section1</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="text_section1">{!! $service->text_section1 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($service->image1)
                                    <img src="{{ asset('service/' . $service->image1) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Section 1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image1"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image Section 1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1"
                                        value="{{ $service->alt1 }}"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                            @if($service->video)
                                <video width="220" height="100" controls class="d-block">
                                    <source src="{{ asset('service/' . $service->video) }}" type="video/mp4">
                                </video>
                              
                            @endif
                             <div class="form-group  row"><label class="col-sm-2 col-form-label">Video :</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="video"
                                        value="">
                                </div>
                            </div>
                        
                                
                           
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                @if ($service->bg)
                                    <img src="{{ asset('service/' . $service->bg) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Video </label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="bg"></div>
                            </div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_section2"
                                        value="{{ $service->title_section2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Text Section2</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="text_section2">{!! $service->text_section2 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link"
                                        value="{{ $service->link }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link Url</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link_url"
                                        value="{{ $service->link_url }}"></div>
                            </div>

                            

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_section3"
                                        value="{{ $service->title_section3 }}"></div>
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
