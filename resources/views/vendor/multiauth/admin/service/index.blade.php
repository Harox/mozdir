@extends('multiauth::layouts.app')
@section('content')



                    <div class="page-wrapper">
                        <!-- ============================================================== -->
                        <!-- Container fluid  -->
                        <!-- ============================================================== -->
                        <div class="container-fluid">
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Start Page Content -->
                            <!-- ============================================================== -->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="button-group">
                                                <a href="service/create"> <button type="button" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Add New Category</button></a>
                                                <a href="categorie/create"> <button type="button" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Add New Category</button></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row">

                                

                                {{-- @if(service($services) > 0)
                                    @foreach($services as $service)
                                    
                                        !-- Column -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                                        <div class="m-l-10 align-self-center">
                                                            <h3 class="m-b-0">{{$service->name}}</h3>
                                                            <a href="" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No Services Found</p>
                                @endif
                                 --}}
                                

                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                                <div class="m-l-10 align-self-center">
                                                    <h3 class="m-b-0">6540</h3>
                                                    <h5 class="text-muted m-b-0">pending</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
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
                
                    </div>


@endsection


