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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <ol class="breadcrumb bc-colored m-b-30 bg-primary">
                                    <li class="breadcrumb-item"><a >{{ $post->title }}</a></li>
                                </ol>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src={{ asset('assets/images/big/user.png') }} class="img-circle" width="150">
                                    <h4 class="card-title m-t-10">Admin</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">News</a> </li>
                                                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            
                                            <div class="sl-item">
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">Admin</a> <span class="sl-date">{{ $post->created_at }}</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src={{ asset('assets/images/big/img1.png') }} alt="user" class="img-responsive radius"></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> {{ $post->body }} </p> <a href="#" class="btn btn-success"> Edit</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                          
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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


