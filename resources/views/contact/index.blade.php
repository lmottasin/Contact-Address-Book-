@extends('layouts.app')
@section('title', ' Contact List')
@section('header')
    <div class="page-title-heading text-primary">
        Contact List
        <div class="page-title-subheading">
            See Contact List Without Any Hassle !!!
        </div>
    </div>
@endsection

@section('topcontent')
    <form action="{{ route('filterIndex') }}" method="POST">
        @csrf
    <div class="app-inner-bar">

        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" id="tab-nav-1" class="nav-link active" href="#tab-content-1"
                       aria-selected="false">
                        <span>Contact List</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ request()->segment(1)=='filterIndex'? route('contact.index'): route('contact.create') }}"
                   class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
{{--                    Add Contact--}}
                    {{ request()->segment(1)=='filterIndex'? 'Contact List': 'Add Contact' }}
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>


    <div class="app-inner-bar">

        <div class="inner-bar-center">

            <ul class="nav">
                <li class="nav-item">
                   <div>
                       <h5 class="card-title">Select Filter By</h5>
                       <select  name="type" id="type" >
                               <option value="">Select A Filter</option>
                               <option value="country">Country</option>
                               <option value="city">City</option>
                               <option value="state">State</option>
                       </select>
                   </div>
                </li>
            </ul>
        </div>
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <div>
                        <h5 id="drop_down_list_title" class="card-title"></h5>
                        <select name="drop_down_list" id="drop_down_list"  >

                        </select>
                    </div>
                </li>
            </ul>
        </div>

        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <input type="submit"
                   class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex" value="Filter">
            </div>
        </div>

    </div>
    </form>
@endsection


@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">

            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>State/Division</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($all_contacts as $item)
                <tr>
                    <td>{{ $item->first_name.' '.$item->last_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->state }}</td>

                    <td>
                        <div role="group" class="btn-group-sm btn-group">
                            <a href="{{ route('contact.show', $item->id) }}" class="btn-shadow btn btn-success">View</a>

                                <a href="{{ route('contact.edit', $item->id) }}" class="btn-shadow btn btn-primary">Edit</a>

                                <form action="{{ route('contact.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn-shadow btn btn-sm btn-danger">Del</button>
                                </form>

                        </div>
                    </td>


                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
