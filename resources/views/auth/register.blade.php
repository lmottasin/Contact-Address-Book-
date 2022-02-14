<!doctype html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Contact Address Book</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
{{--    <meta name="description" content="Kero HTML Bootstrap 4 Dashboard Template">--}}

    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('assets/css/main.07a59de7b920cd76b874.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div
                    class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
{{--                        <div class="app-logo"></div>--}}
                        <h4>
                            <div>Welcome,</div>
                            <span>It only takes a <span
                                    class="text-success">few seconds</span> to create your account</span></h4>
                        @include('partials.alerts')
                        <div>
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
{{--                                    email--}}
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">
                                                <span class="text-danger">*</span> Email
                                            </label>
                                            <input name="email" placeholder="Email here..." type="email" class="form-control" value="{{ old('email') }}">
                                        </div>
                                    </div>
{{--                                    name--}}
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleName" class="">Name</label>
                                            <input name="name"  placeholder="Name here..." type="text" class="form-control" value="{{ old('name') }}">
                                        </div>
                                    </div>
{{--                                    phone--}}
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleName" class="">Phone</label>
                                            <input name="phone"  placeholder="Phone here..." type="text" class="form-control" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    {{--                                    Gender --}}
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleName" class="">Gender</label>
                                            <select name="gender" id="" class="form-control">
                                                <option {{ old('gender')=='male'?'selected':'' }} value="male">Male</option>
                                                <option {{ old('gender')=='female' ?'selected':'' }} value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  Password --}}
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleName" class="">Password</label>
                                            <input name="password"  placeholder="Password here..." type="password" class="form-control"></div>
                                    </div>
                                    {{--  Image --}}
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleName" class="">Photo</label>
                                            <input name="photo"   type="file" class="form-control"></div>
                                    </div>



                                </div>

                                <div class="mt-4 d-flex align-items-center"><h5 class="mb-0">Already have an account? <a href="{{ route('login') }}"
                                             class=" btn btn-lg btn-success">Sign in</a></h5>

                                    <a href="/" class="btn btn-lg btn-secondary"> Home</a>

                                    <div class="ml-auto">
                                        <button type="submit"
                                            class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">
                                            Create Account
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-xs-none col-lg-5">
                    <div class="slider-light">
                        <div class="slick-slider slick-initialized">
                            <div>
                                <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                     tabindex="-1">
                                    <div class="slide-img-bg"
                                         style="background-image: url('{{ asset('assets/images/originals/citynights.jpg') }}');"></div>
                                    <div class="slider-content"><h3>Contact Address Book</h3>
                                        <p>Easily Store, Create, Update, Delete, Serach By Filter.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('assets/scripts/main.07a59de7b920cd76b874.js') }}"></script>
</body>

<!-- Mirrored from kero.architectui.com/demo/kero-html-sidebar-pro/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 09:46:45 GMT -->
</html>
