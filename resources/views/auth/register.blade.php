{{-- @extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('multiauth::layouts.app3')


@section('content')
 

<div class="login-register" style="background-image:url({{ asset('storage/images/loginwall.jpg') }}); background-repeat: repeat;">        
    <div class="login-box card">
        
    <div class="card-body">
        <a href="javascript:void(0)" class="text-center db"><img src={{ asset('assets/images/logo-icon.png') }} alt="Home"><br><img src={{ asset('assets/images/logo-light-text-dark.png') }} alt="Home"></a> 
        <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small> 
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Customer</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-expanded="false">Company</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#users" role="tab" aria-expanded="false">Particular</a> </li>
        </ul>
        <div class="row">
            <!-- Column -->
            <div class="col-md-8 col-xlg-9 col-md-7">
                    <!-- Nav tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                            <form class="form-horizontal form-material" id="loginform" action="index.html">
                                
                                <div class="form-group m-t-20">
                                  <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Name">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Email">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <div class="col-xs-12">
                                    <input class="form-control" type="password" required="" placeholder="Password">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-xs-12">
                                    <input class="form-control" type="password" required="" placeholder="Confirm Password">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="checkbox checkbox-primary p-t-0">
                                      <input id="checkbox-signup" type="checkbox">
                                      <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                  <div class="col-xs-12">
                                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                                  </div>
                                </div>
                                <div class="form-group m-b-0">
                                  <div class="col-sm-12 text-center">
                                    <p>Already have an account? <a href="login2.html" class="text-info m-l-5"><b>Sign In</b></a></p>
                                  </div>
                                </div>
                              </form>
                        </div>
                       
                        <div class="tab-pane" id="settings" role="tabpanel" aria-expanded="false">
                               Tab2
                        </div>

                        <div class="tab-pane" id="users" role="tabpanel" aria-expanded="false">
                                Tab3
                        </div>
                    </div>
                
            </div>
        </div>

        

    </div>
  </div>


  {{-- <div class="login-box card">
    <div class="card-body">
      <form class="form-horizontal form-material" id="loginform" action="index.html">
        <a href="javascript:void(0)" class="text-center db"><img src="../assets/images/logo-icon.png" alt="Home"><br><img src="../assets/images/logo-text.png" alt="Home"></a> 
        <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small> 
        <div class="form-group m-t-20">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Name">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Confirm Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Already have an account? <a href="login2.html" class="text-info m-l-5"><b>Sign In</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div> --}}
</div>
@endsection
