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
                                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Vendors</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @if(count($vendors) > 0)
                                            @foreach($vendors as $vendor)
                                            <tr>
                                                <td><a href="vendor/{{ $vendor->id }}">{{$vendor->name}}</a></td>                                                
                                                <td>{{$vendor->phone}}</td>
                                                <td>{{$vendor->email}}</td>
                                                <td>{{$vendor->address}}</td>
                                                <td class="text-nowrap">
                                                    <a href="vendor/{{ $vendor->id }}" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                                    <a href="vendor/{{ $vendor->id }}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    
                                                    <form action="{{ route('vendor.destroy', $vendor->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"><a data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a> </button>
                                                    
                                                    </form>
                                                    
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <p>No Vendors Found</p>
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
                
                    </div>


@endsection


