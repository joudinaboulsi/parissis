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
                        <form action="{{route('cms_store_home_page')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                             <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_s1" value="{{$home->title_s1}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">

                                @if ($home->image)
                                    <img src="{{ asset('home/' . $home->image) }}" alt="image" height="100">
                                @endif
                            </div>
                      
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image Section1</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image Section1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt" value="{{ $home->alt }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Text Section1</label>

                                <div class="col-sm-10"><textarea class="form-control" name="text_s1">{!!$home->text_s1 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                

                            <div class="form-group row">
                                @if($home->img1)
                                <img src="{{asset('home/'.$home->img1)}}" height="100">
                                @endif
                             
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image1</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img1" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image1 </label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1" value="{{ $home->alt1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="t1" value="{{ $home->t1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Text1 </label>

                                <div class="col-sm-10"><textarea class="form-control"name="p1">{!! $home->p1 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group row">
                                @if($home->img1)
                                <img src="{{asset('home/'.$home->img2)}}" height="100">
                                @endif
                            
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image2</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img2" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image2 </label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt2" value="{{ $home->alt2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="t2" value="{{ $home->t2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>



                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Text </label>

                                <div class="col-sm-10"><textarea class="form-control"name="p2">{!! $home->p2 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                @if($home->img1)
                                <img src="{{asset('home/'.$home->img3)}}" height="100">
                                @endif

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image3</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img3" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image3 </label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt3" value="{{ $home->alt3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="t3" value="{{ $home->t3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Text </label>

                                <div class="col-sm-10"><textarea class="form-control"name="p3">{!! $home->p3 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            
      







                            <!--section2-->
                            <div class="form-group row">
                                @if($home->image_s2)
                                <img src="{{asset('home/'.$home->image_s2)}}" height="100">
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image Section2</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image_s2" />
                                </div>
                            </div>
                           
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_s2" value="{{ $home->title_s2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>



                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Text Section2</label>

                                <div class="col-sm-10"><textarea class="form-control"name="text_s2">{!! $home->text_s2 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Subtitle  Section2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_s2" value="{{ $home->subtitle_s2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Counter1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="counter1" value="{{ $home->counter1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Subtitle Counter1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_counter1" value="{{ $home->subtitle_counter1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Counter2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="counter2" value="{{ $home->counter2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Subtitle Counter2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_counter2" value="{{ $home->subtitle_counter2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Counter3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="counter3" value="{{ $home->counter3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Subtitle Counter3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_counter3" value="{{ $home->subtitle_counter3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="link1"
                                        value="{{ $home->link1 }}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link 2:</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="link2" value="{{ $home->link2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Title Project:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_project"
                                        value="{{ $home->title_project }}">
                                </div>
                            </div>
                            

                            <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Title Client:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_client"
                                        value="{{ $home->title_client }}">
                                </div>
                            </div>
                            

                            <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Title News:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_news"
                                        value="{{ $home->title_news }}">
                                </div>
                            </div>
                            
            
                          

                          
                     
                           
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
