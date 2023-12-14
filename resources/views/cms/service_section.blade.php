@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Services Section</h2>
           
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Content Services Section</h5>
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
                        <form action="{{ route('service_cms_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title1"
                                        value="{{ $service->title1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P1</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p1">{!! $service->p1 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Text1</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="text1">{!! $service->text1 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($service->image1)
                                    <img src="{{ asset('service/' . $service->image1) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image1"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">ALt1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1"
                                        value="{{ $service->alt1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                          <div class="form-group  row"><label class="col-sm-2 col-form-label">Title2</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="title2"
                                    value="{{ $service->title2 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">P2</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="p2">{!! $service->p2 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Text2</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="text2">{!! $service->text2 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            @if ($service->image2)
                                <img src="{{ asset('service/' . $service->image2) }}" height="100">
                            @endif
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Image2</label>

                            <div class="col-sm-10"><input type="file" class="form-control" name="image2"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">ALt2</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="alt2"
                                    value="{{ $service->alt2 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Title3</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="title3"
                                    value="{{ $service->title3 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">P3</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="p3">{!! $service->p3 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Text3</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="text3">{!! $service->text3 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            @if ($service->image3)
                                <img src="{{ asset('service/' . $service->image3) }}" height="100">
                            @endif
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Image3</label>

                            <div class="col-sm-10"><input type="file" class="form-control" name="image3"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">ALt3</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="alt3"
                                    value="{{ $service->alt3 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>


                                                
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Title3</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="title4"
                                    value="{{ $service->title4 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">P4</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="p4">{!! $service->p4 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Text4</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="text4">{!! $service->text4 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            @if ($service->image4)
                                <img src="{{ asset('service/' . $service->image4) }}" height="100">
                            @endif
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Image4</label>

                            <div class="col-sm-10"><input type="file" class="form-control" name="image4"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">ALt4</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="alt4"
                                    value="{{ $service->alt4 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                                                
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Title5</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="title5"
                                    value="{{ $service->title5 }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">P5</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="p5">{!! $service->p5 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Text5</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="text5">{!! $service->text5 !!}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            @if ($service->image5)
                                <img src="{{ asset('service/' . $service->image5) }}" height="100">
                            @endif
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Image5</label>

                            <div class="col-sm-10"><input type="file" class="form-control" name="image5"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">ALt5</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="alt5"
                                    value="{{ $service->alt5 }}"></div>
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
