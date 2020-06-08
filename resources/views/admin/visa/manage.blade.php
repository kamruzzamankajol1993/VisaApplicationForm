@extends('admin.master.cat-master')

@section('title')
Visa List
@endsection

@section('body')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a class="btn btn-primary waves-effect" href="{{ route('vs.create') }}">
                <i class="material-icons">add</i>
                <span>Add New</span>
            </a>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <div class="header">
                           <h2>
                            ALL STATUS LIST
                            <span class="badge bg-blue">{{ $states->count() }}</span>
                        </h2>
                    </div>
                            
                        </div>
                        <div class="body">
                            <ul class="sort_menu list-group">
                @foreach ($states as $cat)
                <li class="list-group-item" data-id="{{$cat->id}}">
                    <span class="handle"></span>
                    <h6>{{$cat->vs}}</h6>
                     <div style="margin-left: 334px;"><button class="btn btn-danger waves-effect" type="button" onclick="deleteTag({{ $cat->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $cat->id }}" action="{{ route('vs.destroy',$cat->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    
                                                </form>
          <!--<a href="{{ route('vs.edit',$cat->id) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>--></div></li>
                @endforeach
            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        <style>
    .list-group-item {
        display: flex;
        align-items: center;
    }

    .highlight {
        background: #f7e7d3;
        min-height: 30px;
        list-style-type: none;
    }

    .handle {
        min-width: 18px;
        background: #607D8B;
        height: 15px;
        display: inline-block;
        cursor: move;
        margin-right: 10px;
    }
</style>
    </section>
    <script>
    $(document).ready(function(){

      function updateToDatabase(idString){
         $.ajaxSetup({ headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}});
        
         $.ajax({
              url:'{{url('/admin/update-items')}}',
              method:'POST',
              data:{ids:idString},
              success:function(){
                 alert('Successfully updated')
                 //do whatever after success
              }
           })
      }

        var target = $('.sort_menu');
        target.sortable({
            handle: '.handle',
            placeholder: 'highlight',
            axis: "y",
            update: function (e, ui){
               var sortData = target.sortable('toArray',{ attribute: 'data-id'})
               updateToDatabase(sortData.join(','))
            }
        })
        
    })
</script>
@endsection