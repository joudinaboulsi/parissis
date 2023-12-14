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
                        <form action="{{route('cms_add_our_values')}}" method="POST" enctype="multipart/form-data">
                            @csrf
      
  
            
                           <div class="form-group  row"><label class="col-sm-2 col-form-label">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_section2"  value="{{$our_value->title_section2}}" />
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                @if($our_value->img_v)
                                <img src="{{asset('team/'.$our_value->img_v)}}" height="100">
                                @endif
                            </div>
        
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Image1 </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img_v"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt_v"
                                        value="{{$our_value->alt_v}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data value 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="value"
                                        value="{{$our_value->value}}">
                                </div>
                            </div>
                        
                            <div class="hr-line-dashed"></div>
                          
                            

                            <div class="form-group row">
                                @if($our_value->img_v2)
                                <img src="{{asset('team/'.$our_value->img_v2)}}" height="100">
                                @endif
                        
                            </div>
                          
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Image2: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img_v2"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                          
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt_v2"
                                        value="{{$our_value->alt_v2}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                          
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data value2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="value2"
                                        value="{{$our_value->value2}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                            
                                @if($our_value->img_v3)
                                <img src="{{asset('team/'.$our_value->img_v3)}}"  height="100">
                                @endif
                        
                            </div>
                          
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Image3: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img_v3"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt_v3"
                                        value="{{$our_value->alt_v3}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data value3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="value3"
                                        value="{{$our_value->value3}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                          
                            

                            <div class="form-group row">
                                @if($our_value->img_v4)
                                <img src="{{asset('team/'.$our_value->img_v4)}}" alt="image header" height="100">
                                @endif
                        
                            </div>
                          
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Image4: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img_v4"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt_v4"
                                        value="{{$our_value->alt_v4}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data value4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="value4"
                                        value="{{$our_value->value4}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                          
                            
                            <div class="form-group row">
                                @if($our_value->img_v5)
                                <img src="{{asset('team/'.$our_value->img_v5)}}" alt="image header" height="100">
                                @endif
                        
                            </div>
                           
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Image5: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img_v5"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt5:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt_v5"
                                        value="{{$our_value->alt_v5}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data value5:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="value5"
                                        value="{{$our_value->value5}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                     
                        
                            <div class="form-group row">
                                @if($our_value->data_img)
                                 <img src="{{asset('team/'.$our_value->data_img)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                           
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">icon1: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img"/>
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt"
                                        value="{{$our_value->data_alt}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to"
                                        value="{{$our_value->data_to}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data"
                                        value="{{$our_value->data}}">
                                </div>
                            </div>
                   
                          
                            
                            <div class="hr-line-dashed"></div>
                          
                            
                            <div class="form-group row">
                                @if($our_value->data_img2)
                                 <img src="{{asset('team/'.$our_value->data_img2)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">icon2: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img2"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt2"
                                        value="{{$our_value->data_alt2}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to2"
                                        value="{{$our_value->data_to2}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                             <div class="form-group  row"><label class="col-sm-2 col-form-label">Data2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data2"
                                        value="{{$our_value->data2}}">
                                </div>
                            </div>
                            <br><br>

                            <div class="hr-line-dashed"></div>

                          
                            
                            <div class="form-group row">
                                @if($our_value->data_img3)
                                 <img src="{{asset('team/'.$our_value->data_img3)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">icon3: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img3"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt3"
                                        value="{{$our_value->data_alt3}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to3"
                                        value="{{$our_value->data_to3}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data3"
                                        value="{{$our_value->data3}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>

                        
                            <div class="form-group row">
                                @if($our_value->data_img4)
                                 <img src="{{asset('team/'.$our_value->data_img4)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">icon4: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img4"/>
                                </div>
                            </div>
                          
                            
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt4"
                                        value="{{$our_value->data_alt4}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to4"
                                        value="{{$our_value->data_to4}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data4:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data4"
                                        value="{{$our_value->data4}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                @if($our_value->data_img5)
                                 <img src="{{asset('team/'.$our_value->data_img5)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                           
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">icon5: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img5"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt5:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt5"
                                        value="{{$our_value->data_alt5}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 5:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to5"
                                        value="{{$our_value->data_to5}}">
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data5:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data5"
                                        value="{{$our_value->data5}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                            
                          
                            
                            <div class="form-group row">
                                @if($our_value->data_img6)
                                 <img src="{{asset('team/'.$our_value->data_img6)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">icon6: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img6"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt6:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt6"
                                        value="{{$our_value->data_alt6}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 6:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to6"
                                        value="{{$our_value->data_to6}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                             <div class="form-group  row"><label class="col-sm-2 col-form-label">Data6:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data6"
                                        value="{{$our_value->data6}}">
                                </div>
                            </div>
                          
                            
                            <div class="hr-line-dashed"></div>
                          
                            
                            <div class="form-group row">
                                @if($our_value->data_img7)
                                 <img src="{{asset('team/'.$our_value->data_img7)}}" alt="image header" height="100" style="background-color: black">
                                @endif
                        
                            </div>
                             <div class="form-group  row"><label class="col-sm-2 col-form-label">icon7: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="data_img7"/>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                          
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Alt7:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_alt7"
                                        value="{{$our_value->data_alt7}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Data to 7:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data_to7"
                                        value="{{$our_value->data_to7}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                          <div class="form-group  row"><label class="col-sm-2 col-form-label">Data7:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="data7"
                                        value="{{$our_value->data7}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                             
                            <div class="form-group row">
                                @if($our_value->bg)
                                 <img src="{{asset('team/'.$our_value->bg)}}" alt="image header" height="100">
                                @endif
                        
                            </div>
                             <div class="form-group  row"><label class="col-sm-2 col-form-label">Background: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="bg"/>
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
