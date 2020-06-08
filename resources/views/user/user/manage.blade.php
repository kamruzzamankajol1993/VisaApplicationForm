@extends('user.master.page-master')

@section('title')
ALL USER LIST
@endsection

@section('body')
<section class="content">
        <div class="container-fluid">
            
            <div class="block-header">
                <a class="btn btn-primary waves-effect" href="{{ route('user.applicant.create') }}">
                <i class="material-icons">add</i>
                <span>Add New User</span>
            </a>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <div class="header">
                           <h2>
                            ALL USER LIST
                            <span class="badge bg-blue"></span>
                        </h2>
                    </div>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <br><br>
                                   <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                             <th>Registration Date & Time</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>WhatsNumber </th>
                                            <th>Facebook_id</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Thana</th>
                                             <th>District</th>
                                            <th>Visa Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                             <th>Registration Date & Time</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>WhatsNumber </th>
                                            <th>Facebook_id</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Thana</th>
                                             <th>District</th>
                                            <th>Visa Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          @foreach($users as $key=>$student)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{$student->fname." ".$student->lname}}</td>
                                            <td>{{$student->created_at}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>{{$student->Wanumber}}</td>
                                            <td>{{$student->fb_id}}</td>
                                            <td>{{$student->city}}</td>
                                            <td>{{$student->state}}</td>
                                            <td>{{$student->thana}}</td>
                                             <td>{{$student->district}}</td>
                                            <td>{{$student->status_visa}}</td>
                                         <td class="text-center">
                                            <a href="{{ route('user.applicant.show',$student->id) }}" class="btn btn-info waves-effect">
                                                    <i class="material-icons">visibility</i>
                                                </a>
            <!--<a href="{{ route('user.edit',$student->id) }}" class="btn btn-success waves-effect" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="material-icons">edit</i>
              </a>-->
         
    <button class="btn btn-danger waves-effect" type="button" onclick="deleteAgent({{ $student->id }})" data-toggle="tooltip" data-placement="top" title="Delete">
              <i class="material-icons">delete</i>
                                                </button>
            <form id="delete-form-{{ $student->id }}" action="{{ route('user.applicant.destroy',$student->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript">
        function deleteAgent(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
function approveAgent(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to Active This User ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, active it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('approval-form').submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The Agent  Remain Inactive :)',
                        'info'
                    )
                }
            })
        }

         function inactiveAgent(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to Inactive This User ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, inactive it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('inactive-form').submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The Agent  Remain Active :)',
                        'info'
                    )
                }
            })
        }
    </script>
@endsection