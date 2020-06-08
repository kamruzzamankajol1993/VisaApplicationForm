@extends('front.master.master')
@section('title')
    Register
@endsection
<style>
    .my-custom-bg {
        background-image: url('{{URL::to('public/front-end/images/bg.png')}}');


    }

    .rotated {
        transform: rotate(-45deg);
        -ms-transform: rotate(-45deg); /* IE 9 */
        -moz-transform: rotate(-45deg); /* Firefox */
        -webkit-transform: rotate(-45deg); /* Safari and Chrome */
        -o-transform: rotate(-45deg); /* Opera */
    }

    .custom_text {
        color: white;
        font-family: 'Raleway', sans-serif;
    }

    .custom_bangla_text {
        color: white;
        font-family: 'Baloo Da 2', cursive;
        font-size: 11px;
    }

    .custom_border {
        height: 10px;
        width: 10px;
        background-color: white;
        border-radius: 50%;
        display: inline-block;
    }

    .custom_header_last_text {
        color: white;
        font-family: 'Oswald', sans-serif;
        font-size: 0.66rem;
    }

    .custom_border_left {
        border-left: 3px solid red !important;
        border-top: 3px solid #979799;
        border-bottom: 1px solid #979799;
        border-right: 1px solid #979799;
    }

    .nopadding {
        padding: 0 !important;

    }

    .custom_form_head {
        color: black;
        font-family: 'Oswald', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }

    .custom_address {
        color: black;
        font-family: 'times new roman', sans-serif;
        font-size: 10px;
        font-weight:500;
    }
    .custom_height{
        min-height: 50px;
        width: 100%;
    }
    .custom_label{
        font-family: Tahoma;
        font-weight: 400;
        font-size: 15px;
        color: #000;
    }
    .bg-title-page{
        padding-left: 13px !important;
        padding-right: 13px !important;
    }

</style>
@section('body')
    {{--    Logo--}}
    <section class="flex-c-m  p-l-15 p-r-15 my-custom-bg  py-1">
        <div class="container">
            <div class="row">
                <div class="">
                    <img src="{{URL::to('public/front-end/images/left_visa_logo.jpg')}}" class=""
                         alt="Responsive image" style="height: 62px">
                </div>
                <div class="col">
                    <img src="{{URL::to('public/front-end/images/middle_visa_logo.jpg')}}" class="img-fluid "
                         alt="Responsive image">
                </div>
                <div class="col px-2">
                    <img src="{{URL::to('public/front-end/images/right_visa_logo.jpg')}}" class="img-fluid"
                         alt="Responsive image" style="height: 60px;">
                </div>
            </div>
        </div>
    </section>
    <!--Title Page -->
    <section class="bg-title-page flex-c-m  p-l-15 p-r-15 py-2" style="background:#5A5B5A;">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="right">
                        <b class="text-light" style="letter-spacing: 2px;">Job </b><span class="custom_text" style="letter-spacing: 2px">Application</span>

                    </h2>
                    <h6 style="padding-top:5px;" align="right">
                        <span class="custom_bangla_text">যোগ্যতা অনুযায়ী কাজের সন্ধানে নিজেকে তুলে ধরুন । </span>

                    </h6>
                    <h6 align="right" class="text-right custom_bangla_text" style="padding-top:5px;">
                        <span class="custom_border"></span>
                        <span style="color:yellow">অটো আপডেট পেতে চোখ রাখুন । </span>


                    </h6>
                    <h6 align="right" style="padding-top:5px;">
                        <span class="custom_header_last_text">Please complete the form below to apply for a position with us</span>


                    </h6>


                </div>
                <!--<div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <h6 class="tit7 t-center">
            <b class="text-light">Available Seat</b><br>

            <span id="countm" class="text-light">0</span>

            <span id="countm" class="text-light"></span>

        </h6>
                </div>-->
            </div>
        </div>
    </section>

{{--    address--}}
    <section class="section-contact bg1-pattern p-l-10 p-r-10"
             style="background-image: url(public/front-end/images/bg.png);">
        <strong class="custom_address"><span style="color:red !important;">Office</span> : 50th Floor, Aspin Commercial
            Building, Shiek Zayed Road,Dubai, U.A.E</strong>
        <strong class="custom_address"><span style="color:green !important;">Whatsapp and Contact</span> :
            00971543789080, 81 <span style="color:red !important;">Email: </span> visa2020uae@gmail.com: </strong>
        <strong class="custom_address"><span style="color:red !important;">Sharjah Office</span> : Rollah, Bangla Bazar
            : 00971543789082, 00971543789083</strong>
    </section>

    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-l-30 p-r-30"
             style="background-image: url(public/front-end/images/bg.png);">


        <div class="container">


            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{route('user.store')}}" method="post">
                @csrf
                                 <?php
$dt = new DateTime();
$dt->setTimezone(new DateTimezone('Asia/Dhaka'));

?>
                <div class="row">
                    <div class="col-md-12 text-center">

						<span class="t-center custom_form_head">
						Name(English)
						</span>


                    </div>

                </div>
                <div class="row mt-1">
                    <div class="col-6 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
							First Name
						</span>

                        <div class="wrap-inputname     ">
                            <input class=" custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text"
                                   name="fname" id="fname" placeholder="First Name" required
                                   data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup">
                                   <input type="hidden" class="form-control" name="created_at" value="<?php echo $dt->format('Y-m-d H:i:s');?>" placeholder="Post Title">
                        </div>
                    </div>
                    <div class="col-6 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
							Last Name
						</span>

                        <div class="wrap-inputname    ">
                            <input class=" custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text"
                                   name="lname" id="lname" placeholder="Last Name" required
                                   data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <span class="t-center custom_form_head">
						Contact Details
						</span>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-12 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
								Telephone with Code
						</span>

                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text" name="phone" id="fname"
                                   placeholder="Telephone with Code">
                        </div>
                    </div>
                    <div class="col-12 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
								What's App Number with Code
						</span>


                        <div class="wrap-inputname    ">
                            <input class="custom_border_left  sizefull txt10 p-l-20 form-control-sm" type="text" name="Wanumber" id="lname"
                                   placeholder="What's App Number with Code">
                        </div>
                    </div>
                    <div class="col-12 nopadding">
                        <!-- Name -->

                        <span class="custom_label">
								Email
						</span>
                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="email" name="email" id="fname"
                                   placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
							Facebook Id
						</span>

                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text" name="fb_id" id="lname"
                                   placeholder="Facebook Id">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="col-md-12 text-center">
                        <span class="t-center custom_form_head">
						Visa Status
						</span>
                        </div>

                    </div>

                </div>
                <div class="row ">
                    <div class="col-12 nopadding">

						<span class="custom_label">
							Visa Status
						</span>

                        <div class="wrap-inputphone    ">
                            <select class="custom_border_left sizefull txt10 p-l-20 form-control-sm" id="inlineFormCustomSelect"
                                    name="status_visa">
                               <option selected disabled>Choose...</option>
                                @foreach($vsts as $vst)
                                <option value="{{ $vst->vs }}">{{ $vst->vs }}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>

                </div>
                  <div class="row mt-2">


                     <div class="col-12 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
                            Passport Number
                        </span>

                        <div class="wrap-inputname     ">
                            <input class=" custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text"
                                   name="pn" id="fname" placeholder="Passport Number" style="height:30px">
                        </div>
                    </div>
                    <div class="col-12 nopadding">
                        <!-- Name -->
                       <span class="custom_label mt-2" style="display: inline-block">
                            Date Of Birth(পাসপোর্ট অনুযায়ী)
                        </span>

                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="date"
                                   name="dob" id="dob" placeholder="Date Of Birth" style="height:30px">
                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-6 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
                            Visa Expire Date
                        </span>

                        <div class="wrap-inputname     ">
                            <input class=" custom_border_left sizefull txt10 p-l-20 form-control-sm" type="date"
                                   name="vex" id="fname" placeholder="Visa Expire Date" style="height:30px">
                        </div>
                    </div>
                    <div class="col-6 nopadding">
                        <!-- Name -->
                        <span class="custom_label">
                            Passport Expire Date
                        </span>

                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="date"
                                   name="pex" id="lname" placeholder="Passport Expire Date" style="height:30px">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="col-md-12 text-center">
                        <span class="t-center custom_form_head">
						Current Address
						</span>
                        </div>



                    </div>

                </div>
                <div class="row ">
                    <div class="col-6 nopadding">

                        <span class="custom_label">
                            State
                        </span>

                        <div class="wrap-inputphone    ">
                            <select class="custom_border_left sizefull txt10 p-l-20 form-control-sm" id="state_id" name="state">
                                <option selected disabled>Choose...</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->state_name}}">{{ $state->state_name }}</option>
                                @endforeach

                            </select>
                        </div>


                    </div>
                    <div class="col-6 nopadding">
                        <!-- Phone -->
                        <span class="custom_label">
							City
						</span>

                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text" name="city" id="fname"
                                   placeholder="City" style="height:30px">
                        </div>
                    </div>

                    <script type="text/javascript">

                        $(document).ready(function(){

                            $('#state_id').on('change',function(){
                                //console.log("hmm its change");

                                var mstate_id=$(this).val();
                                //console.log(cat_id);
                                var div=$(this).parent();


                                var op=`<select class="cityname custom_border_left sizefull txt10 p-l-20 form-control-sm" id="city_id" name="city">`;

                                $.ajax({
                                    type:'get',
                                    url:'{!!URL::to('findCityName')!!}',
                                    data:{'id':mstate_id},
                                    success:function(data){

                                        //console.log('success');

                                        //console.log(data);

                                        //console.log(data.length);

                                        // op+='<option value="0" selected disabled>choose sub-category</option>';
                                        for(var i=0;i<data.length;i++){
                                            op+='<option value="'+data[i].city_name+'">'+data[i].city_name+'</option>';
                                        }
                                        // console.log(op)

                                        op+= `</select>`

                                        $('#cityc').html(op);
                                        // div.find('#subcategory').append(op);


                                    },
                                    error:function(){

                                    }

                                });

                            });
                        });

                    </script>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="col-md-12 text-center">
                        <span class="t-center custom_form_head">
						Permanent Address
						</span>
                        </div>



                    </div>

                </div>
                <div class="row ">
                    <div class="col-6 nopadding">

						<span class="custom_label">
							District
						</span>

                        <div class="wrap-inputphone    ">
                            <select class="custom_border_left sizefull txt10 p-l-20 form-control-sm" id="dis_id" name="district">
                                <option selected disabled>Choose...</option>
                                @foreach($dis as $dist)
                                    <option value="{{ $dist->dis_name  }}">{{ $dist->dis_name }}</option>
                                @endforeach

                            </select>
                        </div>


                    </div>
                    <div class="col-6 nopadding">
                        <!-- Phone -->
                        <span class="custom_label">
							Thana
						</span>

                       <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text" name="thana" id="fname"
                                   placeholder="Thana" style="height:30px">
                        </div>
                    </div>
                    <script type="text/javascript">

                        $(document).ready(function(){

                            $('#dis_id').on('change',function(){
                                //console.log("hmm its change");

                                var mdis_id=$(this).val();
                                //console.log(cat_id);
                                var div=$(this).parent();


                                var op=`<select class="custom_border_left sizefull txt10 form-control-sm" id="inlineFormCustomSelect" name="thana">`;

                                $.ajax({
                                    type:'get',
                                    url:'{!!URL::to('findThanaName')!!}',
                                    data:{'id':mdis_id},
                                    success:function(data){

                                        //console.log('success');

                                        //console.log(data);

                                        //console.log(data.length);

                                        // op+='<option value="0" selected disabled>choose sub-category</option>';
                                        for(var i=0;i<data.length;i++){
                                            op+='<option value="'+data[i].thana_name+'">'+data[i].thana_name+'</option>';
                                        }
                                        // console.log(op)

                                        op+= `</select>`

                                        $('#thanac').html(op);
                                        // div.find('#subcategory').append(op);


                                    },
                                    error:function(){

                                    }

                                });

                            });
                        });

                    </script>

                </div>
                <div class="row py-1 mt-2">
                    <div class="col-md-12 nopadding">
                        <h2 class="t-center " >
                            <b class="custom_address" style="font-size: 12px;font-weight: 600">Applying For The Position </b>
                            <span style="font-size: 12px;font-weight: 600" class="custom_address">(সর্বোচ্চ তিনটা নির্বাচন করুন)
                            </span>

                        </h2>



                    </div>

                </div>
                <div class="row ">
                    <div class="col-6 nopadding">
                        <!-- Phone -->
                        <span class="custom_label">
							Labour Job
						</span>

                        <div class="wrap-inputphone    ">
                            <select class="custom_border_left form-control-sm sizefull txt10 p-l-20" style="font-size:9px !important;" id="userRequest_activity1" multiple data-live-search="true"  name="labour_job[]" onchange="maxAllowedMultiselect1(this, 3)">

                                @foreach($ljobs as $job)
                                    <option value="{{ $job->l_job }}">{{ $job->l_job }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6 nopadding">

						<span class="custom_label">
							Executive Job
						</span>

                        <div class="wrap-inputphone    ">
                            <select class="custom_border_left form-control-sm sizefull txt10 p-l-20" style="font-size:9px !important;" id="userRequest_activity" multiple data-live-search="true"  name="executive_job[]" onchange="maxAllowedMultiselect(this, 3)">

                                @foreach($ejobs as $job)
                                    <option value="{{ $job->l_job }}">{{ $job->l_job }}</option>
                                @endforeach

                            </select>


                        </div>


                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-12 text-center">
<span class="t-center custom_form_head">
						Job Experience
						</span>



                    </div>

                </div>
                <div class="row ">
                    <div class="col-12 nopadding">
                        <!-- Message -->
                        <span class="custom_label">
							If not No Need
						</span>
                        <textarea class="custom_border_left custom_height   txt10 p-l-20" name="experience"
                                  placeholder="সংক্ষেপে লিখুন" id="address" required=""></textarea>
                    </div>
                </div>
                 <div class="row mt-2">
                    <div class="col-12 text-center">
<span class="t-center custom_form_head">
						Salary Expectation
						</span>



                    </div>

                </div>
                <div class="row">
                     <div class="col-12 nopadding">

                        <div class="wrap-inputname    ">
                            <input class="custom_border_left sizefull txt10 p-l-20 form-control-sm" type="text" name="es" id="fname"
                                   placeholder="Salary Expectation">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 text-center">
<span class="t-center custom_form_head">
						Reference UAE
						</span>



                    </div>

                </div>
                <div class="row ">
                    <div class="col-6 nopadding ">
                        <!-- Email -->
                        <span class="custom_label">
							Reference Name
						</span>

                        <div class="wrap-inputemail    ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="text" name="refrence_uae_name"
                                   placeholder="Reference Name" id="email">
                        </div>
                    </div>
                    <div class="col-6 nopadding">
                        <!-- Email -->
                        <span class="custom_label">
							Reference Number
						</span>

                        <div class="wrap-inputemail    ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="text" name="refrence_uae_number"
                                   placeholder="Reference Number">
                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-12 text-center">
<span class="t-center custom_form_head">
						Refrence Bangladesh
						</span>



                    </div>

                </div>
                <div class="row ">
                    <div class="col-6 nopadding">
                        <!-- Email -->
                        <span class="custom_label">
							Reference Name
						</span>

                        <div class="wrap-inputemail    ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="text" name="refrence_bd_name"
                                   placeholder="Reference Name" id="email">
                        </div>
                    </div>
                    <div class="col-6 nopadding">
                        <!-- Email -->
                        <span class="custom_label">
							Reference Number
						</span>

                        <div class="wrap-inputemail    ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="text" name="refrence_bd_number"
                                   placeholder="Reference Number">
                        </div>
                    </div>

                </div>


        </div>

        <div class="wrap-btn-booking flex-c-m m-t-13">
            <!-- Button3 -->
            <input type="submit" id="sub-btn" class="btn btn-success flex-c-m size36 txt11 trans-0-4" value="Next ">

        </div>

        </form>


        </div>
    </section>
    <script>
        function maxAllowedMultiselect(obj, maxAllowedCount) {
            var selectedOptions = jQuery('#'+obj.id+" option[value!=\'\']:selected");
            if (selectedOptions.length >= maxAllowedCount) {
                if (selectedOptions.length > maxAllowedCount) {
                    selectedOptions.each(function(i) {
                        if (i >= maxAllowedCount) {
                            jQuery(this).prop("selected",false);
                        }
                    });
                }
                jQuery('#'+obj.id+' option[value!=\'\']').not(':selected').prop("disabled",true);
            } else {
                jQuery('#'+obj.id+' option[value!=\'\']').prop("disabled",false);
            }
        }
    </script>

    <script>
        function maxAllowedMultiselect1(obj, maxAllowedCount) {
            var selectedOptions = jQuery('#'+obj.id+" option[value!=\'\']:selected");
            if (selectedOptions.length >= maxAllowedCount) {
                if (selectedOptions.length > maxAllowedCount) {
                    selectedOptions.each(function(i) {
                        if (i >= maxAllowedCount) {
                            jQuery(this).prop("selected",false);
                        }
                    });
                }
                jQuery('#'+obj.id+' option[value!=\'\']').not(':selected').prop("disabled",true);
            } else {
                jQuery('#'+obj.id+' option[value!=\'\']').prop("disabled",false);
            }
        }
    </script>
@endsection
