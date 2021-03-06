@extends('multiauth::layouts.app')
@section('title')
    Business
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
                        <h4 class="card-title">Business list</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ID<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Image<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Title<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">City<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($business) > 0)
                                    @foreach($business as $business)
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>{{ $business->id }}</td>
                                        <td>
                                        <a href="javascript:void(0)"><img src=" {{ asset('storage/images/'.$business->image) }}" width="40" class="img-circle"></a>
                                        </td>
                                        <td>{{ $business->title }}</td>
                                        <td>{{ $business->city }}</td>
                                        <td>{{ $business->description }}</td>
                                        <td class="text-nowrap">
                                            <a data-toggle="modal" data-target="#view-vendor" data-original-title="view"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            
                                        </td>

                                    </tr>

                                    @endforeach
                                    @else
                                    <p>No Business Found</p>
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
<form class="form-horizontal form-material" method="POST" role="form" action="{{ action('Admin\BusinessController@store')}}" enctype="multipart/form-data">
    @csrf
    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New Business</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="col-md-12 m-b-20">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Type Title">
                        </div>
                        <div class="col-md-12 m-b-20">
                            <textarea class="form-control" id="description" name="description" placeholder="Write the description here.." rows="5"></textarea>
                        </div>

                        <div class="col-md-12 m-b-20">
                            <input type="text" id="city" name="city" class="form-control" placeholder="Type the city here..">
                        </div>

                        <div class="col-md-12 m-b-20">
                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Business Image</span>
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


