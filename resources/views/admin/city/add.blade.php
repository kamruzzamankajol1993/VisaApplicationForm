@extends('admin.master.page-master')

@section('title')
Add City
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
                        <form action="{{ route('city.store') }}" id="form_validation" method="POST">
                            @csrf
                              <div class="form-group">
                                       <select class="form-control show-tick" name="state_id">
                                        <option value="">-- Please select --</option>
                                        @foreach($states as $state )
                                        <option value="{{ $state->state_name }}">{{ $state->state_name }}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="city_name" required>
                                        <label class="form-label">City Name</label>
                                    </div>
                                </div>
                               
                             
                                
                               <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('city') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection