@extends('user.master.master')

@section('title')
 {{$info->fname." ".$info->lname}}
@endsection

@section('body')
<section class="content">
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
         <a href="{{ route('user') }}" class="btn btn-danger waves-effect">BACK</a>
         
        <a href="{{route('user.print',['id'=>$info->id])}}" class="btn btn-info waves-effect">Print</a>
            <a href="{{ route('home') }}" type="button" class="btn btn-success waves-effect pull-right" onclick="">
                <i class="material-icons">done</i>
                <span>Go To DashBoard</span>
            </a>
           
       
          
       
        <br>
        <br>
        <div class="row clearfix">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

          </div>
          <div class="col-lg-6 col-md-6 col-sm-9 col-xs-9">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Image
                        </h2>
                    </div>
                    <div class="body">
                      @foreach($files as $file)
                      @if($info->id == $file->user_id)
                      <center><img src="{{ asset('/public/user-file/'. $file->image )}}" height="150" width="150"></center>
                     
                      
                      @endif
                      @endforeach
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
           
          </div>
      </div>
      <div class="row clearfix">
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Experience
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->experience }}</center>
                    </div>
                  </div>
          </div>
          
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Date Of Bith
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->dob }}</center>
                    </div>
                  </div>
          </div>
       
      </div>
      <div class="row clearfix">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Name
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{$info->fname." ".$info->lname}}</center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Email & Phone 
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{$info->email.", ".$info->phone}}</center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           What's App Number & FaceBook Id
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{$info->Wanumber.", ".$info->fb_id}}</center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Visa status
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->status_visa }}</center>
                    </div>
                  </div>
          </div>
      </div>
       <div class="row clearfix">
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Passport Expire Date
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->pex }}</center>
                    </div>
                  </div>
          </div>
          
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Visa Expire Date
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->vex }}</center>
                    </div>
                  </div>
          </div>
       
      </div>
       <div class="row clearfix">
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Registration Date & Time
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->created_at }}</center>
                    </div>
                  </div>
          </div>
          
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Passport Number
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{ $info->pn }}</center>
                    </div>
                  </div>
          </div>
       
      </div>
      <div class="row clearfix">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           City & state
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{$info->city.", ".$info->state}}</center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Thana & District
                        </h2>
                    </div>
                    <div class="body">
                      <center>
                                                    {{$info->thana.", ".$info->district}}
                                                </center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           Labour Job
                        </h2>
                    </div>
                    <div class="body">
                      
                         <ul>
                          @foreach($labours as $labour)
                           <li>{{ $labour->labour_post_name }}</li>
                          @endforeach
                         </ul>                       
                      
                    </div>
                  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Executives Job
                        </h2>
                    </div>
                    <div class="body">
                     <ul>
                          @foreach($executives as $labour)
                           <li>{{ $labour->executive_post_name}}</li>
                          @endforeach
                         </ul> 
                    </div>
                  </div>
          </div>
      </div>
      <div class="row clearfix">
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Expectation Salary
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{$info->es}}</center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Bangladesh Reference Name & Phone
                        </h2>
                    </div>
                    <div class="body">
                      <center>{{$info->refrence_bd_name.", ".$info->refrence_bd_number}}</center>
                    </div>
                  </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                           UAE Reference Name & Phone
                        </h2>
                    </div>
                    <div class="body">
                      <center>
                          {{$info->refrence_uae_name.", ".$info->refrence_uae_number}}
                                                </center>
                    </div>
                  </div>
          </div>
         
        
      </div>
       <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Passporty Copy
                        </h2>
                    </div>
                    <div class="body">
                       @foreach($files as $file)
                      @if($file->user_id == $info->id)
                       <center><embed
src="{{ asset('/public/user-file/'. $file->passport_id )}}"
style="width:800px; height:600px;"
frameborder="0"></center>
                      
                      @endif
                      @endforeach
                     
                    </div>
                  </div>
          </div>
         
        
        
      </div>
       <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Document 1
                        </h2>
                    </div>
                    <div class="body">

                      @foreach($files as $file)
                      @if($file->user_id == $info->id)
                       <center><embed
src="{{ asset('/public/user-file/'. $file->doc1 )}}"
style="width:800px; height:600px;"
frameborder="0"></center>
                      
                      @endif
                      @endforeach
                    </div>
                  </div>
          </div>
         
        
        
      </div>
       <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                          Document 2
                        </h2>
                    </div>
                    <div class="body">
                      @foreach($files as $file)
                      @if($file->user_id == $info->id)
                       <center><embed
src="{{ asset('/public/user-file/'. $file->doc2 )}}"
style="width:800px; height:600px;"
frameborder="0"></center>
                      
                      @endif
                      @endforeach
                    </div>
                  </div>
          </div>
         
        
        
      </div>
    </div>
</section>

@endsection