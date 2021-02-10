
@extends('admin.includes.app')
@section('content')




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
                    <a class="navbar-brand text-light"> Add new Gallery </a>
                </nav>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('gallery.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row align-items-center" id="createFormFieldList">
                      
                    
                        <div class="form-group col-md-4 col-sm-12 p-4  ">
                            <label for="category"> Category<span style="color: red"> *</span></label>
                            <select class="form-control " value="" name="gallery_category_id" id="category" required>
                           
                            <option selected="selected" disabled value="0"> Select Category</option>
                           @foreach ($categories as $category)
                           <option value="{{ $category->id }}"> {{ $category->name }}</option>
                           @endforeach
           
                            
                        </select>



                        </div>
    
                        <div class="form-group col-md-4 col-sm-12 p-4  ">
                            <label for="image">Upload image <span style="color: red"> * &nbsp;</span></label><i class="fa fa-info-circle"  title="Image Resulation: 1980 X 1080" aria-hidden="true"></i><br>
                            <input type="file" name="image" id="image" accept=" .jpg, .jpeg" required >
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
    
                    <div class="navbar-brand"><span id="eventList"> Gallery List</span> </div>
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
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tfoot class="bg-abasas-dark">
                            <tr>
    
                                <th> #</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
    
                            </tr>
    
                        </tfoot>
    
                        <tbody >
    
                            @php
                            $itr=1;
                            @endphp




                            @foreach ($categories as $category)
                                @php
                                    $galleries = $category->gallery
                                @endphp
                            <tr class="data-row " >
                                <td class="iteration">{{$itr++}}</td>
                                <td class="word-break name" style="vertical-align:middle">{{ $category->name }}</td>
                                <td class="word-break description" style="vertical-align:middle">{{ $category->description }}</td>
                                <td class="word-break image" >
                                   <div class="row">
                                    @foreach ($galleries as $gallery)
                                    <div class="col-12 col-md-3 p-1">
                                    <div class="card p-0" >
                                        <img class="card-img-top" src="{{ asset($gallery->image->thumbnail) }}" alt="Card image cap">
                                        <div class="card-body p-0 ">

                                            <form method="POST" action="{{ route('images.destroy',$gallery->image->id )}} " id="delete-form-{{ $gallery->image->id }}" style="display:none; ">
                                                {{csrf_field() }}
                                                {{ method_field("delete") }}
                                            </form>
            
            
                                            <button onclick="if(confirm('are you sure to delete this')){
                                                document.getElementById('delete-form-{{ $gallery->image->id }}').submit();
                                                }
                                                else{
                                                event.preventDefault();
                                                }
                                                " class="btn btn-info btn-sm btn-raised ">
                                                <i class="fa fa-trash" aria-hidden="false"></i>
                                            </button>
                                        </div>
                                      </div>
                                    </div>
                            
                                    @endforeach
                                </div>
                                </td>
                                
                                <td class="align-middle">  
                                  
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
    <script>
            $(document).ready(function(){
        
        $('body').on('click', '#AddNewFormButton', function () {
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');

        });
        });
    </script>

@endsection