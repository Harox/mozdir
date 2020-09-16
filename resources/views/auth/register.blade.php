@extends('multiauth::layouts.app3')
@section('title')
    Register
@endsection


{{--  @section('content')

    <div class="login-register" style="background-image:url({{ asset('storage/images/loginwall.jpg') }}); background-repeat: repeat;">
      <div class="container-fluid">
      <div class="row justify-content-center ">
            
            <div class="col-6 ">
                <div class="card">
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
            </div>
        </div>
        </div>
    </div>
@endsection  --}}


@section('content')

          <div class="row justify-content-center" style="background-image:url({{ asset('storage/images/loginwall.jpg') }}); background-repeat: repeat;">

              <div class="col-md-8">
                  <div class="card">
                    <div class="card-body">
                      <a href="javascript:void(0)" class="text-center db"><img src={{ asset('assets/images/logo-icon.png') }} alt="Home"><br><img src={{ asset('assets/images/logo-light-text-dark.png') }} alt="Home"></a> 
                      <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small> 

                      
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs profile-tab" role="tablist">
                        <div class="col-md-4">
                          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true"><span><i class="ti-user"></i></span>  Customer</a> </li>                        
                        </div>
                        <div class="col-md-4">
                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Company</a> </li>
                        </div>
                        <div class="col-md-4">
                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-expanded="false">Particular</a> </li>
                        </div>
                      </ul>

                      <!-- Tab panes -->
                      <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                          <div class="tab-content">

                              <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                  <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" class="form-horizontal">
                                      @csrf
                                      <div class="form-body">
                                          <h3 class="box-title">Person Info</h3>
                                          <hr class="m-t-0 m-b-40">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">First Name</label>
                                                      <div class="col-md-9">
                                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                                          @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                          @enderror
                                                        </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3" id="last_name" name="last_name">Last Name</label>
                                                      <div class="col-md-9">
                                                          <input type="text" class="form-control">
                                                        </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                          </div>
                                          <!--/row-->
                                          <div class="row">
                                              <div class="col-md-6">
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
                                              </div>
                                              <!--/span-->
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Birthday</label>
                                                      <div class="col-md-9">
                                                          <input type="date" id="birthday" name="birthday" class="form-control" placeholder="dd/mm/yyyy">
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                          </div>
                                          
                                          <h3 class="box-title">Address & Others</h3>
                                          <hr class="m-t-0 m-b-40">
                                          <!--/row-->
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Phone</label>
                                                      <div class="col-md-9">
                                                          <input type="number" id="phone" name="phone" class="form-control" required>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Address</label>
                                                      <div class="col-md-9">
                                                          <input type="text" id="address" name="address" class="form-control" required>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Email</label>
                                                      <div class="col-md-9">
                                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                          @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                          @enderror
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Password</label>
                                                      <div class="col-md-9">
                                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                          @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                          @enderror
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                          </div>
                                          <!--/row-->
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Confirm password</label>
                                                      <div class="col-md-9">
                                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                              <div class="col-md-6">
                                                  <div class="form-group row">
                                                      <label class="control-label text-right col-md-3">Country</label>
                                                      <div class="col-md-9">
                                                          <select class="form-control custom-select" name="country" id="country">
                                                              <option>Mozambique</option>
                                                              <option>South Africa</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/span-->
                                          </div>
                                          <!--/row-->
                                      </div>
                                      <hr>
                                      <div class="form-actions">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <div class="col-md-offset-3 col-md-9">
                                                          <button type="submit" class="btn btn-success">{{ __('Register') }}</button>
                                                          <button type="button" class="btn btn-inverse">Cancel</button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-6"> </div>
                                          </div>
                                      </div>
                                  </form>
                                  </div>
                              </div>

                              <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                              <br>
                                              <p class="text-muted">Johnathan Deo</p>
                                          </div>
                                          <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                              <br>
                                              <p class="text-muted">(123) 456 7890</p>
                                          </div>
                                          <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                              <br>
                                              <p class="text-muted">johnathan@admin.com</p>
                                          </div>
                                          <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                              <br>
                                              <p class="text-muted">London</p>
                                          </div>
                                      </div>
                                      <hr>
                                      <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                      <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                      <h4 class="font-medium m-t-30">Skill Set</h4>
                                      <hr>
                                      <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                      <div class="progress">
                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                      </div>
                                      <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                      <div class="progress">
                                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                      </div>
                                      <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                      <div class="progress">
                                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                      </div>
                                      <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                      <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane" id="settings" role="tabpanel" aria-expanded="false">
                                  <div class="card-body">
                                      <form class="form-horizontal form-material">
                                          <div class="form-group">
                                              <label class="col-md-12">Full Name</label>
                                              <div class="col-md-12">
                                                  <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="example-email" class="col-md-12">Email</label>
                                              <div class="col-md-12">
                                                  <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-md-12">Password</label>
                                              <div class="col-md-12">
                                                  <input type="password" value="password" class="form-control form-control-line">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-md-12">Phone No</label>
                                              <div class="col-md-12">
                                                  <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-md-12">Message</label>
                                              <div class="col-md-12">
                                                  <textarea rows="5" class="form-control form-control-line"></textarea>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-12">Select Country</label>
                                              <div class="col-sm-12">
                                                  <select class="form-control form-control-line">
                                                      <option>London</option>
                                                      <option>India</option>
                                                      <option>Usa</option>
                                                      <option>Canada</option>
                                                      <option>Thailand</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-sm-12">
                                                  <button class="btn btn-success">Update Profile</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
              </div>
          </div>
        
@endsection

