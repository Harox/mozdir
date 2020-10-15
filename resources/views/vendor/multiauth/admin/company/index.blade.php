@extends('multiauth::layouts.app')
@section('title')
    Company
@endsection


@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        @include('vendor.multiauth.admin.inc.header')

        @include('vendor.multiauth.admin.inc.statusbar')


        <div class="row">
            <div class="col-12">
                @include('vendor.multiauth.admin.inc.message')
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Companies list</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ID<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">logo<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Categories<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($companies) > 0)
                                    @foreach($companies as $company)
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>{{ $company->id }}</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src=" {{ asset('storage/companies/'.$company->image) }}" width="40" class="img-circle"></a>
                                        </td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->description }}</td>
                                        <td>{{ $company->categories }}</td>
                                        <td class="text-nowrap">
                                            <a data-toggle="modal" data-target="#view-vendor" data-original-title="view"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>

                                        </td>

                                    </tr>

                                    @endforeach
                                    @else
                                    <p>No Company Found</p>
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
<form class="form-horizontal form-material" method="POST" role="form" action="{{ action('Admin\CompanyController@store')}}" enctype="multipart/form-data">
    @csrf
    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New Company</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Company Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="name" placeholder="Company name" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Description</label>
                            <div class="col-md-9">
                                <input type="textarea" id="description" name="description" placeholder="Description..."class="form-control" required>
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
                            <label class="control-label text-right col-md-3">Categories</label>
                            <div class="col-md-9">
                                <input type="text" id="categories" name="categories" class="form-control" required>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Post Code</label>
                            <div class="col-md-9">
                                <input type="number" id="post_code"name="post_code" class="form-control" placeholder="Post Code">
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
                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Company Logo</span>
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



@endsection


