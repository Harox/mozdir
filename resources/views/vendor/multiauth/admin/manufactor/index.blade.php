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
                                                    <h6 class="text-muted m-b-0">new manufactor</h6></div>
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

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Manufactors list</h4>
                                            <h6 class="card-subtitle"></h6>
                                            <div class="table-responsive">
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            @include('vendor.multiauth.admin.inc.message')
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h4 class="modal-title" id="myModalLabel">Add New</h4> </div>
                                                                        <div class="modal-body">
                                                                            <from class="form-horizontal form-material" method="POST" role="form" action="{{ action('Admin\ServiceController@store')}}">
                                                                                @csrf
                                                                                <div class="form-group">
                                                                                    <div class="col-md-12 m-b-20">
                                                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Type name"> </div>
                                                                                    <div class="col-md-12 m-b-20">
                                                                                        <textarea class="form-control" id="description" name="description" placeholder="Write the description here.." rows="5"></textarea>
                                                                                    </div>
                                                                                    <div class="col-md-12 m-b-20">
                                                                                        <select class="custom-select col-sm-9" id="parent" name="parent">
                                                                                            {{-- @if(count($categories) > 0)
                                                                                                @foreach($categories as $categorie)

                                                                                                    <option selected="">{{$categorie->name}}</option>

                                                                                                @endforeach
                                                                                            @endif --}}
                                                                                        </select>
                                                                                     </div>

                                                                                    <div class="col-md-12 m-b-20">
                                                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Service Image</span>
                                                                                            <input type="file" accept="image/*" name="image" id="image" class="upload">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </from>
                                                                        </div>

                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div><table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                                    <thead>
                                                        <tr>
                                                            <th class="footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                                            <th class="footable-sortable">Phone<span class="footable-sort-indicator"></span></th>
                                                            <th class="footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                                                            <th class="footable-sortable">Address<span class="footable-sort-indicator"></span></th>
                                                            <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                    @if(count($manufactors) > 0)
                                                    @foreach($manufactors as $manufactor)
                                                    <tr class="footable-even" style="">
                                                        <td><span class="footable-toggle"></span>{{$manufactor->name}}</td>
                                                        <td>{{$manufactor->phone}}</td>
                                                        <td>{{$manufactor->email}}</td>
                                                        <td><span class="label label-danger">{{$manufactor->address}}</span> </td>
                                                        <td class="text-nowrap">
                                                            <a href="manufactor/{{ $manufactor->id }}" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                                            <a href="manufactor/{{ $manufactor->id }}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                                            <form action="{{ route('manufactor.destroy', $manufactor->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"><a data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a> </button>

                                                            </form>


                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                    @else
                                                    <p>No Manufactors Found</p>
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


