
@extends('admin.includes.app')
@section('content')







{{-- @if ($errors->any())
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
@endif --}}






<div class="container-fluid m-0 p-0">
    
<!-- Begin Page Content -->
<div class="collapse" id="createNewForm">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> Add new  </a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action=""  enctype="multipart/form-data">
                @csrf
                <div class="form-row align-items-center" id="createFormFieldList">
                  
                
                    <div class="form-group col-md-6 col-sm-12 p-4  ">
                        <label for="caption"> Caption<span style="color: red"> *</span></label>
                        <input type="text" name="caption" class="form-control" id="caption"   required>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 p-4  ">
                        <label for="image">Upload image <span style="color: red"> * &nbsp;</span></label><i class="fa fa-info-circle"  title="Image Resulation: 600 X 375" aria-hidden="true"></i><br>
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

                <div class="navbar-brand"><span id="eventList"> Banners</span> </div>
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
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                            <th> #</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody >

                        @php
                        $itr=1;
                        @endphp
                        {{-- @foreach ($galleries as $gallery)


                        <tr class="data-row" >
                            <td class="iteration">{{$itr++}}</td>
                            <td class="word-break">{{ $gallery->caption }}</td>
                            <td class="word-break"> <img src="{{ asset($gallery->image->thumbnail) }}" alt="{{ $gallery->caption }} " height="100px"> </td>



                            <td class="align-middle">
                               


                                <form method="POST" action="{{route('admin.gallery.destroy',$gallery->id)}}"
                                    id="delete-form-{{ $gallery->id}}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                    document.getElementById('delete-form-{{ $gallery->id }}').submit();
                }
                else{
                    event.preventDefault();
                }
                " class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">

                                    </i>
                                </button>




                            </td>


                        </tr>
                        @endforeach --}}

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

        

    })
</script>

 
@endsection