@extends('multiauth::layouts.app')
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
                                <a href="/user"">
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
                        <h4 class="card-title">Categories list</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ID<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Icon<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Parent<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($categories) > 0)
                                    @foreach($categories as $categorie)
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>{{ $categorie->id }}</td>
                                        <td>
                                        <a href="javascript:void(0)"><img src=" {{ asset('storage/categories/'.$categorie->icon) }}" width="40" class="img-circle"></a>
                                        </td>
                                        <td>{{ $categorie->name }}</td>
                                        <td>{{ $categorie->description }}</td>
                                        <td><span class="label label-danger">{{ $categorie->parent }}</span> </td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @else
                                    <p>No Category Found</p>
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
<form class="form-horizontal form-material" method="POST" role="form" action="{{ action('Admin\CategorieController@store')}}" enctype="multipart/form-data">
    @csrf
    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="col-md-12 m-b-20">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Type name"> </div>
                        <div class="col-md-12 m-b-20">
                            <textarea class="form-control" id="description" name="description" placeholder="Write the description here.." rows="5"></textarea>
                        </div>

                        <div class="col-md-12 m-b-20">
                            <select class="custom-select col-sm-9" id="parent" name="parent">
                                @if(count($categories) > 0)
                                    @foreach($categories as $categorie)
                                        <option selected="">{{$categorie->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="col-md-12 m-b-20">
                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Category Image</span>
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


