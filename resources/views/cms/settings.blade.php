@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Settings</h2>
            
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
                        <form action="{{route('settings_cms_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
      
  
                            <div class="form-group  row">
                                @if($settings->logo)
                                <img src="{{asset('settings/'.$settings->logo)}}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Logo</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="logo"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if($settings->logo_dark)
                                <img src="{{asset('settings/'.$settings->logo_dark)}}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Logo Dark</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="logo_dark"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="alt" value="{{$settings->alt}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Location</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="location" value="{{$settings->location}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Address</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="address" value="{{$settings->address}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Location2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="location2" value="{{$settings->location2}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Address2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="address2" value="{{$settings->address2}}"> </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Location 3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="location3" value="{{$settings->location3}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Address3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="address3" value="{{$settings->address3}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Location 4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="location4" value="{{$settings->location4}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Address4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="address4" value="{{$settings->address4}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Phone</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="phone" value="{{$settings->phone}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Phone2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="phone2" value="{{$settings->phone2}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Phone3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="phone3" value="{{$settings->phone3}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Phone4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="phone4" value="{{$settings->phone4}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Fax</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="fax" value="{{$settings->fax}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Fax2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="fax3" value="{{$settings->fax3}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                          

                          


                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Email</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="email" value="{{$settings->email}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Email2</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="email2" value="{{$settings->email2}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                        

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Email3</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="email3" value="{{$settings->email3}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Email4</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="email4" value="{{$settings->email4}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Facebook</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="facebook" value="{{$settings->facebook}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Instagram</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="instagram" value="{{$settings->instagram}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label"> Linkedin</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="linkedin" value="{{$settings->linkedin}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                @if($settings->pdf)
                                <img src="{{asset('settings/'.$settings->pdf)}}" alt="">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <a href="{{ asset('settings/'.$settings->pdf) }}">open Brochure</a>
                            </div>
                            <div class="form-group  row">

                                <label class="col-sm-2 col-form-label">Brochure</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="pdf"></div>
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
