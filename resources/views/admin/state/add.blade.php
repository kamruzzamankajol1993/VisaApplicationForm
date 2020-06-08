@extends('admin.master.page-master')

@section('title')
Add State 
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
                           ADD NEW STATE
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('state.store') }}" id="form_validation" method="POST">
                            @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="state_name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                               
                             
                                
                               <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('state') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection