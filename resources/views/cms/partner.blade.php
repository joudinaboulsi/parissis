@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Partner Page</h2>
           
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Content Partner Page</h5>
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
                        <form action="{{ route('partner_cms_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_header"
                                        value="{{ $partner->title_header }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_header"
                                        value="{{ $partner->subtitle_header }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row">
                                @if ($partner->image_header)
                                    <img src="{{ asset('partner/' . $partner->image_header) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image header</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_header"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_s1"
                                        value="{{ $partner->title_s1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Text Section1</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="text_s1">{!! $partner->text_s1 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image)
                                    <img src="{{ asset('partner/' . $partner->image) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Section 1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image Section 1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt"
                                        value="{{ $partner->alt }}"></div>
                            </div>

                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_s2"
                                        value="{{ $partner->title_s2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Text Section2</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="text_s2">{!! $partner->text_s2 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->bg)
                                    <img src="{{ asset('partner/' . $partner->bg) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Section 2</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="bg"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_s3"
                                        value="{{ $partner->title_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Title1 Section
                                    3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="small_title1_s3"
                                        value="{{ $partner->small_title1_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Subitle1 Section
                                    3</label>

                                <div class="col-sm-10"><input type="text" class="form-control"
                                        name="small_subtitle1_s3" value="{{ $partner->small_subtitle1_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link 1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link1_s3"
                                        value="{{ $partner->link1_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image1)
                                    <img src="{{ asset('partner/' . $partner->image1) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Section 1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image1"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image Section
                                    1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1"
                                        value="{{ $partner->alt1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P1 Section3</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p1_s3">{!! $partner->p1_s3 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <!--2-->

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Title2 Section
                                    3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="small_title2_s3"
                                        value="{{ $partner->small_title2_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Subitle2 Section
                                    3</label>

                                <div class="col-sm-10"><input type="text" class="form-control"
                                        name="small_subtitle2_s3" value="{{ $partner->small_subtitle2_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link 2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link2_s3"
                                        value="{{ $partner->link2_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image2)
                                    <img src="{{ asset('partner/' . $partner->image2) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Section 1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image2"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image Section
                                    1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt2"
                                        value="{{ $partner->alt2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P2 Section3</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p2_s3">{!! $partner->p2_s3 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <!--3-->

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Title3 Section
                                    3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="small_title3_s3"
                                        value="{{ $partner->small_title3_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Subitle3 Section
                                    3</label>

                                <div class="col-sm-10"><input type="text" class="form-control"
                                        name="small_subtitle3_s3" value="{{ $partner->small_subtitle3_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link 3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link3_s3"
                                        value="{{ $partner->link3_s3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image3)
                                    <img src="{{ asset('partner/' . $partner->image3) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image3</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image3"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image 3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt3"
                                        value="{{ $partner->alt3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P3 Section3</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p3_s3">{!! $partner->p3_s3 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <!--4-->
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section 4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_s4"
                                        value="{{ $partner->title_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Title4 Section
                                    4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="small_title4_s4"
                                        value="{{ $partner->small_title4_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Subitle4 Section
                                    4</label>

                                <div class="col-sm-10"><input type="text" class="form-control"
                                        name="small_subtitle4_s4" value="{{ $partner->small_subtitle4_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link 4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link4_s4"
                                        value="{{ $partner->link4_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image4)
                                    <img src="{{ asset('partner/' . $partner->image4) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image4</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image4"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image 4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt4"
                                        value="{{ $partner->alt4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P4 Section4</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p4_s4">{!! $partner->p4_s4 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <!--5-->

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Title5 Section
                                    4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="small_title5_s4"
                                        value="{{ $partner->small_title5_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Subitle 5 Section
                                    4</label>

                                <div class="col-sm-10"><input type="text" class="form-control"
                                        name="small_subtitle5_s4" value="{{ $partner->small_subtitle5_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link 5</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link5_s4"
                                        value="{{ $partner->link5_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image5)
                                    <img src="{{ asset('partner/' . $partner->image5) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image 5</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image5"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image 5</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt5"
                                        value="{{ $partner->alt5 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P5 Section4</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p5_s4">{!! $partner->p5_s4 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <!--5-->

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Title 6 Section
                                    4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="small_title6_s4"
                                        value="{{ $partner->small_title6_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Small Subitle 6 Section
                                    4</label>

                                <div class="col-sm-10"><input type="text" class="form-control"
                                        name="small_subtitle6_s4" value="{{ $partner->small_subtitle6_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Link 6</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="link6_s4"
                                        value="{{ $partner->link6_s4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($partner->image6)
                                    <img src="{{ asset('partner/' . $partner->image6) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image6</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image6"></div>
                            </div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Image 6</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt6"
                                        value="{{ $partner->alt6 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P6 Section4</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="p6_s4">{!! $partner->p6_s4 !!}</textarea>
                                </div>
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
