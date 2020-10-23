@extends('layouts.app')
@section('title')
    Register
@endsection

@section('content')


    <main class="sl-main sl-register-main" style="background-image:url({{ asset('storage/images/registerwall.jpg') }});>
        <div class="sl-registerfixed">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sl-register-holder">
                            <div class="sl-registerarea">
                                <div class="sl-registersignarea">
                                    <div class="sl-registersignarea__title">
                                        <h3>Signup For Free</h3>
                                    </div>
                                    <ul class="nav sl-registertabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="sl-signupcustomer" data-toggle="tab" href="#signupcustomer" role="tab" aria-selected="true">
                                                <span><i class="fa fa-check"></i></span>
                                                <h4><em>Signup as</em> Simple Customer
                                                </h4>
                                               <i class="ti-info-alt toltip-content" data-tipso="Custome"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="sl-signupprovider" data-toggle="tab" href="#signupprovider" role="tab" aria-selected="false">
                                                <span><i class="fa fa-check"></i></span>
                                                <h4><em>Signup as</em> Service Provider
                                                </h4>
                                                <i class="ti-info-alt toltip-content" data-tipso="Provider"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content sl-signup" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="signupcustomer" role="tabpanel" aria-labelledby="sl-signupcustomer">
                                            <form class="sl-formtheme sl-signupform" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                                                @csrf
                                                <fieldset>
                                                    <div class="sl-signupform-wrap">
                                                        <div class="form-group form-group-half form-group-icon">
                                                            <i class="ti-info-alt toltip-content" data-tipso="name"></i>
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="First Name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                                        </div>
                                                        <div class="form-group form-group-half form-group-icon">
                                                            <i class="ti-info-alt toltip-content" data-tipso="name"></i>
                                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name*">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input type="date" id="birthday" name="birthday" class="form-control" placeholder="dd/mm/yyyy">
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <select class="form-control custom-select" name="gender" id="gender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input type="text" id="address" name="address" placeholder="Address*" class="form-control" required>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input type="number" id="phone" name="phone" placeholder="Phone" class="form-control" required>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input id="password-confirm" type="password" class="form-control" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                        <div class="form-group sl-btnarea">
                                                            <div class="sl-checkbox">
                                                                <input id="terms" type="checkbox" name="category">
                                                                <label for="terms">
                                                                    <span>I agree to <a href="javascript:void(0);">Terms and Conditions</a></span>
                                                                </label>
                                                            </div>
                                                            <button type="submit" class="btn sl-btn">Signup</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="signupprovider" role="tabpanel" aria-labelledby="sl-signupprovider">
                                            <form class="sl-formtheme sl-signupform" method="POST" action="{{ route('provider.register') }}" enctype="multipart/form-data">
                                                @csrf
                                                <fieldset>
                                                    <div class="sl-signupform-wrap">
                                                        <div class="form-group form-group-half form-group-icon">
                                                            <i class="ti-info-alt toltip-content" data-tipso="name"></i>
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="First Name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                                        </div>
                                                        <div class="form-group form-group-half form-group-icon">
                                                            <i class="ti-info-alt toltip-content" data-tipso="name"></i>
                                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name*">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input type="date" id="birthday" name="birthday" class="form-control" placeholder="dd/mm/yyyy">
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <select class="form-control custom-select" name="gender" id="gender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input type="text" id="address" name="address" placeholder="Address*" class="form-control" required>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input type="number" id="phone" name="phone" placeholder="Phone" class="form-control" required>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            <input id="password-confirm" type="password" class="form-control" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                        <div class="form-group sl-btnarea">
                                                            <div class="sl-checkbox">
                                                                <input id="terms" type="checkbox" name="category">
                                                                <label for="terms">
                                                                    <span>I agree to <a href="javascript:void(0);">Terms and Conditions</a></span>
                                                                </label>
                                                            </div>
                                                            <button type="submit" class="btn sl-btn">Signup</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="sl-oroption">
                                        <span>or</span>
                                    </div>
                                    <div class="sl-loginicon">
                                        <ul>
                                            <li><a href="javascript:void(0);" class="sl-facebookbox"><i class="fab fa-facebook-f"></i>Signup via facebook</a></li>
                                            <li><a href="javascript:void(0);" class="sl-googlebox"><i class="fab fa-google"></i>Signup via google</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sl-registerarea__terms">
                                    <p>By signing up you agree to these <a href="javascript:void(0);">Terms &amp; Conditions</a> &amp; consent to <a href="javascript:void(0);"> Cookie Policy &amp; Privacy Policy.</a></p>
                                </div>
                                <div class="sl-registerarea__footer">
                                    <p> Already a member? <a href="index.html"> Sigin Now</a></p>
                                </div>
                            </div>
                            <div class="sl-registercontent">
                                <figure class="sl-registercontent__img">
                                    <img src={{ asset('front/images/register/img-01.jpg') }} alt="img">
                                    <figcaption>
                                        <strong class="sl-registerlogo">
                                            <a href="index.html"><img src={{asset('front/images/register/logo.png')}} alt="Images Description"></a>
                                        </strong>
                                        <div class="sl-registertitle">
                                            <h4>We’re Spreading Day by Day</h4>
                                            <h2>Join Our Growing Team</h2>
                                        </div>
                                        <div class="sl-descritpion">
                                            <p>Consectetur adipisicing elit sed dotiane eiusmod tempor incididunt utna labore etnalorale magna aliqua enim adman minim veniam quis nostrud exerciteon ullamco.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection