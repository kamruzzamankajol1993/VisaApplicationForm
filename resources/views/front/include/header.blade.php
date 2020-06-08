<style>
    .my-custom-bg {
        background-image: url('{{URL::to('public/front-end/images/main.jpg')}}');
        background-repeat: repeat;
        background-position: center 0;
        background-size: cover;
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
        font-size: 13px;
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
        font-size: 11px;
    }


</style>
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
            <div class="col ">
                <img src="{{URL::to('public/front-end/images/right_visa_logo.jpg')}}" class="img-fluid"
                     alt="Responsive image">
            </div>
        </div>
    </div>
</section>
<!--Title Page -->
<section class="bg-title-page flex-c-m  p-l-15 p-r-15 py-2" style="background:#5A5B5A;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="t-center ">
                    <b class="text-light">Job </b><span class="custom_text">Application</span>

                </h2>
                <h6 class="text-center" style="padding-top:5px;">
                    <span class="custom_bangla_text">যোগ্যতা অনুযায়ী কাজের সন্ধানে নিজেকে তুলে ধরুন । </span>

                </h6>
                <h6 class="text-right custom_bangla_text" style="padding-top:5px;">
                    <span class="custom_border"></span>
                    <span style="color:yellow">অটো আপডেট পেতে চোখ রাখুন</span>


                </h6>
                <h6 class="t-center " style="padding-top:5px;">
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
