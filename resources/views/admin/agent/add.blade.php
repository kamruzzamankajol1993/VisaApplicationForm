@extends('admin.master.page-master')

@section('title')
Add Agent
@endsection

@section('body')
<section class="content">
	<div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                           ADD NEW Agent
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.user.store') }}" id="form_validation" method="POST">
                            @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="phone" required>
                                        <label class="form-label">Phone</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                               
                             
                                
                               <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.user') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection