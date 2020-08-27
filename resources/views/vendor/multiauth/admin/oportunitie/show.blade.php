@extends('multiauth::layouts.app')
@section('content')



                    <div class="page-wrapper">
                        <!-- ============================================================== -->
                        <!-- Container fluid  -->
                        <!-- ============================================================== -->
                        <div class="container-fluid">
                            <!-- ============================================================== -->
                            <!-- Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            <div class="row page-titles">
                                <div class="col-md-5 col-8 align-self-center">
                                    <h3 class="text-themecolor">News</h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">News></a></li>
                                    </ol>
                                </div>
                                <div class="col-md-7 col-4 align-self-center">
                                    <div class="d-flex m-t-10 justify-content-end">
                                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                            <div class="chart-text m-r-10">
                                                <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                                <h4 class="m-t-0 text-info">MZN 58,356</h4></div>
                                            <div class="spark-chart">
                                                <div id="monthchart"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                            <div class="chart-text m-r-10">
                                                <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                                <h4 class="m-t-0 text-primary">MZN 48,356</h4></div>
                                            <div class="spark-chart">
                                                <div id="lastmonthchart"></div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Start Page Content -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-outline-info">
                                        <div class="card-header">
                                            <h4 class="m-b-0 text-white">Form with view only</h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <h3 class="box-title">Person Info</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">First Name:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->name}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Last Name:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->last_name}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Gender:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->gender}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Date of Birth:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->birthday}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Category:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> N\A </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Verified:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->verified}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <h3 class="box-title">Address</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Address:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->address}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Phone:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->phone}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">City:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->address}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">E-Mail:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->email}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Post Code:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->post_code}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3">Job:</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{$vendor->job}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <button type="submit" href="/edit" class="btn btn-info"> <i class="fa fa-pencil"></i> Edit</button>
                                                                    <button type="button" href="vendor/" class="btn btn-inverse">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6"> </div>
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
                        <!-- footer -->
                        <!-- ============================================================== -->
                        <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
                        <!-- ============================================================== -->
                        <!-- End footer -->
                        <!-- ============================================================== -->
                    </div>


@endsection


