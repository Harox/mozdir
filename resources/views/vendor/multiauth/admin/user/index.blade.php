@extends('multiauth::layouts.app')
@section('title')
    Vendor
@endsection


@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        @include('vendor.multiauth.admin.inc.header')

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-danger"><i class="ti-plus"></i></div>
                            <div class="m-l-10 align-self-center">
                                <a data-toggle="modal" data-target="#add-contact">
                                <h2 class="m-b-0">Add</h2>
                                <h6 class="text-muted m-b-0">new service</h6></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-danger"><i class="ti-close"></i></div>
                            <div class="m-l-10 align-self-center">
                                <a href="/user"">
                                <h3 class="m-b-0">7</h3>
                                <h5 class="text-muted m-b-0">Rejectedaaa</h5></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                @include('vendor.multiauth.admin.inc.message')
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vendors list</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ID<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Image<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Phone<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($vendors) > 0)
                                    @foreach($vendors as $vendor)
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>{{ $vendor->id }}</td>
                                        <td>
                                        <a href="javascript:void(0)"><img src=" {{ asset('storage/images/'.$vendor->image) }}" width="40" class="img-circle"></a>
                                        </td>
                                        <td>{{ $vendor->name }} {{ $vendor->last_name }}</td>
                                        <td>{{ $vendor->phone }}</td>
                                        <td>{{ $vendor->address }}</td>
                                        <td class="text-nowrap">
                                            <a data-toggle="modal" data-target="#view-vendor" data-original-title="view"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            
                                        </td>

                                    </tr>

                                    @endforeach
                                    @else
                                    <p>No Vendors Found</p>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New</button>
                                        </td>
                                        <td colspan="7">
                                            <div class="text-right">
                                                <ul class="pagination"> <li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





{{-- ---------------------Modal--------------------- --}}
<form class="form-horizontal form-material" method="POST" role="form" action="{{ action('Admin\VendorController@store')}}" enctype="multipart/form-data">
    @csrf
    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New Vendor</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="name" placeholder="First Name" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" id="last_name" name="last_name" placeholder="Last Name"class="form-control" required>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Gender</label>
                            <div class="col-md-9">
                                <select class="form-control custom-select" name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Date of Birth</label>
                            <div class="col-md-9">
                                <input type="date" id="birthday"name="birthday" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Phone Number</label>
                            <div class="col-md-9">
                                <input type="number" id="phone" name="phone" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Address</label>
                            <div class="col-md-9">
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">E-Mail</label>
                            <div class="col-md-9">
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Verification</label>
                            <div class="col-md-9">
                                <div class="demo-checkbox">
                                    
                                    <input type="checkbox" id="verified" name="verified" value="yes" class="filled-in chk-col-light-blue" checked="">
                                    <label for="verified">Verified</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 m-b-20">
                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Vendor Logo</span>
                                <input type="file" accept="image/*" name="image" id="image" class="upload">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect">Save</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- ---------------------View Modal--------------------- --}}
<div id="view-vendor" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Vendor</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="control-label text-right col-md-3">First Name</label>
                    <div class="box bg-light-info col-md-9">Valdimiro Francisco.</div>
                </div>
 

                <div class="modal-footer">
                    <button type="submit" class="btn btn-info waves-effect">Edit</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


