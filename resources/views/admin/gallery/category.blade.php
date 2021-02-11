@extends('admin.includes.app')
@section('content')




@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
    <ul>
        @foreach (session('success') as $message)
        <li>{{  $message }}</li>
        @endforeach
    </ul>
    @else
    {{ session('success') }}
    @endif
</div>
@endif

<div class="container-fluid m-0 p-0">
    
    <!-- Begin Page Content -->
    <div class="collapse" id="createNewForm">
        <div class="card mb-4 shadow">
    
            <div class="card-header py-3  bg-abasas-dark ">
                <nav class="navbar navbar-dark">
                    <a class="navbar-brand text-light"> Add new Category </a>
                </nav>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('gallery-categories.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row align-items-center" id="createFormFieldList">
                      
                    
                        <div class="form-group col-md-5 col-sm-12 p-4  ">
                            <label for="name"> Name<span style="color: red"> *</span></label>
                            <input type="text" name="name" class="form-control" id="name"   required>
                        </div>
    
                                        
                        <div class="form-group col-md-5 col-sm-12 p-4  ">
                            <label for="caption"> Description<span style="color: red"> *</span></label>
                            <input type="text" name="description" class="form-control" id="description">
                        </div>
    
                    </div>
                    <div class="col-12">
                            <button type="submit" class="btn bg-abasas-dark mt-3">Submit</button>
                        </div>
    
                </form>
            </div>
        </div>
    </div>
    
    
        <div class="card mb-4 shadow">
    
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar  ">
    
                    <div class="navbar-brand"><span id="eventList"> Category For Gallery</span> </div>
                    <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" data-toggle="collapse"
                        data-target="#createNewForm" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-plus"
                            id="PlusButton"></i></button></div> 
    
                </nav>
            </div>
            <div class="card-body">
    

                <div class="table-responsive">
    
    
    
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    
                        <thead class="bg-abasas-dark">
    
                            <tr>
    
                                <th> #</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tfoot class="bg-abasas-dark">
                            <tr>
    
                                <th> #</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
    
                            </tr>
    
                        </tfoot>
    
                        <tbody >
    
                            @php
                            $itr=1;
                            @endphp

                        @foreach ($categories as $category)
                             <tr class="data-row" >
                                <td class="iteration">{{$itr++}}</td>
                                <td class="word-break name">{{ $category->name }}</td>
                                <td class="word-break description">{{ $category->description }}</td>
                                
                                <td class="align-middle">  
                                    <button type="button" class="btn btn-success" id="level-edit-item" data-item-id={{$category->id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>
    
                                    <form method="POST" action="{{ route('gallery-categories.destroy',$category->id )}} " id="delete-form-{{ $category->id }}" style="display:none; ">
                                        {{csrf_field() }}
                                        {{ method_field("delete") }}
                                    </form>
    
    
                                    <button onclick="if(confirm('are you sure to delete this')){
                                        document.getElementById('delete-form-{{ $category->id }}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }
                                        " class="btn btn-danger btn-sm btn-raised">
                                        <i class="fa fa-trash" aria-hidden="false"></i>
                                    </button>
    
                                </td>
    
                             </tr>
                             @endforeach
                        </tbody>
                    </table>
    
                </div>
    
    
            </div>
    
    
        </div>
    </div>
 <!-- Attachment Modal -->
 <div class="modal fade" id="level-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">Edit Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="level-edit-form" class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                @csrf
                  @method('put')
                <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-id">Id </label>
                        <input type="text" name="id" class="form-control" id="modal-input-id" readonly>
                    </div>
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" id="modal-input-name" >
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-description">Description</label>
                        <input type="text" name="description" class="form-control" id="modal-input-description" >
                    </div>

                   
                    <div class="form-group">
                        <input type="submit" value="Submit" class="form-control btn btn-success">
                    </div>
                    <!-- /description -->
                </form>
            </div>

        </div>
    </div>
</div>






    <script>
            $(document).ready(function(){
        
        $('body').on('click', '#AddNewFormButton', function () {
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');

        });
        $(document).on('click','#level-edit-item', function(){
            $(this).addClass('edit-item-trigger-clicked');
            var options = {
           'backdrop': 'static'
         };
    
      $('#level-edit-modal').modal(options)
         });
  
       // on modal show
  $('#level-edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');

    var name = row.children(".name").text();
    var description = row.children(".description").text();


    var home = "{{route('index')}}";
                var link = "admin/gallery-categories/"
                var action = home.trim() + '/' + link.trim() + id;
                $('#level-edit-form').attr('action',action);
        

    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $("#modal-input-name").val(name);
    $("#modal-input-description").val(description);

  });

  $('#level-edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#level-edit-form").trigger("reset");
  });


        });


    </script>



@endsection