@extends('layouts.app')
@section('title', 'Contact Address Book')
@section('header')
    <div class="page-title-heading text-primary">
        Report
        <div class="page-title-subheading">
            All stat at a glance.
        </div>
    </div>
@endsection

@section('content')
    <div class="row card">
<div class="card-body">
    <div class="row">
        <div class="col-md-3">
            <div class="card-body">
                <div class="loader">
                    <div class="square-spin">
                        <div></div>
                    </div>
                </div>
                <br>
                <h7 class="card-title">Total Contact</h7>
                <h3><span >{{$total}}</span></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body">
                <div class="loader">
                    <div class="line-scale-pulse-out">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <br>

                <h7 class="card-title">Total Country</h7>
                <h3><span >{{$country}}</span></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body">
                <div class="pacman">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <br>

                <h7 class="card-title">Total City</h7>
                <h3><span >{{$city}}</span></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body">
                <div class="loader">
                    <div class="ball-grid-pulse">
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                        <div style="background-color: rgb(120, 195, 251);"></div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <h7 class="card-title">Total State</h7>
                <h3><span >{{$state}}</span></h3>
            </div>
        </div>


    </div>
</div>
    </div>


@endsection
