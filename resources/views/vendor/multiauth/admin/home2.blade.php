@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                <div class="card-body">
                    @include('multiauth::message')
                    Bem-Vindo ao {{ config('multiauth.prefix') }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
