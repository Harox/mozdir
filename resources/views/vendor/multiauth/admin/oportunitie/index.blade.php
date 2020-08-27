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
                                <h5 class="text-muted m-b-0">Reject</h5>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-12">
                @include('vendor.multiauth.admin.inc.message')
                <div class="card">
                    <div class="card-body">
                        <div class="profiletimeline">

                            @if(count($oportunities) > 0)
                                @foreach($oportunities as $oportunitie)
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ asset('storage/images/'.$oportunitie->image) }}" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div> <a href="#" class="link">Admin</a> <span class="sl-date">{{ $oportunitie->created_at }}</span>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12"><img src="{{ asset('storage/images/'.$oportunitie->image) }}" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <h4 class="font-medium m-t-30">{{ $oportunitie->title }}</h4>
                                                        <p> {{ $oportunitie->description }}. </p> <a href="#" class="btn btn-success"> View More</a></div>
                                                </div>
                                                <div class="like-comm m-t-20">
                                                    <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                                                    <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            @else
                                <p>No Oportunities Found</p>
                            @endif

                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    </div>
</div>




{{-- ---------------------Modal--------------------- --}}
<form class="form-horizontal form-material" method="POST" role="form" action="{{ action('Admin\OportunitieController@store')}}" enctype="multipart/form-data">
    @csrf
    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New Oportunitie</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="col-md-12 m-b-20">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Type title">
                        </div>
                        <div class="col-md-12 m-b-20">
                            <textarea class="form-control" id="description" name="description" placeholder="Write the description here.." rows="5"></textarea>
                        </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" id="city" name="city" class="form-control" placeholder="Type the city">
                        </div>

                        <div class="col-md-12 m-b-20">
                                <input type="date" id="expire"name="expire" class="form-control" placeholder="Expire date dd/mm/yyyy">
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


