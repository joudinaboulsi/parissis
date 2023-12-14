@extends('cms.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2> Team Page</h2>
          
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
      
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Content Team Page</h5>
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
                        <form action="{{route('cms_add_team')}}" method="POST" enctype="multipart/form-data">
                            @csrf
    

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="title_header" value="{{$team->title_header}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row"><label class="col-sm-2 col-form-label">SubTitle Header</label>

                                <div class="col-sm-10"><input type="text" class="form-control" name="subtitle_header" value="{{$team->subtitle_header}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                        
                            <div class="form-group  row">
                                @if($team->image_header)
                                <img src="{{asset('team/'.$team->image_header)}}" height="100">
                                @endif
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Image header</label>

                                <div class="col-sm-10"><input type="file" class="form-control" name="image_header"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="hr-line-dashed"></div>
                            <br/>
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_section1"
                                        value="{{$team->title_section1}}">
                                </div>
                            </div>
                           
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Name1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"
                                        value="{{$team->name}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Position1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="position"
                                        value="{{$team->position}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Specialist 1:</label>
                                <div class="col-sm-10">
                               <textarea class="form-control" name="specialty">{!!$team->specialty !!}</textarea>
                                    
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                            <div class="form-group">
                                @if($team->profile)
                                <img src="{{asset('team/'.$team->profile)}}" height="100">
                                @endif
                        
                            </div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Profile: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="profile"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt"
                                        value="{{$team->alt}}">
                                </div>
                            </div>
                           
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Name2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name2"
                                        value="{{$team->name2}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Position2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="position2"
                                        value="{{$team->position2}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Specialist2:</label>
                                <div class="col-sm-10">
                                
                                     <textarea class="form-control" name="specialty2">{!!$team->specialty2 !!}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                            <div class="form-group">
                                @if($team->profile2)
                                <img src="{{asset('team/'.$team->profile2)}}" height="100">
                                @endif
                        
                            </div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Profile2: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="profile2"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt2"
                                        value="{{$team->alt2}}">
                                </div>
                            </div>

                           
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Name3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name3"
                                        value="{{$team->name3}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Position3</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="position3"
                                        value="{{$team->position3}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Specialist3:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="specialty3">{!!$team->specialty3!!}</textarea>

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                            <div class="form-group">
                                @if($team->profile3)
                                <img src="{{asset('team/'.$team->profile3)}}" height="100">
                                @endif
                        
                            </div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Profile3: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="profile3"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt3"
                                        value="{{$team->alt3}}">
                                </div>
                            </div>

                           
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Name4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name4"
                                        value="{{$team->name4}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Position3</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="position4"
                                        value="{{$team->position4}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Specialist4:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="specialty4">{!!$team->specialty4 !!}</textarea>

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                            <div class="form-group">
                                @if($team->profile4)
                                <img src="{{asset('team/'.$team->profile4)}}" height="100">
                                @endif
                        
                            </div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Profile3: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="profile4"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt4"
                                        value="{{$team->alt4}}">
                                </div>
                            </div>

                           
                            <div class="hr-line-dashed"></div>
                       
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Title Section3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_section3"
                                        value="{{$team->title_section3}}">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                @if($team->organigram)
                                <img src="{{asset('team/'.$team->organigram)}}" height="100">
                                @endif
                        
                            </div>
                           
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Image </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="organigram"/>
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
