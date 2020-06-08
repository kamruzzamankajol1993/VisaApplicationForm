@extends('admin.master.page-master')

@section('title')
Thana List
@endsection

@section('body')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a class="btn btn-primary waves-effect" href="{{ route('thana.create') }}">
                <i class="material-icons">add</i>
                <span>Add New Thana</span>
            </a>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <div class="header">
                           <h2>
                            ALL THANAS
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
                                    <th>District Name</th>
                                    <th>Thana Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>District Name</th>
                                    <th>Thana Name</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($states as $key=>$category)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $category->dis_id }}</td>
                                       <td>{{ $category->thana_name }}</td>
                                           
                                            <td class="text-center">
                                                <!--<a href="{{ route('state.edit',$category->id) }}" class="btn btn-info waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </a>-->
                                                <button class="btn btn-danger waves-effect" type="button" onclick="deleteTag({{ $category->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $category->id }}" action="{{ route('city.destroy',$category->id) }}" method="POST" style="display: none;">
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
@endsection