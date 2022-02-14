@extends('layouts.app')
@section('title', 'Create New Contact')
@section('header')
    <div class="page-title-heading text-primary">
        Add New User
        <div class="page-title-subheading">
            Add New Contact Without Any Hassle !!!
        </div>
    </div>
@endsection

@section('topcontent')
    <div class="app-inner-bar">

        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" id="tab-nav-1" class="nav-link active" href="#tab-content-1"
                       aria-selected="false">
                        <span>Add New Contact</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('contact.index') }}"
                   class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Contact List
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('contact.store') }}"
                  novalidate="novalidate">
                @csrf
                <h2 class="text-center">Create A New Contact!</h2>
                <h5 class="card-title text-center">Please! Fillup All The Mendatory Fields!</h5>
                @include('partials.alerts')
                <hr>
                <br>
                <div class="row">
                    {{-- First Name --}}
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-address-book" aria-hidden="true" ></i></span>
                            </div>
                            <input value="{{ old('first_name') }}"   placeholder="First Name"  name="first_name" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- Last Name --}}
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-address-book" aria-hidden="true" ></i></span>
                            </div>
                            <input value="{{old('last_name')}}"   placeholder="Last Name"  name="last_name" type="text" class="form-control">
                        </div>
                    </div>

                </div>
                <br>


                {{-- Email --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                                                                       aria-hidden="true"
                                                                                       title="Copy to use envelope"></i></span>
                    </div>
                    <input value="{{ old('email') }}"   placeholder="Email Address" type="text" id="email" name="email"
                           class="form-control">
                </div>
                <br>

                {{-- Phone --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-mobile" aria-hidden="true"></i></span>
                    </div>
                    <input value="{{ old('phone') }}"   placeholder="Phone Number" id="phone" name="phone" type="number"
                           class="form-control">
                </div>
                <br>
                {{-- telephone --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-fw" aria-hidden="true"></i></span>
                    </div>
                    <input value="{{ old('telephone') }}"  placeholder="Telephone Number"  name="telephone" type="number"
                           class="form-control">
                </div>
                <br>
                {{-- Address --}}

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-address-card" aria-hidden="true"></i></span>
                    </div>
                    <textarea placeholder="Address" name="address"  class="form-control">{{old('address')}}</textarea>
                </div>
                <br>

                {{-- Gender --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-fw" aria-hidden="true" ></i></span>
                    </div>
                    <select required type="select"  name="gender" class="custom-select">
                        <option {{ old('gender')== 'male' ? 'selected': '' }} value="male">Male</option>
                        <option {{ old('gender')== 'female' ? 'selected': '' }} value="female">Female</option>
                        <option {{ old('gender')== 'others' ? 'selected': '' }} value="others">Others</option>
                    </select>
                </div>
                <br>
                {{-- country --}}

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-map" aria-hidden="true"></i></span>
                    </div>
                    <input   placeholder="Country"  name="country" type="text"
                       value="{{ old('country') }}"    class="form-control">
                </div>
                <br>
                {{-- city --}}

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                    </div>
                    <input   placeholder="City"  name="city" value="{{ old('city') }}" type="text"
                           class="form-control">
                </div>
                <br>
                {{-- city --}}

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-map-signs" aria-hidden="true"></i></span>
                    </div>
                    <input   placeholder="State/Division"  name="state" value="{{ old('state') }}" type="text"
                           class="form-control">
                </div>
                <br>


                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success" value="Sign up">Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
