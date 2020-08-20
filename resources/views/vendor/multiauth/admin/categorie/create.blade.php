@extends('multiauth::layouts.app')

@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar bb toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        @include('vendor.multiauth.admin.inc.message')
        @include('vendor.multiauth.admin.inc.header')
        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Geral</h4>
                        <form class="form-horizontal p-t-20" method="POST" role="form" action="{{ action('Admin\CategorieController@store')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Acommodation..">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <textarea class="form-control" id="description" name="description" placeholder="Write the description here.." rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Parent</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <select class="custom-select col-sm-9" id="parent" name="parent">
                                            <option selected="">Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Choose Image</label>
                                <input id="icon" type="file" name="icon">
                            </div>


                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Select Icon</h4>
                        <h6 class="card-subtitle"></h6>
                        <form class="form-horizontal p-t-20">

                            <div class="row">



                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9 ">
                                    {{-- <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
</div>






@endsection


