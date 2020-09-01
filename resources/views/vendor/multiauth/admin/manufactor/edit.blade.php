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
        
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        @include('vendor.multiauth.admin.inc.message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Vendor</h4>
                    </div>
                    <div class="card-body">
                        {{-- <form action="{{ route('products.update',$product->id) }}" method="POST"> --}}
                        <form  class="form-horizontal form-bordered"  method="POST" role="form" action="{{ route('vendor.update',$vendor->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="form-body">

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" id="name" value={{ $vendor->name }} placeholder="First Name" class="form-control" required>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="last_name" name="last_name" value={{ $vendor->last_name }} placeholder="Last Name"class="form-control" required>
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <select class="form-control value={{ $vendor->gender }}custom-select" name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" id="birthday"name="birthday"value={{ $vendor->birthday }} class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="number" id="phone" name="phone" value={{ $vendor->phone }} class="form-control" required>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" id="address" name="address" value={{ $vendor->address }} class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">E-Mail</label>
                                    <div class="col-md-9">
                                        <input type="email" id="email" name="email" value={{ $vendor->email }} class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Job</label>
                                    <div class="col-md-9">
                                        <input type="text" id="job" name="job" value={{ $vendor->job }} class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Postal Code</label>
                                    <div class="col-md-9">
                                        <input type="text" id="post_code" name="post_code" value={{ $vendor->post_code }} class="form-control" >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Verification</label>
                                    <div class="col-md-9">
                                        <div class="demo-checkbox">
                                            
                                            <input type="checkbox" id="verified" name="verified" value={{ $vendor->verified }} class="filled-in chk-col-light-blue" checked="">
                                            <label for="verified">Verified</label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-9">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Edit</button>
                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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


