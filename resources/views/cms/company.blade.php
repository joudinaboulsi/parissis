@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Company Page </h2>

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
                        <form action="{{ route('cms_add_company_page') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_header"
                                        value="{{ $company->title_header }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_header"
                                        value="{{ $company->subtitle_header }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row">
                                @if ($company->image_header)
                                    <img src="{{ asset('company/' . $company->image_header) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image header</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_header"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_s1"
                                        value="{{ $company->title_s1 }}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Text Section 1:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="text_s1">{!! $company->text_s1 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group row">
                                @if ($company->image_s1)
                                    <img src="{{ asset('company/' . $company->image_s1) }}" height="100">
                                @endif

                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image_s1" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alt:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt1" value="{{ $company->alt1 }}">
                                </div>
                            </div>


                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="link_s1"
                                        value="{{ $company->link_s1 }}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link url:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="link_url"
                                        value="{{ $company->link_url }}">
                                </div>
                            </div>


                            <div class="hr-line-dashed"></div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Text Button 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="btn"
                                        value="{{ $company->btn }}">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Text Button 2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="btn2"
                                        value="{{ $company->btn2 }}">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                @if ($company->img1_s1)
                                    <img src="{{ asset('company/' . $company->img1_s1) }}" height="100">
                                @endif

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Img: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img1_s1" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alt img:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt2"
                                        value="{{ $company->alt2 }}" </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    @if ($company->img2_s1)
                                        <img src="{{ asset('company/' . $company->img2_s1) }}" height="100">
                                    @endif

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Img2: </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="img2_s1" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Img 2:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alt3"
                                            value="{{ $company->alt3 }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>



                                <div class="form-group row">
                                    @if ($company->img4_s1)
                                        <img src="{{ asset('company/' . $company->img4_s1) }}" height="100">
                                    @endif

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Img3: </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="img4_s1" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Img 3:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alt4"
                                            value="{{ $company->alt4 }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    @if ($company->img5_s1)
                                        <img src="{{ asset('company/' . $company->img5_s1) }}" height="100">
                                    @endif

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Img4: </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="img5_s1" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Img 4:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alt5"
                                            value="{{ $company->alt5 }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title Section2:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title_s2"
                                            value="{{ $company->title_s2 }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Text Section 2:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="text_s2">{!! $company->text_s2 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    @if ($company->icon1)
                                        <img src="{{ asset('company/' . $company->icon1) }}" height="100">
                                    @endif

                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Icon1: </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="icon1" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Icon1:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt1_s3"
                                            value="{{ $company->alt1_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title1:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="t1_s3"
                                            value="{{ $company->t1_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">P1:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="p1">{!! $company->p1 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    @if ($company->icon2)
                                        <img src="{{ asset('company/' . $company->icon2) }}" height="100">
                                    @endif

                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Icon2: </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="icon2" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Icon2:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt2_s3"
                                            value="{{ $company->alt2_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">title2:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="t2_s3"
                                            value="{{ $company->t2_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">P2:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="p2">{!! $company->p2 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    @if ($company->icon3)
                                        <img src="{{ asset('company/' . $company->icon3) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Icon3: </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="icon3" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Icon3:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt3_s3"
                                            value="{{ $company->alt3_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">title3:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="t3_s3"
                                            value="{{ $company->t3_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">P3:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="p3">{!! $company->p3 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    @if ($company->icon4)
                                        <img src="{{ asset('company/' . $company->icon4) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Icon4: </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="icon4" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Icon4:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt4_s3"
                                            value="{{ $company->alt4_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">title4:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="t4_s3"
                                            value="{{ $company->t4_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">P4:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="p4">{!! $company->p4 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    @if ($company->icon5)
                                        <img src="{{ asset('company/' . $company->icon5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Icon5: </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="icon5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Icon5:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt5_s3"
                                            value="{{ $company->alt5_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">title4:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="t5_s3"
                                            value="{{ $company->t5_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">P5:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="p5">{!! $company->p5 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>



                                <div class="form-group row">
                                    @if ($company->icon6)
                                        <img src="{{ asset('company/' . $company->icon6) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Icon6: </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="icon6" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Icon6:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt6_s3"
                                            value="{{ $company->alt6_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">title6:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="t6_s3"
                                            value="{{ $company->t6_s3 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">P6:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="p6">{!! $company->p6 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>




                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title Section3:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title_s3"
                                            value="{{ $company->title_s3 }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Text Section 3:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="text_s3">{!! $company->text_s3 !!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    @if ($company->image_s3)
                                        <img src="{{ asset('company/' . $company->image_s3) }}" height="100">
                                    @endif

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Img Section 3: </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image_s3" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title Section5:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title_s5" value="{{$company->title_s5}}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Text Section 5:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="text_s5">{!!$company->text_s5!!}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    @if ($company->img_s5)
                                        <img src="{{ asset('company/' . $company->img_s5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Image 1 Section 5:
                                    </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="img_s5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Image:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt_s5"
                                            value="{{ $company->alt_s5 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    @if ($company->img2_s5)
                                        <img src="{{ asset('company/' . $company->img2_s5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Image 2 Section 5:
                                    </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="img2_s5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Image:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt2_s5"
                                            value="{{ $company->alt2_s5 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    @if ($company->img3_s5)
                                        <img src="{{ asset('company/' . $company->img3_s5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Image 3Section 5:
                                    </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="img3_s5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Image3:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt3_s5"
                                            value="{{ $company->alt3_s5 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group row">
                                    @if ($company->img4_s5)
                                        <img src="{{ asset('company/' . $company->img4_s5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Image4 Section 5:
                                    </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="img4_s5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Image4:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt4_s5"
                                            value="{{ $company->alt4_s5 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>



                                <div class="form-group row">
                                    @if ($company->img5_s5)
                                        <img src="{{ asset('company/' . $company->img5_s5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Image5 Section 5:
                                    </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="img5_s5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Image5:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt5_s5"
                                            value="{{ $company->alt5_s5 }}"> </div>
                                </div>
                                <div class="hr-line-dashed"></div>



                                <div class="form-group row">
                                    @if ($company->img6_s5)
                                        <img src="{{ asset('company/' . $company->img6_s5) }}" height="100">
                                    @endif
                                </div>

                                <div class="form-group row"> <label class="col-sm-2 col-form-label">Image6 Section 5:
                                    </label>
                                    <div class="col-sm-10"> <input type="file" class="form-control" name="img6_s5" />
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alt Image6:</label>
                                    <div class="col-sm-10"> <input type="text" class="form-control" name="alt6_s5"
                                            value="{{ $company->alt6_s5 }}"> </div>
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
