@extends('admin.master.master')

@section('title')
Setting
@endsection

@section('body')
<section class="content">
	<div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            SETTINGS
                        </h2>
                        <!--<ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>-->
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                           
                            <li role="presentation" class="active">
                                <a href="#change_password_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">change_history</i> CHANGE PASSWORD
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          
                            <div role="tabpanel" class="tab-pane fade in active" id="change_password_with_icon_title">
                                <form method="POST" action="{{ route('admin.update') }}" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="old_password">Old Password : </label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" id="old_password" class="form-control" placeholder="Enter your old password" name="old_password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password">New Password : </label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" id="password" class="form-control" placeholder="Enter your new password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="confirm_password">Confirm Password : </label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" id="confirm_password" class="form-control" placeholder="Enter your new password again" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection