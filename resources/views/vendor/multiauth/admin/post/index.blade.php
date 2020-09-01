@extends('multiauth::layouts.app')
@section('title')
    News
@endsection


@section('content')



                    <div class="page-wrapper">
                        <!-- ============================================================== -->
                        <!-- Container fluid  -->
                        <!-- ============================================================== -->
                        <div class="container-fluid">
                            <!-- ============================================================== -->
                            <!-- Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            @include('vendor.multiauth.admin.inc.header')
                            <!-- ============================================================== -->
                            <!-- End Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Start Page Content -->
                            <!-- ============================================================== -->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All News</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Date</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @if(count($posts) > 1)
                                            @foreach($posts as $post)
                                            <tr>
                                                <td><a href="post/{{ $post->id }}">{{$post->title}}</a></td>
                                                <td>N\A</a></td>

                                                <td>{{$post->created_at}}</td>
                                                <td class="text-nowrap">
                                                    <a href="post/{{ $post->id }}" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <p>No News Found</p>
                                        @endif



                                        </tbody>
                                    </table>
                                </div>
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


