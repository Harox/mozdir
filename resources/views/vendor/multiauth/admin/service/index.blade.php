@extends('multiauth::layouts.app')
@section('content')



                    <div class="page-wrapper">

                        <!-- ============================================================== -->
                        <!-- Container fluid  -->
                        <!-- ============================================================== -->
                        <div class="container-fluid">
                            <!-- ============================================================== -->
                            @include('vendor.multiauth.admin.inc.header')
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->

                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round align-self-center round-danger"><i class="ti-plus"></i></div>
                                                <div class="m-l-10 align-self-center">
                                                    <a href="/user"">
                                                    <h2 class="m-b-0">Add</h2>
                                                    <h6 class="text-muted m-b-0">new service</h6></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round align-self-center round-warning"><i class="ti-eye"></i></div>
                                                <div class="m-l-10 align-self-center">
                                                    <a href="/user"">
                                                    <h3 class="m-b-0">2</h3>
                                                    <h5 class="text-muted m-b-0">Pending</h5></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round align-self-center round-primary"><i class="ti-check"></i></div>
                                                <div class="m-l-10 align-self-center">
                                                    <a href="/user"">
                                                    <h3 class="m-b-0">12</h3>
                                                    <h5 class="text-muted m-b-0">Aproved</h5></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round align-self-center round-danger"><i class="ti-close"></i></div>
                                                <div class="m-l-10 align-self-center">
                                                    <a href="/user"">
                                                    <h3 class="m-b-0">7</h3>
                                                    <h5 class="text-muted m-b-0">Rejected</h5></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>

                            <!-- Row -->





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

                    </div>


@endsection


