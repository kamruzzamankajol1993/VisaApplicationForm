@extends('front.master.master')
@section('title')
    Register
@endsection
<style>

    .custom_border_left {
        border-left: 3px solid red !important;
    }

    .nopadding {
        padding: 0 !important;

    }

    .custom_form_head {
        color: black;
        font-family: 'Oswald', sans-serif;
        font-size: 11px;
    }

    .custom_address {
        color: black;
        font-family: 'Oswald', sans-serif;
        font-size: 10px;
    }
    .custom_bangla_text {
        color: white;
        font-family: 'Baloo Da 2', cursive;
        font-size: 13px;
    }

</style>
@section('body')


    <section class="bg-title-page flex-c-m  p-l-15 p-r-15 py-2" style="background:#017D48;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="t-center ">
                        <span class="custom_bangla_text" style="font-size:33px">বৈধ কর্মসংস্থান</span>

                    </h2>
                    <div class="text-center" style="padding-top:5px;">
                        <span class="custom_bangla_text">এবং </span>
                    </div>
                    <h6 class="text-center" style="padding-top:5px;">
                        <span class="custom_bangla_text" style="font-size:50px;">ভিসা</span><span style="font-size:23px" class="custom_bangla_text">জটিলতার </span>
                    </h6>
                    <h6 class="text-center">
                        <span class="custom_bangla_text" style="font-size:16px">সমাধানে আমাদের এই উদ্যোগ</span>
                    </h6>




                </div>

            </div>
        </div>
    </section>

    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-l-15 p-r-15 mt-5"
             style="background-image: url(public/front-end/images/main.jpg);background-repeat: no-repeat;background-position: center 0;background-size: cover;">


        <div class="container">


            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{route('user.store.file')}}" method="post"  enctype="multipart/form-data">
                @csrf

 <div class="row ">
                    <div class="col-12 text-center mb-2">
                        <span class="t-center" style="color:#979797;font-size:20px">Document</span>
<span class="t-center custom_bangla_text" style="color:grey;font-size:20px">
						(যদি সম্ভব হয়)

						</span>



                    </div>

                </div>

                <div class="row ">
                    <div class="col-6 nopadding ">
                        <!-- Email -->
                        <span class="custom_form_head">
							Passport Size Image
						</span>

                        <div class="wrap-inputemail  bo2 ">
             <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="file" name="image" id="fname" placeholder="Passport Size Image">
             	<input class="bo-rad-10 sizefull txt10 p-l-20" type="hidden" name="user_id" id="fname" value="" placeholder="Passport Size Image" >
                        </div>
                    </div>
                    <div class="col-6 nopadding">
                        <!-- Email -->
                        <span class="custom_form_head">
							Passport Copy
						</span>

                        <div class="wrap-inputemail  bo2 ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="file" name="passport_id" id="lname" placeholder="Passport Copy">
                        </div>
                    </div>

                </div>

                <div class="row ">
                    <div class="col-6 nopadding">
                        <!-- Email -->
                        <span class="custom_form_head">
							Document 1
						</span>

                        <div class="wrap-inputemail  bo2 ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="file" type="file" name="doc1" id="fname" placeholder="Document1">
                        </div>
                    </div>
                    <div class="col-6 nopadding">
                        <!-- Email -->
                        <span class="custom_form_head">
							Document 2
						</span>

                        <div class="wrap-inputemail  bo2 ">
                            <input class="custom_border_left form-control-sm sizefull txt10 p-l-20" type="file" name="doc2" id="lname" placeholder="Document2">
                        </div>
                    </div>

                </div>


        </div>

        <div class="wrap-btn-booking flex-c-m m-t-13 mb-5">
            <!-- Button3 -->
            <input type="submit" id="sub-btn" style="background-color: #017D48" class="btn  flex-c-m size36 txt11 trans-0-4" value="Submit">

        </div>

        </form>


        </div>
    </section>

@endsection
