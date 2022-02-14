@extends('layouts.app')
@section('title', 'Edit Contact Information')
@section('header')
    <div class="page-title-heading text-primary">
        Edit Contact Information
        <div class="page-title-subheading">
            Edit Contact Information Without Any Hassle !!!
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
                        <span>Edit Contact Information</span>
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
                        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('contact.update',$single_data->id) }}"
                              novalidate="novalidate">
                            @csrf
                            @method('PUT')
            <h2 class="text-center">Edit Contact Information!</h2>
                            <h5 class="card-title text-center">Please! Fillup All The Mendatory Fields!</h5>
                            @include('partials.alerts')
            <hr>
            <br>
            <div class="row">

                {{-- First Name --}}
                <div class="col-md-6">
                    <label for="">First Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-address-book" aria-hidden="true" ></i></span>
                        </div>
                        <input value="{{ $single_data->first_name }}"    placeholder="First Name"  name="first_name" type="text" class="form-control">
                    </div>
                </div>
                {{-- Last Name --}}

                <div class="col-md-6">
                    <label for="">Last Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-address-book" aria-hidden="true" ></i></span>
                        </div>
                        <input value="{{ $single_data->last_name }}"     placeholder="Last Name"  name="last_name" type="text" class="form-control">
                    </div>
                </div>

            </div>
            <br>


            {{-- Email --}}
            <label for="">Email</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                                                                   aria-hidden="true"
                                                                                   title="Copy to use envelope"></i></span>
                </div>
                <input value="{{ $single_data->email }}"     placeholder="Email Address" type="text" id="email" name="email"
                       class="form-control">
            </div>
            <br>

            {{-- Phone --}}
            <label for="">Phone</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-mobile" aria-hidden="true"></i></span>
                </div>
                <input value="{{ $single_data->phone }}"     placeholder="Phone Number" id="phone" name="phone" type="number"
                       class="form-control">
            </div>
            <br>
            {{-- telephone --}}
            <label for="">Telephone</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-fw" aria-hidden="true"></i></span>
                </div>
                <input value="{{ $single_data->telephone }}"    placeholder="Telephone Number"  name="telephone" type="number"
                       class="form-control">
            </div>
            <br>
            {{-- Address --}}
            <label for="">Address</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-address-card" aria-hidden="true"></i></span>
                </div>
                <textarea placeholder="Address" name="address"  class="form-control" >{{ $single_data->address }}</textarea>
            </div>
            <br>

            {{-- Gender --}}
            <label for="">Gender</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-fw" aria-hidden="true" ></i></span>
                </div>
                <select required type="select"  name="gender" class="custom-select">
                    <option {{ $single_data->gender == 'male' ? 'selected': '' }} value="male">Male</option>
                    <option {{ $single_data->gender == 'female' ? 'selected': '' }} value="female">Female</option>
                    <option {{ $single_data->gender == 'others' ? 'selected': '' }} value="others">Others</option>
                </select>
            </div>
            <br>
            {{-- country --}}
            <label for="">Country</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-map" aria-hidden="true"></i></span>
                </div>
                <input   placeholder="Country"  name="country" type="text"
                         value="{{ $single_data->country }}"      class="form-control">
            </div>
            <br>
            {{-- city --}}
            <label for="">City</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                </div>
                <input   placeholder="City"  name="city" value="{{ $single_data->city }}"   type="text"
                         class="form-control">
            </div>
            <br>
            {{-- state --}}
            <label for="">State/Division</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-map-signs" aria-hidden="true"></i></span>
                </div>
                <input   placeholder="State/Division"  name="state" value="{{ $single_data->state }}"   type="text"
                         class="form-control">
            </div>
            <br>


                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-success" value="Sign up">Update
                                </button>
                            </div>
                        </form>
        </div>
    </div>
@endsection
