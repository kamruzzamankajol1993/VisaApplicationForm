<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        body {
           
            
        }
    </style>
</head>
<body>
<div class="header">
    <center><h4>Applicant Information</h4></center>
</div>
<div class="header">
    <center> @foreach($files as $file)
                      @if($info->id == $file->user_id)
                      <center><img src="{{ asset('/public/user-file/'. $file->image )}}" height="150" width="150"></center>
                     
                      
                      @endif
                      @endforeach</center>
</div>
<div class="body">
  <div style="">
<ul>
  <li>
    <b>Name:</b>{{$info->fname." ".$info->lname}}
  </li><br>
  <li>
    <b>Experience:</b>{{$info->experience}}
  </li><br>
  <li>
    <b>Email & Phone :</b>{{$info->email.", ".$info->phone}}
  </li><br>
  <li>
    <b>What's App Number & FaceBook Id:</b>{{$info->Wanumber.", ".$info->fb_id}}
  </li><br>
  <li>
    <b>Date Of Birth:</b>{{$info->dob}}
  </li><br>
  <li>
    <b>Passport Number:</b>{{$info->pn}}
  </li><br>
  <li>
    <b>Visa status:</b>{{$info->status_visa}}
  </li><br>
  <li>
    <b>Passport Expire Date:</b>{{$info->pex}}
  </li><br>
  <li>
    <b>Visa Expire Date:</b>{{$info->vex}}
  </li><br>
  <li>
    <b>City & state:</b>{{$info->city.", ".$info->state}}
  </li><br>
  <li>
    <b>Thana & District:</b> {{$info->thana.", ".$info->district}}
  </li><br>
  <li>
    <b>Labour Job:</b> <ul>
                          @foreach($labours as $labour)
                           <li>{{ $labour->labour_post_name }}</li>
                          @endforeach
                         </ul>
  </li><br>
   <li>
    <b>Executive Job:</b> <ul>
                          @foreach($executives as $labour)
                           <li>{{ $labour->executive_post_name}}</li>
                          @endforeach
                         </ul>
  </li><br>
  <li>
    <b>Expectation Salary:</b> {{$info->es}}
  </li><br>
  
  <li>
    <b>Registratin Date & Time:</b>{{$info->created_at}}
  </li><br>
</ul>
</div>



</div>

</body>
</html>