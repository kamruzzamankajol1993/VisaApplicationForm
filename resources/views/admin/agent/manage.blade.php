@extends('admin.master.page-master')

@section('title')
Agent List
@endsection

@section('body')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a class="btn btn-primary waves-effect" href="{{ route('admin.user.create') }}">
                <i class="material-icons">add</i>
                <span>Add New Agent</span>
            </a>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <div class="header">
                           <h2>
                            ALL ADDRESS
                            <span class="badge bg-blue">{{ $states->count() }}</span>
                        </h2>
                    </div>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                 <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                      <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                   <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                      <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($states as $key=>$category)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->email }}</td>
                                            <td>{{ $category->phone }}</td>
                                            <td>
        @if($category->role_id==0)
        <button class="btn bg-orange btn-lg btn-block waves-effect" type="button">INACTIVE</button>
        @else
        <button class="btn btn-success btn-lg btn-block waves-effect" type="button">ACTIVE</button>
        @endif
      </td>
                                            <td class="text-center">
                                                 @if($category->role_id == 1)
        <h2 class="text-center text-danger">Main Admin</h2>
        @else
         
         @if($category->role_id == 0)
             
            <button type="button" class="btn btn-warning waves-effect" onclick="approveAgent({{ $category->id }})" data-toggle="tooltip" data-placement="top" title="Inactive">
               <i class="material-icons">arrow_downward</i>
                
            </button>
            <form method="post" action="{{ route('admin.user.active',$category->id) }}" id="approval-form" style="display: none">
                @csrf
                @method('PUT')
            </form>
            @else
            
            <button type="button" class="btn btn-success waves-effect" onclick="inactiveAgent({{ $category->id }})" data-toggle="tooltip" data-placement="top" title="Active">
               <i class="material-icons">arrow_upward</i>
                
            </button>
            <form method="post" action="{{ route('admin.user.inactive',$category->id) }}" id="inactive-form" style="display: none">
                @csrf
                @method('PUT')
            </form>
             @endif
                                                <a href="{{ route('admin.user.edit',$category->id) }}" class="btn btn-info waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <button class="btn btn-danger waves-effect" type="button" onclick="deleteTag({{ $category->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $category->id }}" action="{{ route('admin.user.destroy',$category->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    
                                                </form>
                                                @endif
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
@endsection