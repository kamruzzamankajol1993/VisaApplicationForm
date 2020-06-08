@extends('admin.master.page-master')

@section('title')
Add Thana
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
                           ADD NEW THANA
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('thana.store') }}" id="form_validation" method="POST">
                            @csrf
                              <div class="form-group">
                                       <select class="form-control show-tick" name="dis_id">
                                        <option value="">-- Please select --</option>
                                        @foreach($states as $state )
                                        <option value="{{ $state->dis_name }}">{{ $state->dis_name }}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="thana_name" required>
                                        <label class="form-label">Thana Name</label>
                                    </div>
                                </div>
                               
                             
                                
                               <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('thana') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection