@extends('provider.layouts.app')
@section('title')
    account
@endsection

@section('meta')
    <link href="{{ asset('assets/plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            @include('provider.inc.header')

            @include('provider.inc.statusbar')


        <\div>
    <\div>
@endsection

@section('scripts')
<script src="{{ asset('assets/plugins/moment/moment.js')}}" ></script>
<script src="{{ asset('assets/plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js')}}" ></script>
@endsection

