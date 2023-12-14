@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Company Section </h2>

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
                        <form action="{{ route('cms_add_company_section') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title </label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title"
                                        value="{{ $company_section->title }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle"
                                        value="{{ $company_section->subtitle }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row">
                                @if ($company_section->img1)
                                    <img src="{{ asset('company/' . $company_section->img1) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="img1"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1"
                                        value="{{ $company_section->alt1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Sub1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="sub1"
                                        value="{{ $company_section->sub1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P1</label>

                                <div class="col-sm-10"><textarea class="form-control" name="p1">{!!$company_section->p1 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row">
                                @if ($company_section->img2)
                                    <img src="{{ asset('company/' . $company_section->img2) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image2</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="img2"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt2"
                                        value="{{ $company_section->alt2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Sub2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="sub2"
                                        value="{{ $company_section->sub2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P2</label>

                                <div class="col-sm-10"><textarea class="form-control" name="p2">{!!$company_section->p2 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if ($company_section->img3)
                                    <img src="{{ asset('company/' . $company_section->img3) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image3</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="img3"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt3"
                                        value="{{ $company_section->alt3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Sub3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="sub3"
                                        value="{{ $company_section->sub3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">P3</label>

                                <div class="col-sm-10"><textarea class="form-control" name="p3">{!!$company_section->p3 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_tab1"
                                        value="{{ $company_section->title_tab1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_tab2"
                                        value="{{ $company_section->title_tab2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_tab3"
                                        value="{{ $company_section->title_tab3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_tab4"
                                        value="{{ $company_section->title_tab4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab5</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_tab5"
                                        value="{{ $company_section->title_tab5 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>












                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Tab1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_tab1"
                                        value="{{ $company_section->subtitle_tab1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab1</label>

                                <div class="col-sm-10"><textarea class="form-control" name="text_tab1">{!!$company_section->text_tab1 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                @if ($company_section->image_tab1)
                                    <img src="{{ asset('company/' . $company_section->image_tab1) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Tab1</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_tab1"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                    
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt Tab1</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1_tab1"
                                        value="{{ $company_section->alt1_tab1 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Tab2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_tab2"
                                        value="{{ $company_section->subtitle_tab2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab2</label>

                                <div class="col-sm-10"><textarea class="form-control" name="text_tab2">{!!$company_section->text_tab2 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                @if ($company_section->image_tab2)
                                    <img src="{{ asset('company/' . $company_section->image_tab2) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Tab2</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_tab2"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                    
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt tab2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1_tab2"
                                        value="{{ $company_section->alt1_tab2 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>



                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Tab3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_tab3"
                                        value="{{ $company_section->subtitle_tab3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab3</label>

                                <div class="col-sm-10"><textarea class="form-control" name="text_tab3">{!!$company_section->text_tab3 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                @if ($company_section->image_tab3)
                                    <img src="{{ asset('company/' . $company_section->image_tab3) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Tab2</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_tab3"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                    
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt tab3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1_tab3"
                                        value="{{ $company_section->alt1_tab3 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Tab4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_tab4"
                                        value="{{ $company_section->subtitle_tab4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Tab4</label>

                                <div class="col-sm-10"><textarea class="form-control" name="text_tab4">{!!$company_section->text_tab4 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                @if ($company_section->image_tab4)
                                    <img src="{{ asset('company/' . $company_section->image_tab4) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image Tab4</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_tab4"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                    
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt tab4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1_tab4"
                                        value="{{ $company_section->alt1_tab4 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle tab5</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_tab5"
                                        value="{{ $company_section->subtitle_tab5 }}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">tab5</label>

                                <div class="col-sm-10"><textarea class="form-control" name="text_tab5">{!!$company_section->text_tab5 !!}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                @if ($company_section->image_tab5)
                                    <img src="{{ asset('company/' . $company_section->image_tab5) }}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image tab5</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_tab5"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                    
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt tab5</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt1_tab5"
                                        value="{{ $company_section->alt1_tab5 }}"></div>
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
