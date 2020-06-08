@extends('front.master.master')
@section('title')
Register
@endsection
<style>

    .custom_bangla_text {
        color: white;
        font-family: 'Baloo Da 2', cursive;
        font-size: 17px;
        line-height: 25px;
    }

    .social_icon{
        width: 30px;
        height: 30px;
        display: inline-block;
        background: blue;
        color: white;
        border-radius: 50%;
        padding-top: 7px;
        position: absolute;
        top: 2px;
        left: -36px;
    }
    .social_icon_whatsapp{
        width: 30px;
        height: 30px;
        display: inline-block;
        background: #09de36;
        color: white;
        border-radius: 50%;
        padding-top: 7px;
        position: absolute;
        top: 2px;
        left: -36px;
    }

    .social_text {
        color: white;
        font-family: 'Baloo Da 2', cursive;
        font-size: 11px;

    }
    .custom_li_margin{
        margin:6px !important;;
    }
</style>
@section('body')
    <section class="bg-title-page flex-c-m  p-l-15 p-r-15 py-2" style="background:#EE1D23;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-left">
                        <span class="custom_bangla_text" style="font-size:25px">বৈধ কর্মসংস্থান সাথে থাকুন </span> <br>
                        <span class="custom_bangla_text" style="font-size:25px">অপরকে সহায়তা করুন । </span>

                    </h2>

                    <h6 class="text-left pt-2">
                        <span class="custom_bangla_text" style="font-size:25px">শেয়ার করুন </span>
                    </h6>
                    <h6 class="text-left">
                        <span class="custom_bangla_text" style="font-size:25px">আমাদের ওয়েব লিঙ্ক... </span>
                    </h6>



                </div>

            </div>
        </div>
    </section>



	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 pb-2" style="background-image:url(public/front-end/images/bg.png);">


		<div class="container">


				<div class="row">
					<div class="col-md-12">

					 <h4 class="text-success text-center"> <b>You have Successfully Registered</b></h4>





					</div>

				</div>






		</div>
	</section>
    <section class="bg-title-page flex-c-m   py-4" style="background:#017D48;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul>
                        <li class="custom_li_margin" style="display: inline-block;position: relative">
                            <span class="social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                            <div style="text-align:left;">
                                <span class="social_text">আপডেট জানতে ফেসবুক পেইজে লইক দিন </span><br>
                                <a class="social_text" href="http://visadubaibd.com">visadubaibd.com</a>
                            </div>

                        </li>
                        <li class="custom_li_margin" style="display: inline-block;position: relative">
                            <span class="social_icon_whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                            <div style="text-align:left;width: 208px">
                                <span class="social_text">প্রয়োজনে হোয়াটসআপ করুন</span>
                                <br>
                                <span class="social_text">0009800598569</span>
                            </div>

                        </li>
                    </ul>



                </div>

            </div>
        </div>
    </section>
    <section class=" flex-c-m  my-2 py-4" style="margin-bottom:200px !important;">
        <h6 class="text-center"> <b>Go To Home page <a href="{{route('user.home')}}" class="btn btn-danger" >Click Here</a> </b></h6>
    </section>

@endsection
