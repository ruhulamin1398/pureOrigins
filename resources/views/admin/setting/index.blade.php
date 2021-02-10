
@extends('admin.includes.app')
@section('content')

   
<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4 ml-0 mr-0">
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">System Settings <i class="fas fa-tools pl-2" id="pageSetting" data-toggle="modal" data-target="#setting-modal"></i>
</a>


            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('setting.update',1) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row m-md-4 m-0">

                    <div class="form-group col-12 col-md-3">
                        <label for="name">Website Name :</label>
                    </div>

                    <div class=" form-group col-12 col-md-3">
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $setting->name }}" required>
                    </div>



                    <div class="form-group col-12 col-md-3">
                        <label for="slogan">Slogan : </label>
                    </div>


                    <div class="form-group col-12 col-md-3">
                        <input type="text" name="slogan" class="form-control" id="slogan"
                            value="{{ $setting->slogan }}" required>
                    </div>




                </div>


                <div class="row m-md-4 m-0">

                    <div class="form-group col-12 col-md-3">
                        <label for="phone">  Phone :  </label>
                    </div>

                    <div class="form-group col-12 col-md-3">
                        <input type="text" name="phone" class="form-control" id="phone"
                            value="{{ $setting->phone }}" required>
                    </div>



                    <div class="form-group col-12 col-md-3">
                        <label for="email">  Email : </label>
                    </div>


                    <div class="form-group col-12 col-md-3">
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ $setting->email }}" required>
                    </div>




                </div>


                <div class="row m-md-4 m-0">

                    <div class="form-group col-12 col-md-3">
                        <label for="logo" title="Image Resulation: 300 X 150 px"> Logo <span style="color: red"> * &nbsp;</span>  </label>
                    </div>





                    <div class="form-group col-12 col-md-3">

                        <input type="file" name="logo"  class="form-control-file" id="logo" accept=".png, .jpg, .jpeg" >
                    </div>

                    <div class="form-group col-12 col-md-3">
                        <label for="logo"> Current Logo : </label>
                    </div>





                    <div class="form-group col-12 col-md-3">
                       <img src="{{ asset($setting->image->thumbnail) }}" alt="Pure Origin logo" style="width: 140px">
                    </div>




                </div>


                <div class=" col-12 col-md-3 ">
                    <button type="submit" id="submit" class="form-control btn bg-abasas-dark btn-block">
                        Update</button>


                </div>



            </form>
        </div>




    </div>
</div>





@endsection